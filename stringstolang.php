<?php

if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit("CLI only\n");
}

$LANG_DIR = __DIR__ . '/lang';
$BASE_FILE = $LANG_DIR . '/strings.php';

function fail(string $msg): void {
    fwrite(STDERR, "stringstolang: $msg\n");
    exit(1);
}

function load_S(string $file): array {
    if (!is_file($file)) return [];
    $S = [];
    include $file;
    return (isset($S) && is_array($S)) ? $S : [];
}

function php_q(string $s): string {
    return "'" . addcslashes($s, "\\'") . "'";
}

function comment_text(string $s): string {
    return str_replace(["\r", "\n", "\t"], ' ', $s);
}

function merge_tree(array $base, array $existing): array {
    $out = [];
    foreach ($base as $k => $bv) {
        if (is_array($bv)) {
            $ev = (isset($existing[$k]) && is_array($existing[$k])) ? $existing[$k] : [];
            $out[$k] = merge_tree($bv, $ev);
        } elseif (array_key_exists($k, $existing) && !is_array($existing[$k])) {
            $out[$k] = $existing[$k];
        } else {
            $out[$k] = '';
        }
    }
    foreach ($existing as $k => $ev) {
        if (!array_key_exists($k, $base)) {
            $out[$k] = $ev;
        }
    }
    return $out;
}

function tally(array $base, array $existing, array &$s): void {
    foreach ($base as $k => $bv) {
        if (is_array($bv)) {
            $ev = (isset($existing[$k]) && is_array($existing[$k])) ? $existing[$k] : [];
            tally($bv, $ev, $s);
        } else {
            $s['total']++;
            if (array_key_exists($k, $existing) && !is_array($existing[$k]) && $existing[$k] !== '') {
                $s['translated']++;
            } elseif (array_key_exists($k, $existing) && !is_array($existing[$k])) {
                $s['untranslated']++;
            } else {
                $s['added']++;
            }
        }
    }
    foreach ($existing as $k => $ev) {
        if (!array_key_exists($k, $base)) {
            if (is_array($ev)) tally([], $ev, $s);
            else $s['custom']++;
        }
    }
}

function emit(array $node, ?array $baseNode, int $depth): string {
    $pad = str_repeat('    ', $depth);

    $codes = [];
    $maxw = 0;
    foreach ($node as $k => $v) {
        if (!is_array($v)) {
            $code = php_q((string)$k) . ' => ' . php_q((string)$v) . ',';
            $codes[$k] = $code;
            $w = strlen($code);
            if ($w > $maxw) $maxw = $w;
        }
    }
    $col = min($maxw, 56);

    $out = '';
    $first = true;
    foreach ($node as $k => $v) {
        $inBase = is_array($baseNode) && array_key_exists($k, $baseNode);

        if (is_array($v)) {
            if ($depth === 1 && !$first) $out .= "\n";
            $out .= $pad . php_q((string)$k) . " => [\n";
            $out .= emit($v, $inBase && is_array($baseNode[$k]) ? $baseNode[$k] : null, $depth + 1);
            $out .= $pad . "],\n";
        } else {
            $code = str_pad($codes[$k], $col);
            if ($inBase && !is_array($baseNode[$k])) {
                $out .= $pad . $code . ' // ' . comment_text((string)$baseNode[$k]) . "\n";
            } elseif (!$inBase) {
                $out .= $pad . rtrim($code) . " // (not in base English)\n";
            } else {
                $out .= $pad . rtrim($code) . "\n";
            }
        }
        $first = false;
    }
    return $out;
}

$raw = $argv[1] ?? '';
$lang = strtolower(ltrim($raw, '-'));

if ($lang === '') fail("usage: php stringstolang.php -<lang>   (e.g. -tur)");
if (!preg_match('/^[a-z]+$/', $lang)) fail("lang must match ^[a-z]+$ (got '$raw')");
if ($lang === 'strings') fail("'strings' is the base English file, not an override target");

$base = load_S($BASE_FILE);
if (!$base) fail("could not load base strings from $BASE_FILE");

$target = $LANG_DIR . '/' . $lang . '.php';
$exists = is_file($target);
$existing = $exists ? load_S($target) : [];

$stats = ['total' => 0, 'translated' => 0, 'untranslated' => 0, 'added' => 0, 'custom' => 0];
tally($base, $existing, $stats);

$merged = merge_tree($base, $existing);

$body = emit($merged, $base, 1);
$content = "<?php\n\n\$S = [\n" . $body . "];\n";

if ($exists) {
    if (!@copy($target, $target . '.bak')) fail("could not write backup $target.bak");
}
if (@file_put_contents($target, $content) === false) fail("could not write $target");

$verb = $exists ? 'updated' : 'created';
echo "stringstolang: $verb lang/$lang.php\n";
echo "  total keys      : {$stats['total']}\n";
if ($exists) {
    echo "  translated kept : {$stats['translated']}\n";
    echo "  untranslated    : {$stats['untranslated']}\n";
    echo "  rows added      : {$stats['added']}\n";
    if ($stats['custom'] > 0) echo "  custom (kept)   : {$stats['custom']}\n";
    echo "  backup          : lang/$lang.php.bak\n";
} else {
    echo "  keys left empty; canon English in // comments for translation\n";
}
