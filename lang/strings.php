<?php
global $S;



$S = [
    'app' => [
        'name' => 'Prono',
    ],

    'nav' => [
        'home' => 'Home',
        'dms' => 'Direct Messages',
        'groups' => 'Groups',
        'servers' => 'Servers',
        'theatres' => 'Theatres',
        'telegram' => 'Telegrams',
        'settings' => 'Settings',
        'notifications' => 'Notifications',
    ],

    'auth' => [
        'login_title' => 'LOG-IN',
        'enlist_title' => 'EN-LIST',
        'email_placeholder' => 'Electronic Mail',
        'password_placeholder' => 'Password',
        'password_confirm_placeholder' => 'Confirm Password',
        'name_placeholder' => 'Display Name',
        'login_button' => 'Enter',
        'enlist_button' => 'Create Account',
        'link_to_enlist' => 'Create account',
        'link_to_login' => 'Already have account',
        'error_fill_fields' => 'Fill all fields',
        'error_invalid_credentials' => 'Invalid credentials',
        'error_too_many' => 'Too many attempts. Please wait a few minutes and try again.',
        'error_name_length' => 'Name must be 2-32 characters',
        'error_invalid_email' => 'Invalid email format',
        'error_password_length' => 'Password must be at least 8 characters',
        'error_password_mismatch' => 'Passwords do not match',
        'error_email_exists' => 'Email already registered',
        'error_email_banned' => 'This mail is banned.',
        'link_to_forgot' => 'I forgot my password',
        'download_client' => 'Download Prono client for Windows',
        'open_in_client' => 'Open in client',
        'forgot_title' => 'RE-SET',
        'forgot_instruction' => 'Give your electronic mail. If it is enlisted, a resetting link travels to it.',
        'forgot_button' => 'Send resetting link',
        'forgot_sent' => 'If that mail is enlisted, a resetting link is on its way. Look in your inbox.',
        'forgot_send_fail' => 'The letter could not leave just now. Try again later.',
        'back_to_login' => 'Back to log-in',
        'reset_title' => 'NEW PASS-WORD',
        'reset_button' => 'Save & Log-in',
        'reset_invalid' => 'This resetting link is void or has expired.',
        'reset_mail_subject' => 'Prono — pass-word reset',
        'reset_mail_intro' => 'Someone asked to reset the pass-word for this Prono account.',
        'reset_mail_cta' => 'Set a new pass-word',
        'reset_mail_ignore' => 'If this was not you, pay it no mind. Do not reply to this letter.',
        'identifier_placeholder' => 'Electronic Mail or P.I.-№',
        'error_not_verified' => 'You have not entered the first time yet. Open the letter we sent you.',
        'error_account_locked' => 'This account is locked.',
        'enlist_check_mail' => 'Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.',
        'verify_title' => 'FIRST ENTRY',
        'verify_instruction' => 'Reproduce your P.I.-№ and the four-letter code from the letter.',
        'verify_pin_placeholder' => 'P.I.-№',
        'verify_code_placeholder' => 'Four-letter code',
        'verify_button' => 'Enter',
        'verify_invalid_link' => 'This entry link is void or has expired.',
        'verify_burnt' => 'Banned.',
        'verify_mail_subject' => 'Prono — your P.I.-№ and entry code',
        'verify_mail_intro' => 'Welcome. Here are the keys to your new Prono account.',
        'verify_mail_pin_label' => 'Your P.I.-№',
        'verify_mail_code_label' => 'Your one-time entry code',
        'verify_mail_cta' => 'Enter for the first time',
        'verify_mail_warn' => 'Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.',
    ],

    'welcome' => [
        'greeting' => 'Welcome, {name}',
        'subtitle' => 'Select a conversation from the sidebar or start a new one.',
        'pin_label' => 'PIN: {pin}',
    ],

    'friends' => [
        'title' => 'Friends',
        'count' => 'Friends ({count})',
        'empty' => 'No friends yet',
        'add_button' => 'Add Friend',
        'status_friends' => 'Friends',
        'status_pending' => 'Pending',
        'status_declined' => 'Declined',
        'status_blocked' => 'Blocked',
        'request_pending' => 'Request Pending',
        'accept' => 'Accept',
        'decline' => 'Decline',
        'retract' => 'Retract',
        'retract_confirm' => 'Retract this friend request? It will be withdrawn.',
    ],

    'dms' => [
        'title' => 'Direct Messages',
        'empty' => 'Add friends to start messaging',
    ],

    'servers' => [
        'title' => 'Servers',
        'count' => 'Servers ({count})',
        'empty' => 'Join or create a server',
    ],

    'theatres' => [
        'title' => 'Theatres',
        'count' => 'Theatres ({count})',
        'empty' => 'No theatres',
        'role_speaker' => 'SPEAKER',
        'role_listener' => 'LISTENER',
        'create' => 'Create Theatre',
        'name_placeholder' => 'Theatre name',
        'add' => 'Add listener',
        'settings' => 'Theatre settings',
        'leave' => 'Leave theatre',
        'leave_confirm' => 'Leave this theatre?',
        'rename_prompt' => 'New theatre name',
        'broadcast_placeholder' => 'Broadcast to the theatre...',
        'send' => 'Transmit',
        'no_friends_to_add' => 'No friends to add',
        'promote' => 'Make SPEAKER',
        'demote' => 'Make LISTENER',
    ],

    'generic' => [
        'cancel' => 'Cancel',
        'yes' => 'Yes',
        'no' => 'No',
        'confirm' => 'Confirm',
    ],

    'call' => [
        'start' => 'Call',
        'incoming' => 'Call from {name}',
        'accept' => 'Accept',
        'decline' => 'Decline',
        'calling' => 'Calling…',
        'connecting' => 'Connecting…',
        'failed' => 'Could not connect (relay)',
        'in_call' => 'In call',
        'mute' => 'Mute',
        'unmute' => 'Unmute',
        'hang_up' => 'Hang up',
        'unavailable' => 'User is offline',
        'busy' => 'User is busy',
        'declined' => 'Call declined',
        'ended' => 'Call ended',
        'mic_denied' => 'Microphone access denied',
    ],

    'activity' => [
        'heading' => 'Now active',
        'elapsed' => 'elapsed',
        'left' => 'left',
        'paused' => 'Paused.',
        'playing' => 'Playing',
        'streaming' => 'Streaming',
        'listening' => 'Listening',
        'watching' => 'Watching',
        'competing' => 'Competing',
    ],

    'chat' => [
        'input_placeholder' => 'Type a message...',
        'filelarge' => 'File No. {n} is too big, can not up-load.',
        'previewuploadattachment' => 'Up-loading {percentage} %',
        'listener_notice' => 'You are a LISTENER',
        'edited' => '(edited)',
        'untrusten_media' => 'Untrusted media — click to load',
        'untrusten_media_confirm' => 'Are you sure? This loads the media straight from its source, which will see your IP address.',
        'is_typing' => 'is typing...',
        'are_typing' => 'are typing...',
        'replying_to' => 'Replying to',
        'like' => 'Like',
        'paste_too_long_as_file' => 'This message is too long for chat. Would you like to send it as a file instead ?',
        'reply' => 'Reply',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'copy' => 'Copy',
        'copy_raw' => 'Copy raw',
        'copied' => 'Copied',
        'morethan10items' => 'You can not embed more than 10 files !',
        'overlayupload' => 'Stop dragging to embed the file',
        'unknown' => 'Unknown',
        'said' => 'said',
        'reply_said' => '{actor} said :',
        'reply_media' => '{actor}’s sent {kind} at {time}',
        'reply_attachment' => '{actor}’s sent attachment at {time}',
        'reply_unavailable' => 'Original message unavailable',
        'reply_far' => 'Too far up the chat. Click to go there.',
        'media_image' => 'image',
        'media_video' => 'video',
        'media_audio' => 'audio',
        'media_file' => 'file',
        'download' => 'Click to Down-load the Up-loaded file',
        'create_group' => 'Create Group',
        'add_to_group' => 'Add to Group',
        'likes' => 'Likes',
        'new_message_scroll_klick' => '{n} new message( s )',
        'liked_attachment' => 'Attachment @ {time}',
        'no_likes' => 'No liked messages',
        'group_settings' => 'Group Settings',
        'leave_group' => 'Leave Group',
        'leave_confirm' => 'Leave this group?',
        'go_to_latest' => 'Click to go back to Latest chat',
        'empty' => 'No messages yet. Say something to get started.',
        'load_failed' => 'Could not load messages. Click to retry.',
    ],

    'telegram' => [
        'title' => 'Telegrams',
        'received_title' => 'Received Telegrams',
        'empty' => 'No telegrams',
        'priority_routine' => 'ROUTINE',
        'priority_priority' => 'PRIORITY',
        'priority_emergency' => 'EMERGENCY',
    ],

    'profile' => [
        'details' => 'Profile details',
        'pin_label' => 'PIN: {pin}',
        'message_button' => 'Message',
        'block_button' => 'Block',
        'unblock_button' => 'Unblock',
        'block_confirm' => 'Block this user?',
        'shared_friends' => 'Shared Friends',
        'shared_servers' => 'Shared Servers',
        'shared_theatres' => 'Shared Theatres',
        'no_shared_friends' => 'No shared friends',
        'no_shared_servers' => 'No shared servers',
        'no_shared_theatres' => 'No shared theatres',
    ],

    'settings' => [
        'title' => 'Settings',
        'account_section' => 'Account & Security',
        'session_section' => 'Session',
        'images_section' => 'Images',
        'profile_section' => 'Profile',
        'description' => 'Description',
        'description_placeholder' => 'Write something about yourself…',
        'description_preview' => 'Preview',
        'preview_profile' => 'Profile',
        'preview_friend' => 'Friend list',
        'preview_speaker' => 'Theatre speaker',
        'preview_chat' => 'Chat message',
        'language' => 'Language',
        'lang_auto' => 'Automatic',
        'dm' => 'Dark Mode',
        'appearance' => 'Appearance',
        'rich_presence' => 'Allow rich presence?',
        'close' => 'Close',
        'your_pin' => 'Your PIN',
        'your_pin_warn' => 'Your PIN is a private identifier. Share only with trusted sources.',
        'display_name' => 'Display Name',
        'change_name' => 'Change Name',
        'localsettings' => 'Locale',
        'change_password' => 'Change Password',
        'current_password' => 'Current Password',
        'new_password' => 'New Password',
        'confirm_password' => 'Confirm Password',
        'avatar' => 'Avatar',
        'ambiance' => 'Ambiance Image',
        'upload_avatar' => 'Upload Avatar',
        'upload_ambiance' => 'Upload Ambiance',
        'max_size' => 'Max 500 KB',
        'logout' => 'Logout',
        'logout_desc' => 'End your current session',
        'save' => 'Save',
        'saved' => 'Saved',
        'error_name_taken' => 'Name already taken',
        'error_wrong_password' => 'Wrong password',
        'error_file_too_large' => 'File too large (max 500 KB)',
        'error_invalid_file' => 'Invalid file type',
        'notifications' => 'Notifications',
        'global_mute' => 'Global Mute',
        'notification_types' => 'Notification Types',
        'friend_requests' => 'Friend Requests',
        'muting_settings' => 'Muting Settings',
        'friend_mute' => 'Friend request notification mute',
        'friend_change_mute' => 'Friend change notification mute',
        'message_mute' => 'Message notification mute',
        'call_mute' => 'Call notification mute',
        'friend_changes' => 'Friend accepted or removed',
        'direct_messages' => 'Direct Messages',
        'server_mentions' => 'Mentions',
        'mention_mute_prompt' => 'Mention notification mute',
        'account_settings' => 'ACCOUNT SETTINGS',
        'current_email' => 'Current Electronic Mail',
        'friend_request_filtering' => 'Friend Request Filtering',
        'filter_everyone' => 'Everyone',
        'filter_fof' => 'Only friends of friends',
        'dm_permissions' => 'Direct Message Permissions',
        'dm_server_members' => 'Allow DMs from Server Members',
        'dm_theatre_speakers' => 'Allow DMs from Theatre speakers',
        'dm_theatre_listeners' => 'Allow DMs from Theatre listeners',
        'dm_groups' => 'Allow DMs from groups',
        'dm_strangers' => 'Allow DMs from strangers',
        'can_be_callen_by' => 'Voice Chat Permissions',
        'vc_server_members' => 'Allow Voice Chats from Server Members',
        'vc_theatre_speakers' => 'Allow Voice Chats from Theatre speakers',
        'vc_theatre_listeners' => 'Allow Voice Chats from Theatre listeners',
        'vc_groups' => 'Allow Voice Chats from groups',
        'vc_strangers' => 'Allow Voice Chats from strangers',
        'chat_settings' => 'Chat Settings',
        'split_text_prompt' => 'Split long messages',
        'setting_apperance' => 'Show all settings on one page',
        'junicode_show_prompt' => 'Use the serif version of the website',
        'maru_marks' => 'Use the maru versions',
        'off_set' => 'Time offset',
        'day_time_saving' => 'Daylight saving time',
        'session_management' => 'Session Management',
        'log_all_out' => 'LOG ALL OUT [ END ALL SESSIONS ]',
        'devices_section' => 'Devices',
        'this_device' => 'This device',
        'log_out_device' => 'Log out',
        'devices_empty' => 'No active devices',
        'view_people' => 'Show members',
        'delete_account' => 'Delete account',
        'delete_account_confirm' => 'Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?',
    ],
    'groups' => [
        'title' => 'Groups',
        'count' => 'Groups ({count})',
        'empty' => 'No groups yet',
        'group_of' => 'Group of : {names}',
        'create' => 'Enter a name for the group',
    ],
    'status' => [
        'online' => 'Online',
        'away' => 'Away',
        'dnd' => 'Do Not Disturb',
        'offline' => 'Offline',
        'set_status' => 'Set Status',
    ],

    'notifications' => [
        'title' => 'Notifications',
        'empty' => 'No notifications',
        'friend_request' => '{name} sent you a friend request',
        'friend_accept' => 'You are now friends with {name}',
        'friend_remove' => '{name} removed you as a friend',
        'mention' => '{name} mentioned you',
        'server_invite' => '{name} invited you to {server}',
        'mark_read' => 'Mark as read',
        'clear_all' => 'Clear all',
        'as_of' => 'As of {date}',
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',
        'button' => 'Add',
        'success' => 'Friend request sent',
        'error_not_found' => 'User not found',
        'error_invalid_format' => 'Use format: username#1234',
        'error_self' => 'Cannot add yourself',
        'error_already_friends' => 'Already friends',
    ],

    'hover_profile' => [
        'settings' => 'Settings',
        'set_status' => 'Set Status',
        'view_profile' => 'View Profile',
    ],

    'recent' => [
        'title' => 'Recent Conversations',
        'empty' => 'No conversations yet',
    ],

    'people' => [
        'title' => 'People & Servers',
    ],

    'action_menu' => [
        'open_profile' => 'Open profile',
        'read_all' => 'Read all',
        'silence' => 'Silence',
        'unsilence' => 'Unsilence',
        'close' => 'Close',
        'remove_friend' => 'Remove Friend',
        'leave_group' => 'Leave group',
        'remove_from_group' => 'Remove from group',
        'set_owner' => 'Make owner',
        'set_owner_confirm' => 'Make this person the owner? You will hand over your owner rights.',
        'remove_from_group_confirm' => 'Remove this person from the group?',
        'block_confirm' => 'Block this user? You will no longer see each other.',
    ],
    'system' => [
        'member_add' => '{actor} added {target}',
        'member_remove' => '{actor} removed {target}',
        'member_leave' => '{actor} left',
        'member_join' => '{actor} joined',
        'call' => '{actor} started a call that lasted {duration}',
        'call_missed' => 'You missed a call from {actor}',
        'group_rename' => '{actor} named the group « {name} »',
        'group_icon' => '{actor} changed the group icon',
        'group_create' => '{actor} created the group',
        'owner_change' => '{target} is now the owner',
        'friend' => '{actor} and {target} are now friends',
        'like' => '{actor} liked {n} message( s ), {x} time( s ) in total',
    ],
    'emoji' => [
        'search' => 'SEARCH EMOJIS...',
        'not_found' => 'NO EMOJIS FOUND',
        'recents' => 'RECENT EMOJIS',
        'smileys' => 'SMILEYS AND EMOTION',
        'people' => 'PEOPLE AND BODY',
        'animals' => 'ANIMALS AND NATURE',
        'food' => 'FOOD AND DRINK',
        'activities' => 'ACTIVITIES',
        'travel' => 'TRAVEL & PLACES',
        'objects' => 'OBJECTS',
        'symbols' => 'SYMBOLS',
        'flags' => 'FLAGS',
        'custom' => 'CUSTOM',
        'user' => 'YOUR EMOJIS',
        'tabs_emojis' => 'EMOJIS',
        'tabs_gifs' => 'GIFS'
    ],
    'gif' => [
        'tab_history' => 'HISTORY',
        'tab_liked' => 'LIKED',
        'tab_tenor' => 'GIFS',
        'search' => 'SEARCH GIFS...',
        'loading' => 'Loading...',
        'error' => 'Could not load GIFs',
        'empty' => 'Nothing here yet',
        'powered_by' => 'Powered by KLIPY',
    ],
    'crop' => [
        'title' => 'Adjust image',
        'apply' => 'Apply',
        'cancel' => 'Cancel',
        'zoom' => 'Zoom',
        'trim' => 'Trim',
        'processing' => 'Processing…',
        'drag_hint' => 'Drag to reposition · scroll to zoom',
    ],

    'viewer' => [
        'close' => 'Close',
        'download' => 'Download',
        'open_original' => 'Open original',
    ],

    'image' => [
        'change' => 'Change',
        'view' => 'View',
        'revert' => 'Revert',
        'uploading' => 'Uploading…',
    ],

    'errors' => [
        'unauthorized' => 'Unauthorized',
        'invalid_pin' => 'Invalid PIN',
        'user_not_found' => 'User not found',
        'talk_not_found' => 'Talk not found',
        'invalid_talk' => 'Invalid talk',
        'access_denied' => 'Access denied',
    ],
];

