<?php

$S = [
    'app' => [
        'name' => 'プロノ', // Prono
    ],

    'nav' => [
        'home' => 'ホーム',                     // Home
        'dms' => 'ダイレクトメッセージ', // Direct Messages
        'groups' => 'グループ',                // Groups
        'servers' => 'サーバー',               // Servers
        'theatres' => 'シアター',              // Theatres
        'telegram' => '電報',                    // Telegrams
        'settings' => '設定',                    // Settings
        'notifications' => '通知',               // Notifications
    ],

    'auth' => [
        'login_title' => 'ログイン',                         // LOG-IN
        'enlist_title' => '登録',                              // EN-LIST
        'email_placeholder' => '電子メール',                // Electronic Mail
        'password_placeholder' => 'パスワード',             // Password
        'password_confirm_placeholder' => 'パスワード（確認）', // Confirm Password
        'name_placeholder' => '表示名',                       // Display Name
        'login_button' => '入る',                              // Enter
        'enlist_button' => 'アカウント作成',              // Create Account
        'link_to_enlist' => 'アカウントを作成',          // Create account
        'link_to_login' => 'すでにアカウントをお持ちの方', // Already have account
        'error_fill_fields' => 'すべての項目を入力してください', // Fill all fields
        'error_invalid_credentials' => '認証情報が正しくありません', // Invalid credentials
        'error_too_many' => '試行回数が多すぎます。数分待ってからもう一度お試しください。', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => '名前は2〜32文字にしてください', // Name must be 2-32 characters
        'error_invalid_email' => 'メールの形式が正しくありません', // Invalid email format
        'error_password_length' => 'パスワードは8文字以上にしてください', // Password must be at least 8 characters
        'error_password_mismatch' => 'パスワードが一致しません', // Passwords do not match
        'error_email_exists' => 'このメールはすでに登録されています', // Email already registered
        'error_email_banned' => 'このメールは禁止されています。', // This mail is banned.
        'link_to_forgot' => 'パスワードを忘れました', // I forgot my password
        'download_client' => 'Windows版プロノクライアントをダウンロード', // Download Prono client for Windows
        'open_in_client' => 'クライアントで開く',       // Open in client
        'forgot_title' => '再設定',                           // RE-SET
        'forgot_instruction' => '電子メールを入力してください。登録済みであれば、再設定リンクをお送りします。', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => '再設定リンクを送る',        // Send resetting link
        'forgot_sent' => 'そのメールが登録済みであれば、再設定リンクを送信しました。受信箱をご確認ください。', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => '手紙をいま送り出せませんでした。しばらくしてからもう一度お試しください。', // The letter could not leave just now. Try again later.
        'back_to_login' => 'ログインに戻る',              // Back to log-in
        'reset_title' => '新しいパスワード',             // NEW PASS-WORD
        'reset_button' => '保存してログイン',            // Save & Log-in
        'reset_invalid' => 'この再設定リンクは無効か、期限が切れています。', // This resetting link is void or has expired.
        'reset_mail_subject' => 'プロノ — パスワードの再設定', // Prono — pass-word reset
        'reset_mail_intro' => 'このプロノアカウントのパスワード再設定が依頼されました。', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => '新しいパスワードを設定する', // Set a new pass-word
        'reset_mail_ignore' => 'お心当たりがない場合は、そのままお捨て置きください。この手紙には返信しないでください。', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => '電子メールまたはP.I.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'まだ初回の入場をしていません。お送りした手紙を開いてください。', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'このアカウントはロックされています。', // This account is locked.
        'enlist_check_mail' => 'アカウントを作成しました。P.I.-№と一回限りの入場コードを記した手紙をお送りしています。開いて初回の入場をしてください。', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => '初回入場',                        // FIRST ENTRY
        'verify_instruction' => '手紙に記されたP.I.-№と4文字のコードをそのまま入力してください。', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-№',                  // P.I.-№
        'verify_code_placeholder' => '4文字のコード',      // Four-letter code
        'verify_button' => '入る',                             // Enter
        'verify_invalid_link' => 'この入場リンクは無効か、期限が切れています。', // This entry link is void or has expired.
        'verify_burnt' => '禁止されました。',            // Banned.
        'verify_mail_subject' => 'プロノ — あなたのP.I.-№と入場コード', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'ようこそ。新しいプロノアカウントの鍵をお届けします。', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'あなたのP.I.-№',       // Your P.I.-№
        'verify_mail_code_label' => 'あなたの一回限りの入場コード', // Your one-time entry code
        'verify_mail_cta' => '初回の入場をする',         // Enter for the first time
        'verify_mail_warn' => '入場ページで両方を正確にそのまま入力してください。一字でも誤るとアカウントは焼失し、メールはロックされます。この手紙には返信しないでください。', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'ようこそ、{name}さん',             // Welcome, {name}
        'subtitle' => 'サイドバーから会話を選ぶか、新しく始めましょう。', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'フレンド',                               // Friends
        'count' => 'フレンド（{count}）',                  // Friends ({count})
        'empty' => 'まだフレンドがいません',          // No friends yet
        'add_button' => 'フレンドを追加',                 // Add Friend
        'status_friends' => 'フレンド',                      // Friends
        'status_pending' => '保留中',                         // Pending
        'status_declined' => '拒否済み',                     // Declined
        'status_blocked' => 'ブロック済み',                // Blocked
        'request_pending' => 'リクエスト保留中',         // Request Pending
        'accept' => '承認',                                    // Accept
        'decline' => '拒否',                                   // Decline
        'retract' => '取り消す',                             // Retract
        'retract_confirm' => 'このフレンドリクエストを取り消しますか？撤回されます。', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'ダイレクトメッセージ',             // Direct Messages
        'empty' => 'フレンドを追加してメッセージを始めましょう', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'サーバー',                               // Servers
        'count' => 'サーバー（{count}）',                  // Servers ({count})
        'empty' => 'サーバーに参加または作成しましょう', // Join or create a server
    ],

    'theatres' => [
        'title' => 'シアター',                               // Theatres
        'count' => 'シアター（{count}）',                  // Theatres ({count})
        'empty' => 'シアターなし',                         // No theatres
        'role_speaker' => '話し手',                           // SPEAKER
        'role_listener' => '聞き手',                          // LISTENER
        'create' => 'シアターを作成',                     // Create Theatre
        'name_placeholder' => 'シアター名',                 // Theatre name
        'add' => '聞き手を追加',                           // Add listener
        'settings' => 'シアター設定',                      // Theatre settings
        'leave' => 'シアターを退出',                      // Leave theatre
        'leave_confirm' => 'このシアターを退出しますか？', // Leave this theatre?
        'rename_prompt' => '新しいシアター名',           // New theatre name
        'broadcast_placeholder' => 'シアターへ放送…',   // Broadcast to the theatre...
        'send' => '送信',                                      // Transmit
        'no_friends_to_add' => '追加できるフレンドがいません', // No friends to add
        'promote' => '話し手にする',                       // Make SPEAKER
        'demote' => '聞き手にする',                        // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'キャンセル', // Cancel
        'yes' => 'はい',             // Yes
        'no' => 'いいえ',           // No
        'confirm' => '確認',         // Confirm
    ],

    'call' => [
        'start' => '通話',                                     // Call
        'incoming' => '{name}さんからの着信',             // Call from {name}
        'accept' => '応答',                                    // Accept
        'decline' => '拒否',                                   // Decline
        'calling' => '呼び出し中…',                       // Calling…
        'connecting' => '接続中…',                          // Connecting…
        'failed' => '接続できませんでした（中継）', // Could not connect (relay)
        'in_call' => '通話中',                                // In call
        'mute' => 'ミュート',                                // Mute
        'unmute' => 'ミュート解除',                        // Unmute
        'hang_up' => '切る',                                   // Hang up
        'unavailable' => 'ユーザーはオフラインです', // User is offline
        'busy' => 'ユーザーは取り込み中です',        // User is busy
        'declined' => '通話は拒否されました',          // Call declined
        'ended' => '通話が終了しました',                // Call ended
        'mic_denied' => 'マイクへのアクセスが拒否されました', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'アクティブ中', // Now active
        'elapsed' => '経過',             // elapsed
        'left' => '残り',                // left
        'paused' => '一時停止中。',  // Paused.
        'playing' => 'プレイ中',       // Playing
        'streaming' => '配信中',        // Streaming
        'listening' => '視聴中',        // Listening
        'watching' => '観戦中',         // Watching
        'competing' => '競技中',        // Competing
    ],

    'chat' => [
        'input_placeholder' => 'メッセージを入力…',    // Type a message...
        'filelarge' => 'ファイル{n}は大きすぎるためアップロードできません。', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'アップロード中 {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'あなたは聞き手です',      // You are a LISTENER
        'edited' => '（編集済み）',                        // (edited)
        'untrusten_media' => '信頼されていないメディア — クリックして読み込む', // Untrusted media — click to load
        'untrusten_media_confirm' => '本当によろしいですか？メディアを提供元から直接読み込むため、提供元にあなたのIPアドレスが知られます。', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'が入力中…',                        // is typing...
        'are_typing' => 'が入力中…',                       // are typing...
        'replying_to' => '返信先',                            // Replying to
        'like' => 'いいね',                                   // Like
        'paste_too_long_as_file' => 'このメッセージはチャットには長すぎます。代わりにファイルとして送信しますか？', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => '返信',                                     // Reply
        'edit' => '編集',                                      // Edit
        'delete' => '削除',                                    // Delete
        'copy' => 'コピー',                                   // Copy
        'copy_raw' => '原文をコピー',                      // Copy raw
        'copied' => 'コピーしました',                     // Copied
        'morethan10items' => '10個を超えるファイルは埋め込めません！', // You can not embed more than 10 files !
        'overlayupload' => 'ドラッグをやめるとファイルを埋め込みます', // Stop dragging to embed the file
        'unknown' => '不明',                                   // Unknown
        'said' => 'の発言',                                   // said
        'reply_said' => '{actor}の発言：',                   // {actor} said :
        'reply_media' => '{actor}が{time}に送った{kind}',   // {actor}’s sent {kind} at {time}
        'reply_attachment' => '{actor}が{time}に送った添付ファイル', // {actor}’s sent attachment at {time}
        'reply_unavailable' => '元のメッセージは利用できません', // Original message unavailable
        'reply_far' => 'チャットのずっと上です。クリックで移動します。', // Too far up the chat. Click to go there.
        'media_image' => '画像',                               // image
        'media_video' => '動画',                               // video
        'media_audio' => '音声',                               // audio
        'media_file' => 'ファイル',                          // file
        'download' => 'クリックしてアップロードされたファイルをダウンロード', // Click to Down-load the Up-loaded file
        'create_group' => 'グループを作成',               // Create Group
        'add_to_group' => 'グループに追加',               // Add to Group
        'likes' => 'いいね',                                  // Likes
        'new_message_scroll_klick' => '新着メッセージ{n}件', // {n} new message( s )
        'liked_attachment' => '添付ファイル @ {time}',     // Attachment @ {time}
        'no_likes' => 'いいねしたメッセージはありません', // No liked messages
        'group_settings' => 'グループ設定',                // Group Settings
        'leave_group' => 'グループを退出',                // Leave Group
        'leave_confirm' => 'このグループを退出しますか？', // Leave this group?
        'go_to_latest' => 'クリックして最新のチャットへ戻る', // Click to go back to Latest chat
        'empty' => 'まだメッセージがありません。何か話しかけてみましょう。', // No messages yet. Say something to get started.
        'load_failed' => 'メッセージを読み込めませんでした。クリックして再試行。', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => '電報',                      // Telegrams
        'received_title' => '受信した電報', // Received Telegrams
        'empty' => '電報なし',                // No telegrams
        'priority_routine' => '通常',           // ROUTINE
        'priority_priority' => '優先',          // PRIORITY
        'priority_emergency' => '緊急',         // EMERGENCY
    ],

    'profile' => [
        'details' => 'プロフィール詳細',                 // Profile details
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
        'message_button' => 'メッセージ',                   // Message
        'block_button' => 'ブロック',                        // Block
        'unblock_button' => 'ブロック解除',                // Unblock
        'block_confirm' => 'このユーザーをブロックしますか？', // Block this user?
        'shared_friends' => '共通のフレンド',             // Shared Friends
        'shared_servers' => '共通のサーバー',             // Shared Servers
        'shared_theatres' => '共通のシアター',            // Shared Theatres
        'no_shared_friends' => '共通のフレンドはいません', // No shared friends
        'no_shared_servers' => '共通のサーバーはありません', // No shared servers
        'no_shared_theatres' => '共通のシアターはありません', // No shared theatres
    ],

    'settings' => [
        'title' => '設定',                                     // Settings
        'account_section' => 'アカウントとセキュリティ', // Account & Security
        'session_section' => 'セッション',                  // Session
        'images_section' => '画像',                            // Images
        'profile_section' => 'プロフィール',               // Profile
        'description' => '自己紹介',                         // Description
        'description_placeholder' => 'あなたについて書いてみましょう…', // Write something about yourself…
        'description_preview' => 'プレビュー',              // Preview
        'preview_profile' => 'プロフィール',               // Profile
        'preview_friend' => 'フレンド一覧',                // Friend list
        'preview_speaker' => 'シアターの話し手',         // Theatre speaker
        'preview_chat' => 'チャットメッセージ',         // Chat message
        'language' => '言語',                                  // Language
        'lang_auto' => '自動',                                 // Automatic
        'dm' => 'ダークモード',                            // Dark Mode
        'appearance' => '外観',                                // Appearance
        'rich_presence' => 'リッチプレゼンスを許可しますか？', // Allow rich presence?
        'close' => '閉じる',                                  // Close
        'your_pin' => 'あなたのPIN',                         // Your PIN
        'your_pin_warn' => 'PINは非公開の識別子です。信頼できる相手とのみ共有してください。', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => '表示名',                           // Display Name
        'change_name' => '名前を変更',                      // Change Name
        'localsettings' => 'ロケール',                       // Locale
        'change_password' => 'パスワードを変更',         // Change Password
        'current_password' => '現在のパスワード',        // Current Password
        'new_password' => '新しいパスワード',            // New Password
        'confirm_password' => 'パスワード（確認）',     // Confirm Password
        'avatar' => 'アバター',                              // Avatar
        'ambiance' => 'アンビエンス画像',                // Ambiance Image
        'upload_avatar' => 'アバターをアップロード',  // Upload Avatar
        'upload_ambiance' => 'アンビエンスをアップロード', // Upload Ambiance
        'max_size' => '最大500 KB',                            // Max 500 KB
        'logout' => 'ログアウト',                           // Logout
        'logout_desc' => '現在のセッションを終了します', // End your current session
        'save' => '保存',                                      // Save
        'saved' => '保存しました',                         // Saved
        'error_name_taken' => 'その名前はすでに使われています', // Name already taken
        'error_wrong_password' => 'パスワードが違います', // Wrong password
        'error_file_too_large' => 'ファイルが大きすぎます（最大500 KB）', // File too large (max 500 KB)
        'error_invalid_file' => 'ファイル形式が正しくありません', // Invalid file type
        'notifications' => '通知',                             // Notifications
        'global_mute' => '全体ミュート',                   // Global Mute
        'notification_types' => '通知の種類',               // Notification Types
        'friend_requests' => 'フレンドリクエスト',      // Friend Requests
        'muting_settings' => 'ミュート設定',               // Muting Settings
        'friend_mute' => 'フレンドリクエスト通知をミュート', // Friend request notification mute
        'friend_change_mute' => 'フレンド変更通知をミュート', // Friend change notification mute
        'message_mute' => 'メッセージ通知をミュート', // Message notification mute
        'call_mute' => '通話通知をミュート',            // Call notification mute
        'friend_changes' => 'フレンドの承認または解除', // Friend accepted or removed
        'direct_messages' => 'ダイレクトメッセージ',   // Direct Messages
        'server_mentions' => 'メンション',                  // Mentions
        'mention_mute_prompt' => 'メンション通知をミュート', // Mention notification mute
        'account_settings' => 'アカウント設定',           // ACCOUNT SETTINGS
        'current_email' => '現在の電子メール',           // Current Electronic Mail
        'friend_request_filtering' => 'フレンドリクエストの制限', // Friend Request Filtering
        'filter_everyone' => 'すべての人',                  // Everyone
        'filter_fof' => 'フレンドのフレンドのみ',     // Only friends of friends
        'dm_permissions' => 'ダイレクトメッセージの許可', // Direct Message Permissions
        'dm_server_members' => 'サーバーメンバーからのDMを許可', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'シアターの話し手からのDMを許可', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'シアターの聞き手からのDMを許可', // Allow DMs from Theatre listeners
        'dm_groups' => 'グループからのDMを許可',       // Allow DMs from groups
        'dm_strangers' => '知らない人からのDMを許可', // Allow DMs from strangers
        'can_be_callen_by' => 'ボイスチャットの許可',  // Voice Chat Permissions
        'vc_server_members' => 'サーバーメンバーからのボイスチャットを許可', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'シアターの話し手からのボイスチャットを許可', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'シアターの聞き手からのボイスチャットを許可', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'グループからのボイスチャットを許可', // Allow Voice Chats from groups
        'vc_strangers' => '知らない人からのボイスチャットを許可', // Allow Voice Chats from strangers
        'chat_settings' => 'チャット設定',                 // Chat Settings
        'split_text_prompt' => '長いメッセージを分割する', // Split long messages
        'setting_apperance' => 'すべての設定を1ページに表示する', // Show all settings on one page
        'junicode_show_prompt' => 'ウェブサイトの明朝体版を使う', // Use the serif version of the website
        'maru_marks' => '丸印版を使う',                       // Use the maru versions
        'off_set' => '時差',                                   // Time offset
        'day_time_saving' => '夏時間',                        // Daylight saving time
        'session_management' => 'セッション管理',         // Session Management
        'log_all_out' => 'すべてログアウト［全セッションを終了］', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'デバイス',                     // Devices
        'this_device' => 'このデバイス',                   // This device
        'log_out_device' => 'ログアウト',                   // Log out
        'devices_empty' => 'アクティブなデバイスはありません', // No active devices
        'view_people' => 'メンバーを表示',                // Show members
        'delete_account' => 'アカウントを削除',          // Delete account
        'delete_account_confirm' => 'このアカウントを孤児化しますか？名前・メール・画像は消去され、復元できません。メッセージは残り、匿名の孤児のものとして扱われます。本当によろしいですか？', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'グループ',                               // Groups
        'count' => 'グループ（{count}）',                  // Groups ({count})
        'empty' => 'まだグループがありません',       // No groups yet
        'group_of' => 'グループ：{names}',                  // Group of : {names}
        'create' => 'グループの名前を入力してください', // Enter a name for the group
    ],

    'status' => [
        'online' => 'オンライン',              // Online
        'away' => '離席中',                      // Away
        'dnd' => '取り込み中',                 // Do Not Disturb
        'offline' => 'オフライン',             // Offline
        'set_status' => 'ステータスを設定', // Set Status
    ],

    'notifications' => [
        'title' => '通知',                                     // Notifications
        'empty' => '通知はありません',                   // No notifications
        'friend_request' => '{name}さんからフレンドリクエストが届きました', // {name} sent you a friend request
        'friend_accept' => '{name}さんとフレンドになりました', // You are now friends with {name}
        'friend_remove' => '{name}さんがあなたをフレンドから外しました', // {name} removed you as a friend
        'mention' => '{name}さんがあなたをメンションしました', // {name} mentioned you
        'server_invite' => '{name}さんが{server}にあなたを招待しました', // {name} invited you to {server}
        'mark_read' => '既読にする',                        // Mark as read
        'clear_all' => 'すべて消去',                        // Clear all
        'as_of' => '{date}時点',                               // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',                        // username#1234
        'button' => '追加',                                    // Add
        'success' => 'フレンドリクエストを送信しました', // Friend request sent
        'error_not_found' => 'ユーザーが見つかりません', // User not found
        'error_invalid_format' => '形式：username#1234',      // Use format: username#1234
        'error_self' => '自分自身は追加できません',  // Cannot add yourself
        'error_already_friends' => 'すでにフレンドです', // Already friends
    ],

    'hover_profile' => [
        'settings' => '設定',                          // Settings
        'set_status' => 'ステータスを設定',      // Set Status
        'view_profile' => 'プロフィールを見る', // View Profile
    ],

    'recent' => [
        'title' => '最近の会話',                // Recent Conversations
        'empty' => 'まだ会話がありません', // No conversations yet
    ],

    'people' => [
        'title' => 'ユーザーとサーバー', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'プロフィールを開く',         // Open profile
        'read_all' => 'すべて既読',                         // Read all
        'silence' => 'ミュート',                             // Silence
        'unsilence' => 'ミュート解除',                     // Unsilence
        'close' => '閉じる',                                  // Close
        'remove_friend' => 'フレンドを削除',              // Remove Friend
        'leave_group' => 'グループを退出',                // Leave group
        'remove_from_group' => 'グループから外す',       // Remove from group
        'set_owner' => 'オーナーにする',                  // Make owner
        'set_owner_confirm' => 'この人をオーナーにしますか？あなたのオーナー権限は引き渡されます。', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'この人をグループから外しますか？', // Remove this person from the group?
        'block_confirm' => 'このユーザーをブロックしますか？お互いに表示されなくなります。', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor}が{target}を追加しました', // {actor} added {target}
        'member_remove' => '{actor}が{target}を外しました', // {actor} removed {target}
        'member_leave' => '{actor}が退出しました',        // {actor} left
        'member_join' => '{actor}が参加しました',         // {actor} joined
        'call' => '{actor}が通話を開始しました（通話時間 {duration}）', // {actor} started a call that lasted {duration}
        'call_missed' => '{actor}からの通話に出られませんでした', // You missed a call from {actor}
        'group_rename' => '{actor}がグループ名を「{name}」にしました', // {actor} named the group « {name} »
        'group_icon' => '{actor}がグループアイコンを変更しました', // {actor} changed the group icon
        'group_create' => '{actor}がグループを作成しました', // {actor} created the group
        'owner_change' => '{target}が新しいオーナーになりました', // {target} is now the owner
        'friend' => '{actor}と{target}がフレンドになりました', // {actor} and {target} are now friends
        'like' => '{actor}が{n}件のメッセージに合計{x}回いいねしました', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => '絵文字を検索…',                // SEARCH EMOJIS...
        'not_found' => '絵文字が見つかりません', // NO EMOJIS FOUND
        'recents' => '最近の絵文字',                  // RECENT EMOJIS
        'smileys' => '顔と感情',                        // SMILEYS AND EMOTION
        'people' => '人と体',                            // PEOPLE AND BODY
        'animals' => '動物と自然',                     // ANIMALS AND NATURE
        'food' => '食べ物と飲み物',                  // FOOD AND DRINK
        'activities' => 'アクティビティ',            // ACTIVITIES
        'travel' => '旅行と場所',                      // TRAVEL & PLACES
        'objects' => 'オブジェクト',                  // OBJECTS
        'symbols' => '記号',                              // SYMBOLS
        'flags' => '旗',                                   // FLAGS
        'custom' => 'カスタム',                         // CUSTOM
        'user' => 'あなたの絵文字',                  // YOUR EMOJIS
        'tabs_emojis' => '絵文字',                       // EMOJIS
        'tabs_gifs' => 'GIF',                               // GIFS
    ],

    'gif' => [
        'tab_history' => '履歴',                         // HISTORY
        'tab_liked' => 'いいね',                        // LIKED
        'tab_tenor' => 'GIF',                              // GIFS
        'search' => 'GIFを検索…',                     // SEARCH GIFS...
        'loading' => '読み込み中…',                 // Loading...
        'error' => 'GIFを読み込めませんでした', // Could not load GIFs
        'empty' => 'まだ何もありません',          // Nothing here yet
        'powered_by' => 'Powered by KLIPY',                // Powered by KLIPY
    ],

    'crop' => [
        'title' => '画像を調整',                            // Adjust image
        'apply' => '適用',                                     // Apply
        'cancel' => 'キャンセル',                           // Cancel
        'zoom' => 'ズーム',                                   // Zoom
        'trim' => 'トリミング',                             // Trim
        'processing' => '処理中…',                          // Processing…
        'drag_hint' => 'ドラッグで位置調整 · スクロールでズーム', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => '閉じる',             // Close
        'download' => 'ダウンロード', // Download
        'open_original' => '元を開く',  // Open original
    ],

    'image' => [
        'change' => '変更',                      // Change
        'view' => '表示',                        // View
        'revert' => '元に戻す',                // Revert
        'uploading' => 'アップロード中…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => '認証されていません',         // Unauthorized
        'invalid_pin' => 'PINが正しくありません',       // Invalid PIN
        'user_not_found' => 'ユーザーが見つかりません', // User not found
        'talk_not_found' => 'トークが見つかりません', // Talk not found
        'invalid_talk' => 'トークが正しくありません', // Invalid talk
        'access_denied' => 'アクセスが拒否されました', // Access denied
    ],
];
