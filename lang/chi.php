<?php

$S = [
    'app' => [
        'name' => '普羅諾', // Prono
    ],

    'nav' => [
        'home' => '首頁',          // Home
        'dms' => '私訊',           // Direct Messages
        'groups' => '群組',        // Groups
        'servers' => '伺服器',    // Servers
        'theatres' => '劇院',      // Theatres
        'telegram' => '電報',      // Telegrams
        'settings' => '設定',      // Settings
        'notifications' => '通知', // Notifications
    ],

    'auth' => [
        'login_title' => '登入',                               // LOG-IN
        'enlist_title' => '註冊',                              // EN-LIST
        'email_placeholder' => '電子郵件',                   // Electronic Mail
        'password_placeholder' => '密碼',                      // Password
        'password_confirm_placeholder' => '確認密碼',        // Confirm Password
        'name_placeholder' => '顯示名稱',                    // Display Name
        'login_button' => '進入',                              // Enter
        'enlist_button' => '建立帳號',                       // Create Account
        'link_to_enlist' => '建立帳號',                      // Create account
        'link_to_login' => '已有帳號',                       // Already have account
        'error_fill_fields' => '請填寫所有欄位',          // Fill all fields
        'error_invalid_credentials' => '登入資料不正確',  // Invalid credentials
        'error_too_many' => '嘗試次數過多，請等待幾分鐘後再試。', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => '名稱須為 2 至 32 個字元', // Name must be 2-32 characters
        'error_invalid_email' => '電子郵件格式不正確',  // Invalid email format
        'error_password_length' => '密碼至少須有 8 個字元', // Password must be at least 8 characters
        'error_password_mismatch' => '兩次輸入的密碼不一致', // Passwords do not match
        'error_email_exists' => '此電子郵件已被註冊',   // Email already registered
        'error_email_banned' => '此電子郵件已被封鎖。', // This mail is banned.
        'link_to_forgot' => '我忘記密碼了',                // I forgot my password
        'download_client' => '下載 Windows 版普羅諾用戶端', // Download Prono client for Windows
        'open_in_client' => '在用戶端中開啟',             // Open in client
        'forgot_title' => '重設',                              // RE-SET
        'forgot_instruction' => '請輸入您的電子郵件。若已註冊，重設連結將寄到該信箱。', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => '寄送重設連結',                 // Send resetting link
        'forgot_sent' => '若該電子郵件已註冊，重設連結已在路上。請查看您的收件匣。', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => '信件暫時無法寄出，請稍後再試。', // The letter could not leave just now. Try again later.
        'back_to_login' => '返回登入',                       // Back to log-in
        'reset_title' => '新密碼',                            // NEW PASS-WORD
        'reset_button' => '儲存並登入',                     // Save & Log-in
        'reset_invalid' => '此重設連結無效或已過期。', // This resetting link is void or has expired.
        'reset_mail_subject' => '普羅諾 — 密碼重設',    // Prono — pass-word reset
        'reset_mail_intro' => '有人要求重設此普羅諾帳號的密碼。', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => '設定新密碼',                   // Set a new pass-word
        'reset_mail_ignore' => '若這不是您本人所為，請不必理會。請勿回覆此信。', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => '電子郵件或 P.I.-№',  // Electronic Mail or P.I.-№
        'error_not_verified' => '您尚未首次進入。請開啟我們寄給您的信。', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => '此帳號已被鎖定。',    // This account is locked.
        'enlist_check_mail' => '帳號已建立。一封載有您的 P.I.-№ 與一次性進入碼的信已在路上。請開啟它以首次進入。', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => '首次進入',                        // FIRST ENTRY
        'verify_instruction' => '請照信中所載，原樣輸入您的 P.I.-№ 與四個字母的代碼。', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-№',                  // P.I.-№
        'verify_code_placeholder' => '四個字母的代碼',    // Four-letter code
        'verify_button' => '進入',                             // Enter
        'verify_invalid_link' => '此進入連結無效或已過期。', // This entry link is void or has expired.
        'verify_burnt' => '已封鎖。',                        // Banned.
        'verify_mail_subject' => '普羅諾 — 您的 P.I.-№ 與進入碼', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => '歡迎。這是您新普羅諾帳號的鑰匙。', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => '您的 P.I.-№',            // Your P.I.-№
        'verify_mail_code_label' => '您的一次性進入碼',  // Your one-time entry code
        'verify_mail_cta' => '首次進入',                     // Enter for the first time
        'verify_mail_warn' => '請在進入頁面上原樣輸入兩者。錯一個字就會燒毀帳號並鎖定信箱。請勿回覆此信。', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => '歡迎，{name}',                         // Welcome, {name}
        'subtitle' => '從側邊欄選擇一個對話，或開始新的對話。', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN：{pin}',                            // PIN: {pin}
    ],

    'friends' => [
        'title' => '好友',                                     // Friends
        'count' => '好友（{count}）',                        // Friends ({count})
        'empty' => '尚無好友',                               // No friends yet
        'add_button' => '新增好友',                          // Add Friend
        'status_friends' => '好友',                            // Friends
        'status_pending' => '待處理',                         // Pending
        'status_declined' => '已拒絕',                        // Declined
        'status_blocked' => '已封鎖',                         // Blocked
        'request_pending' => '請求待處理',                  // Request Pending
        'accept' => '接受',                                    // Accept
        'decline' => '拒絕',                                   // Decline
        'retract' => '收回',                                   // Retract
        'retract_confirm' => '要收回這個好友請求嗎？它將被撤回。', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => '私訊',                         // Direct Messages
        'empty' => '新增好友即可開始傳訊', // Add friends to start messaging
    ],

    'servers' => [
        'title' => '伺服器',                // Servers
        'count' => '伺服器（{count}）',   // Servers ({count})
        'empty' => '加入或建立伺服器', // Join or create a server
    ],

    'theatres' => [
        'title' => '劇院',                               // Theatres
        'count' => '劇院（{count}）',                  // Theatres ({count})
        'empty' => '沒有劇院',                         // No theatres
        'role_speaker' => '發言者',                     // SPEAKER
        'role_listener' => '聆聽者',                    // LISTENER
        'create' => '建立劇院',                        // Create Theatre
        'name_placeholder' => '劇院名稱',              // Theatre name
        'add' => '新增聆聽者',                        // Add listener
        'settings' => '劇院設定',                      // Theatre settings
        'leave' => '離開劇院',                         // Leave theatre
        'leave_confirm' => '要離開這間劇院嗎？',  // Leave this theatre?
        'rename_prompt' => '新的劇院名稱',           // New theatre name
        'broadcast_placeholder' => '向劇院廣播…',   // Broadcast to the theatre...
        'send' => '發送',                                // Transmit
        'no_friends_to_add' => '沒有可新增的好友', // No friends to add
        'promote' => '設為發言者',                    // Make SPEAKER
        'demote' => '設為聆聽者',                     // Make LISTENER
    ],

    'generic' => [
        'cancel' => '取消',  // Cancel
        'yes' => '是',        // Yes
        'no' => '否',         // No
        'confirm' => '確認', // Confirm
    ],

    'call' => [
        'start' => '通話',                     // Call
        'incoming' => '{name} 來電',           // Call from {name}
        'accept' => '接聽',                    // Accept
        'decline' => '拒接',                   // Decline
        'calling' => '撥號中…',             // Calling…
        'connecting' => '連線中…',          // Connecting…
        'failed' => '無法連線（中繼）',  // Could not connect (relay)
        'in_call' => '通話中',                // In call
        'mute' => '靜音',                      // Mute
        'unmute' => '取消靜音',              // Unmute
        'hang_up' => '掛斷',                   // Hang up
        'unavailable' => '使用者已離線',   // User is offline
        'busy' => '使用者忙線中',          // User is busy
        'declined' => '通話已被拒絕',      // Call declined
        'ended' => '通話已結束',            // Call ended
        'mic_denied' => '麥克風存取遭拒', // Microphone access denied
    ],

    'activity' => [
        'heading' => '目前活動中', // Now active
        'elapsed' => '已經過',       // elapsed
        'left' => '剩餘',             // left
        'paused' => '已暫停。',     // Paused.
        'playing' => '遊玩中',       // Playing
        'streaming' => '直播中',     // Streaming
        'listening' => '聆聽中',     // Listening
        'watching' => '觀看中',      // Watching
        'competing' => '競賽中',     // Competing
    ],

    'chat' => [
        'input_placeholder' => '輸入訊息…',                // Type a message...
        'filelarge' => '第 {n} 個檔案過大，無法上傳。', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => '上傳中 {percentage} %', // Up-loading {percentage} %
        'listener_notice' => '您是聆聽者',                  // You are a LISTENER
        'edited' => '（已編輯）',                           // (edited)
        'untrusten_media' => '不受信任的媒體 — 點擊以載入', // Untrusted media — click to load
        'untrusten_media_confirm' => '確定嗎？這會直接從來源載入媒體，來源將看到您的 IP 位址。', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => '正在輸入…',                        // is typing...
        'are_typing' => '正在輸入…',                       // are typing...
        'replying_to' => '回覆給',                            // Replying to
        'like' => '讚',                                         // Like
        'paste_too_long_as_file' => '這則訊息太長，不適合聊天。要改以檔案傳送嗎？', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => '回覆',                                     // Reply
        'edit' => '編輯',                                      // Edit
        'delete' => '刪除',                                    // Delete
        'copy' => '複製',                                      // Copy
        'copy_raw' => '複製原文',                            // Copy raw
        'copied' => '已複製',                                 // Copied
        'morethan10items' => '最多只能嵌入 10 個檔案！', // You can not embed more than 10 files !
        'overlayupload' => '停止拖曳即可嵌入檔案',     // Stop dragging to embed the file
        'unknown' => '未知',                                   // Unknown
        'said' => '說',                                         // said
        'reply_said' => '{actor} 說：',                        // {actor} said :
        'reply_media' => '{actor} 於 {time} 傳送的{kind}',   // {actor}’s sent {kind} at {time}
        'reply_attachment' => '{actor} 於 {time} 傳送的附件', // {actor}’s sent attachment at {time}
        'reply_unavailable' => '原訊息無法使用',          // Original message unavailable
        'reply_far' => '在聊天室更上方。點擊前往。', // Too far up the chat. Click to go there.
        'media_image' => '圖片',                               // image
        'media_video' => '影片',                               // video
        'media_audio' => '音訊',                               // audio
        'media_file' => '檔案',                                // file
        'download' => '點擊下載已上傳的檔案',          // Click to Down-load the Up-loaded file
        'create_group' => '建立群組',                        // Create Group
        'add_to_group' => '加入群組',                        // Add to Group
        'likes' => '讚',                                        // Likes
        'new_message_scroll_klick' => '{n} 則新訊息',        // {n} new message( s )
        'liked_attachment' => '附件 @ {time}',                 // Attachment @ {time}
        'no_likes' => '沒有按讚的訊息',                   // No liked messages
        'group_settings' => '群組設定',                      // Group Settings
        'leave_group' => '離開群組',                         // Leave Group
        'leave_confirm' => '要離開這個群組嗎？',        // Leave this group?
        'go_to_latest' => '點擊回到最新的聊天',         // Click to go back to Latest chat
        'empty' => '尚無訊息。說點什麼開始吧。',    // No messages yet. Say something to get started.
        'load_failed' => '無法載入訊息。點擊重試。', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => '電報',                   // Telegrams
        'received_title' => '收到的電報', // Received Telegrams
        'empty' => '沒有電報',             // No telegrams
        'priority_routine' => '普通',        // ROUTINE
        'priority_priority' => '優先',       // PRIORITY
        'priority_emergency' => '緊急',      // EMERGENCY
    ],

    'profile' => [
        'details' => '個人檔案詳情',                   // Profile details
        'pin_label' => 'PIN：{pin}',                        // PIN: {pin}
        'message_button' => '傳訊',                        // Message
        'block_button' => '封鎖',                          // Block
        'unblock_button' => '解除封鎖',                  // Unblock
        'block_confirm' => '要封鎖這位使用者嗎？', // Block this user?
        'shared_friends' => '共同好友',                  // Shared Friends
        'shared_servers' => '共同伺服器',               // Shared Servers
        'shared_theatres' => '共同劇院',                 // Shared Theatres
        'no_shared_friends' => '沒有共同好友',         // No shared friends
        'no_shared_servers' => '沒有共同伺服器',      // No shared servers
        'no_shared_theatres' => '沒有共同劇院',        // No shared theatres
    ],

    'settings' => [
        'title' => '設定',                                     // Settings
        'account_section' => '帳號與安全',                  // Account & Security
        'session_section' => '工作階段',                     // Session
        'images_section' => '圖片',                            // Images
        'profile_section' => '個人檔案',                     // Profile
        'description' => '簡介',                               // Description
        'description_placeholder' => '寫點關於您自己的事…', // Write something about yourself…
        'description_preview' => '預覽',                       // Preview
        'preview_profile' => '個人檔案',                     // Profile
        'preview_friend' => '好友清單',                      // Friend list
        'preview_speaker' => '劇院發言者',                  // Theatre speaker
        'preview_chat' => '聊天訊息',                        // Chat message
        'language' => '語言',                                  // Language
        'lang_auto' => '自動',                                 // Automatic
        'dm' => '深色模式',                                  // Dark Mode
        'appearance' => '外觀',                                // Appearance
        'rich_presence' => '允許豐富狀態顯示嗎？',     // Allow rich presence?
        'close' => '關閉',                                     // Close
        'your_pin' => '您的 PIN',                              // Your PIN
        'your_pin_warn' => '您的 PIN 是私人識別碼，請只分享給可信任的對象。', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => '顯示名稱',                        // Display Name
        'change_name' => '更改名稱',                         // Change Name
        'localsettings' => '地區設定',                       // Locale
        'change_password' => '更改密碼',                     // Change Password
        'current_password' => '目前的密碼',                 // Current Password
        'new_password' => '新密碼',                           // New Password
        'confirm_password' => '確認密碼',                    // Confirm Password
        'avatar' => '大頭貼',                                 // Avatar
        'ambiance' => '氛圍圖片',                            // Ambiance Image
        'upload_avatar' => '上傳大頭貼',                    // Upload Avatar
        'upload_ambiance' => '上傳氛圍圖片',               // Upload Ambiance
        'max_size' => '上限 500 KB',                           // Max 500 KB
        'logout' => '登出',                                    // Logout
        'logout_desc' => '結束您目前的工作階段',       // End your current session
        'save' => '儲存',                                      // Save
        'saved' => '已儲存',                                  // Saved
        'error_name_taken' => '名稱已被使用',              // Name already taken
        'error_wrong_password' => '密碼錯誤',                // Wrong password
        'error_file_too_large' => '檔案過大（上限 500 KB）', // File too large (max 500 KB)
        'error_invalid_file' => '檔案類型無效',            // Invalid file type
        'notifications' => '通知',                             // Notifications
        'global_mute' => '全域靜音',                         // Global Mute
        'notification_types' => '通知類型',                  // Notification Types
        'friend_requests' => '好友請求',                     // Friend Requests
        'muting_settings' => '靜音設定',                     // Muting Settings
        'friend_mute' => '好友請求通知靜音',             // Friend request notification mute
        'friend_change_mute' => '好友變動通知靜音',      // Friend change notification mute
        'message_mute' => '訊息通知靜音',                  // Message notification mute
        'call_mute' => '通話通知靜音',                     // Call notification mute
        'friend_changes' => '好友已接受或已移除',       // Friend accepted or removed
        'direct_messages' => '私訊',                           // Direct Messages
        'server_mentions' => '提及',                           // Mentions
        'mention_mute_prompt' => '提及通知靜音',           // Mention notification mute
        'account_settings' => '帳號設定',                    // ACCOUNT SETTINGS
        'current_email' => '目前的電子郵件',              // Current Electronic Mail
        'friend_request_filtering' => '好友請求篩選',      // Friend Request Filtering
        'filter_everyone' => '所有人',                        // Everyone
        'filter_fof' => '僅限好友的好友',                 // Only friends of friends
        'dm_permissions' => '私訊權限',                      // Direct Message Permissions
        'dm_server_members' => '允許伺服器成員傳送私訊', // Allow DMs from Server Members
        'dm_theatre_speakers' => '允許劇院發言者傳送私訊', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => '允許劇院聆聽者傳送私訊', // Allow DMs from Theatre listeners
        'dm_groups' => '允許群組傳送私訊',               // Allow DMs from groups
        'dm_strangers' => '允許陌生人傳送私訊',         // Allow DMs from strangers
        'can_be_callen_by' => '語音通話權限',              // Voice Chat Permissions
        'vc_server_members' => '允許伺服器成員發起語音通話', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => '允許劇院發言者發起語音通話', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => '允許劇院聆聽者發起語音通話', // Allow Voice Chats from Theatre listeners
        'vc_groups' => '允許群組發起語音通話',         // Allow Voice Chats from groups
        'vc_strangers' => '允許陌生人發起語音通話',   // Allow Voice Chats from strangers
        'chat_settings' => '聊天設定',                       // Chat Settings
        'split_text_prompt' => '分割過長的訊息',          // Split long messages
        'setting_apperance' => '在同一頁顯示所有設定', // Show all settings on one page
        'junicode_show_prompt' => '使用網站的襯線體版本', // Use the serif version of the website
        'maru_marks' => '使用圓圈（丸）標記版本',     // Use the maru versions
        'off_set' => '時差',                                   // Time offset
        'day_time_saving' => '日光節約時間',               // Daylight saving time
        'session_management' => '工作階段管理',            // Session Management
        'log_all_out' => '全部登出［結束所有工作階段］', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => '裝置',                           // Devices
        'this_device' => '這部裝置',                         // This device
        'log_out_device' => '登出',                            // Log out
        'devices_empty' => '沒有使用中的裝置',           // No active devices
        'view_people' => '顯示成員',                         // Show members
        'delete_account' => '刪除帳號',                      // Delete account
        'delete_account_confirm' => '要讓這個帳號成為孤兒嗎？您的名稱、電子郵件與圖片將被清除且無法復原。您的訊息會保留，並歸屬於一位匿名孤兒。確定嗎？', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => '群組',                    // Groups
        'count' => '群組（{count}）',       // Groups ({count})
        'empty' => '尚無群組',              // No groups yet
        'group_of' => '群組成員：{names}', // Group of : {names}
        'create' => '請輸入群組名稱',    // Enter a name for the group
    ],

    'status' => [
        'online' => '線上',           // Online
        'away' => '離開',             // Away
        'dnd' => '請勿打擾',        // Do Not Disturb
        'offline' => '離線',          // Offline
        'set_status' => '設定狀態', // Set Status
    ],

    'notifications' => [
        'title' => '通知',                                   // Notifications
        'empty' => '沒有通知',                             // No notifications
        'friend_request' => '{name} 向您發出好友請求', // {name} sent you a friend request
        'friend_accept' => '您與 {name} 現在是好友了', // You are now friends with {name}
        'friend_remove' => '{name} 已將您移出好友',     // {name} removed you as a friend
        'mention' => '{name} 提到了您',                    // {name} mentioned you
        'server_invite' => '{name} 邀請您加入 {server}',  // {name} invited you to {server}
        'mark_read' => '標為已讀',                         // Mark as read
        'clear_all' => '全部清除',                         // Clear all
        'as_of' => '截至 {date}',                            // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',                        // username#1234
        'button' => '新增',                                    // Add
        'success' => '好友請求已送出',                    // Friend request sent
        'error_not_found' => '找不到使用者',               // User not found
        'error_invalid_format' => '請使用格式：username#1234', // Use format: username#1234
        'error_self' => '無法新增自己',                    // Cannot add yourself
        'error_already_friends' => '已經是好友',            // Already friends
    ],

    'hover_profile' => [
        'settings' => '設定',                 // Settings
        'set_status' => '設定狀態',         // Set Status
        'view_profile' => '檢視個人檔案', // View Profile
    ],

    'recent' => [
        'title' => '最近的對話', // Recent Conversations
        'empty' => '尚無對話',    // No conversations yet
    ],

    'people' => [
        'title' => '人物與伺服器', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => '開啟個人檔案',                  // Open profile
        'read_all' => '全部標為已讀',                      // Read all
        'silence' => '靜音',                                   // Silence
        'unsilence' => '取消靜音',                           // Unsilence
        'close' => '關閉',                                     // Close
        'remove_friend' => '移除好友',                       // Remove Friend
        'leave_group' => '離開群組',                         // Leave group
        'remove_from_group' => '移出群組',                   // Remove from group
        'set_owner' => '設為擁有者',                        // Make owner
        'set_owner_confirm' => '要讓此人成為擁有者嗎？您將交出自己的擁有者權限。', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => '要將此人移出群組嗎？', // Remove this person from the group?
        'block_confirm' => '要封鎖這位使用者嗎？你們將不再看到彼此。', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} 加入了 {target}',            // {actor} added {target}
        'member_remove' => '{actor} 移除了 {target}',         // {actor} removed {target}
        'member_leave' => '{actor} 離開了',                   // {actor} left
        'member_join' => '{actor} 加入了',                    // {actor} joined
        'call' => '{actor} 發起了通話，持續 {duration}', // {actor} started a call that lasted {duration}
        'call_missed' => '您錯過了 {actor} 的來電',       // You missed a call from {actor}
        'group_rename' => '{actor} 將群組命名為「{name}」', // {actor} named the group « {name} »
        'group_icon' => '{actor} 更換了群組圖示',         // {actor} changed the group icon
        'group_create' => '{actor} 建立了群組',             // {actor} created the group
        'owner_change' => '{target} 現在是擁有者',         // {target} is now the owner
        'friend' => '{actor} 與 {target} 現在是好友了',   // {actor} and {target} are now friends
        'like' => '{actor} 對 {n} 則訊息按讚，共 {x} 次', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => '搜尋表情符號…',        // SEARCH EMOJIS...
        'not_found' => '找不到表情符號',     // NO EMOJIS FOUND
        'recents' => '最近使用的表情符號', // RECENT EMOJIS
        'smileys' => '笑臉與情緒',             // SMILEYS AND EMOTION
        'people' => '人物與身體',              // PEOPLE AND BODY
        'animals' => '動物與自然',             // ANIMALS AND NATURE
        'food' => '飲食',                         // FOOD AND DRINK
        'activities' => '活動',                   // ACTIVITIES
        'travel' => '旅行與地點',              // TRAVEL & PLACES
        'objects' => '物品',                      // OBJECTS
        'symbols' => '符號',                      // SYMBOLS
        'flags' => '旗幟',                        // FLAGS
        'custom' => '自訂',                       // CUSTOM
        'user' => '您的表情符號',             // YOUR EMOJIS
        'tabs_emojis' => '表情符號',            // EMOJIS
        'tabs_gifs' => 'GIF',                       // GIFS
    ],

    'gif' => [
        'tab_history' => '歷史紀錄',                // HISTORY
        'tab_liked' => '已按讚',                     // LIKED
        'tab_tenor' => 'GIF',                           // GIFS
        'search' => '搜尋 GIF…',                    // SEARCH GIFS...
        'loading' => '載入中…',                    // Loading...
        'error' => '無法載入 GIF',                  // Could not load GIFs
        'empty' => '這裡還沒有東西',             // Nothing here yet
        'powered_by' => '由 KLIPY 提供技術支援', // Powered by KLIPY
    ],

    'crop' => [
        'title' => '調整圖片',                               // Adjust image
        'apply' => '套用',                                     // Apply
        'cancel' => '取消',                                    // Cancel
        'zoom' => '縮放',                                      // Zoom
        'trim' => '裁切',                                      // Trim
        'processing' => '處理中…',                          // Processing…
        'drag_hint' => '拖曳以重新定位 · 捲動以縮放', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => '關閉',               // Close
        'download' => '下載',            // Download
        'open_original' => '開啟原圖', // Open original
    ],

    'image' => [
        'change' => '更換',          // Change
        'view' => '檢視',            // View
        'revert' => '還原',          // Revert
        'uploading' => '上傳中…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => '未經授權',         // Unauthorized
        'invalid_pin' => 'PIN 無效',            // Invalid PIN
        'user_not_found' => '找不到使用者', // User not found
        'talk_not_found' => '找不到對話',    // Talk not found
        'invalid_talk' => '對話無效',         // Invalid talk
        'access_denied' => '存取遭拒',        // Access denied
    ],
];