if (!function_exists('t')) {
    function t(string $key, array $params = []): string
    {
        global $S;
        $parts = explode('.', $key);
        $value = $S;

        foreach ($parts as $part) {
            if (!isset($value[$part])) {
                return $key;
            }
            $value = $value[$part];
        }

        if (!is_string($value)) {
            return $key;
        }

        foreach ($params as $k => $v) {
            $value = str_replace('{' . $k . '}', $v, $value);
        }

        return $value;
    }
}

if (!function_exists('strings_flat')) {
    function strings_flat(array $tree, string $prefix = ''): array
    {
        $out = [];
        foreach ($tree as $k => $v) {
            if (is_array($v)) $out += strings_flat($v, $prefix . $k . '.');
            elseif (is_string($v)) $out[$prefix . $k] = $v;
        }
        return $out;
    }
}

if (!function_exists('strings_for')) {
    function strings_for(string $lang): array
    {
        $load = function () use ($lang) {
            include __DIR__ . '/strings.php';
            $base = $S;
            if ($lang !== 'strings' && preg_match('/^[a-z]+$/', $lang) && is_file(__DIR__ . '/' . $lang . '.php')) {
                include __DIR__ . '/' . $lang . '.php';
                $base = is_array($S) ? array_replace_recursive($base, $S) : $base;
            }
            return $base;
        };
        $keep = $GLOBALS['S'] ?? null;
        $tree = $load();
        $GLOBALS['S'] = $keep;
        return strings_flat($tree);
    }
}

if (!function_exists('ts')) {
    function ts(string $key, array $params = []): string
    {
        $args = $params ? " data-a='" . htmlspecialchars(json_encode($params, JSON_UNESCAPED_UNICODE), ENT_QUOTES, 'UTF-8') . "'" : '';
        return '<t-s data-k="' . htmlspecialchars($key, ENT_QUOTES, 'UTF-8') . '"' . $args . '>' . htmlspecialchars(t($key, $params), ENT_QUOTES, 'UTF-8') . '</t-s>';
    }
}

if (!function_exists('ta')) {
    function ta(array $map): string
    {
        $pairs = [];
        foreach ($map as $attr => $key) $pairs[] = $attr . ':' . $key;
        return ' data-i18n-a="' . htmlspecialchars(implode(';', $pairs), ENT_QUOTES, 'UTF-8') . '"';
    }
}

if (!function_exists('strings_script')) {
    function strings_script(): string
    {
        global $S;
        return '<script>window.PRONO_STRINGS = ' . json_encode(strings_flat($S), JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) . ';</script>';
    }
}

if (!function_exists('browser_lang_files')) {
    function browser_lang_files(): array
    {
        $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
        $map = [
            'ru' => 'rus',
            'fr' => 'fra',
            'pl' => 'pol',
            'tr' => 'tur',
            'de' => 'deu',
            'az' => 'aze',
            'en' => 'strings',
            'ja' => 'jp',
            'ar' => 'ara',
            'he' => 'kan',
            'zh' => 'chi',
            'hu' => 'mag',
            'ro' => 'rom',
            'es' => 'spa',
        ];
        $ranked = [];
        foreach (explode(',', $accept) as $part) {
            $part = trim($part);
            if ($part === '') continue;
            $q = 1.0;
            $code = $part;
            if (strpos($part, ';') !== false) {
                [$code, $rest] = explode(';', $part, 2);
                if (preg_match('/q=([0-9.]+)/', $rest, $m)) $q = (float)$m[1];
            }
            $primary = strtolower(substr(trim($code), 0, 2));
            if ($primary !== '') $ranked[] = [$primary, $q];
        }
        usort($ranked, fn($a, $b) => $b[1] <=> $a[1]);
        $files = [];
        foreach ($ranked as $entry) {
            $primary = $entry[0];
            if (!isset($map[$primary])) continue;
            $file = $map[$primary];
            if (($file === 'strings' || is_file(__DIR__ . '/' . $file . '.php')) && !in_array($file, $files, true)) {
                $files[] = $file;
            }
        }
        return $files;
    }
}

if (!function_exists('detect_browser_lang')) {
    function detect_browser_lang(): string
    {
        return browser_lang_files()[0] ?? 'strings';
    }
}

if (!function_exists('detect_mail_lang')) {
    function detect_mail_lang(): string
    {
        foreach (browser_lang_files() as $file) {
            if ($file !== 'strings') return $file;
        }
        return 'strings';
    }
}

if (!function_exists('resolve_lang')) {
    function resolve_lang(?string $lang): string
    {
        if (!$lang || $lang === 'auto') return detect_browser_lang();
        return $lang;
    }
}

if (!function_exists('apply_lang')) {
    function apply_lang(string $lang): void
    {
        global $S;
        if ($lang === 'strings' || !preg_match('/^[a-z]+$/', $lang)) return;
        $file = __DIR__ . '/' . $lang . '.php';
        if (!is_file($file)) return;
        $base = $S;
        include $file;
        if (is_array($S)) {
            $S = array_replace_recursive($base, $S);
        } else {
            $S = $base;
        }
    }
}
