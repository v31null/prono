<?php

$S = [
    'app' => [
        'name' => 'Prono', // Prono
    ],

    'nav' => [
        'home' => 'Ev',                     // Home
        'dms' => 'Birbaşa Mesajlar',       // Direct Messages
        'groups' => 'Qruplar',              // Groups
        'servers' => 'Serverlər',          // Servers
        'theatres' => 'Teatrlar',           // Theatres
        'telegram' => 'Teleqramlar',        // Telegrams
        'settings' => 'Tənzimləmələr',  // Settings
        'notifications' => 'Bildirişlər', // Notifications
    ],

    'auth' => [
        'login_title' => 'GİRİŞ',                             // LOG-IN
        'enlist_title' => 'QEYDİYYAT',                          // EN-LIST
        'email_placeholder' => 'Elektron Poçt',                 // Electronic Mail
        'password_placeholder' => 'Parol',                       // Password
        'password_confirm_placeholder' => 'Parolu Təsdiqlə',   // Confirm Password
        'name_placeholder' => 'Görünən Ad',                   // Display Name
        'login_button' => 'Daxil ol',                            // Enter
        'enlist_button' => 'Hesab Yarat',                        // Create Account
        'link_to_enlist' => 'Hesab yarat',                       // Create account
        'link_to_login' => 'Artıq hesabım var',                // Already have account
        'error_fill_fields' => 'Bütün xanaları doldurun',     // Fill all fields
        'error_invalid_credentials' => 'Yanlış məlumatlar',   // Invalid credentials
        'error_too_many' => 'Həddən artıq cəhd. Zəhmət olmasa bir neçə dəqiqə gözləyib yenidən cəhd edin.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'Ad 2-32 simvol olmalıdır',     // Name must be 2-32 characters
        'error_invalid_email' => 'Yanlış poçt formatı',      // Invalid email format
        'error_password_length' => 'Parol ən azı 8 simvol olmalıdır', // Password must be at least 8 characters
        'error_password_mismatch' => 'Parollar uyğun gəlmir',  // Passwords do not match
        'error_email_exists' => 'Poçt artıq qeydiyyatdadır',  // Email already registered
        'error_email_banned' => 'Bu poçt qadağan edilib.',     // This mail is banned.
        'link_to_forgot' => 'Parolumu unutdum',                  // I forgot my password
        'download_client' => 'Windows üçün prono klientini yüklə', // Download Prono client for Windows
        'open_in_client' => 'Klientdə aç',                     // Open in client
        'forgot_title' => 'SIFIRLA',                             // RE-SET
        'forgot_instruction' => 'Elektron poçtunuzu verin. Əgər qeydiyyatdadırsa, sıfırlama keçidi ona göndərilir.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Sıfırlama keçidi göndər',       // Send resetting link
        'forgot_sent' => 'Əgər həmin poçt qeydiyyatdadırsa, sıfırlama keçidi yoldadır. Gələnlər qutunuza baxın.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'Məktub indi göndərilə bilmədi. Daha sonra yenidən cəhd edin.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Girişə qayıt',                    // Back to log-in
        'reset_title' => 'YENİ PAROL',                          // NEW PASS-WORD
        'reset_button' => 'Yadda Saxla və Daxil ol',            // Save & Log-in
        'reset_invalid' => 'Bu sıfırlama keçidi etibarsızdır və ya vaxtı keçib.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — parol sıfırlama',   // Prono — pass-word reset
        'reset_mail_intro' => 'Kimsə bu prono hesabı üçün parolun sıfırlanmasını istədi.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Yeni parol təyin et',              // Set a new pass-word
        'reset_mail_ignore' => 'Əgər bu siz deyildinizsə, əhəmiyyət verməyin. Bu məktuba cavab verməyin.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'Elektron Poçt və ya P.İ.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Hələ ilk dəfə daxil olmamısınız. Sizə göndərdiyimiz məktubu açın.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Bu hesab kilidlənib.',       // This account is locked.
        'enlist_check_mail' => 'Hesab yaradıldı. P.İ.-№-nizi və birdəfəlik giriş kodunu daşıyan məktub yoldadır. İlk dəfə daxil olmaq üçün onu açın.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'İLK GİRİŞ',                       // FIRST ENTRY
        'verify_instruction' => 'Məktubdan P.İ.-№-nizi və dördhərfli kodu eynilə yazın.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.İ.-№',                 // P.I.-№
        'verify_code_placeholder' => 'Dördhərfli kod',         // Four-letter code
        'verify_button' => 'Daxil ol',                           // Enter
        'verify_invalid_link' => 'Bu giriş keçidi etibarsızdır və ya vaxtı keçib.', // This entry link is void or has expired.
        'verify_burnt' => 'Qadağan edilib.',                    // Banned.
        'verify_mail_subject' => 'Prono — P.İ.-№-niz və giriş kodunuz', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Xoş gəlmisiniz. Yeni prono hesabınızın açarları buradadır.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'P.İ.-№-niz',              // Your P.I.-№
        'verify_mail_code_label' => 'Birdəfəlik giriş kodunuz', // Your one-time entry code
        'verify_mail_cta' => 'İlk dəfə daxil olun',           // Enter for the first time
        'verify_mail_warn' => 'Hər ikisini giriş səhifəsində eynilə yazın. Bir səhv vuruş hesabı yandırır və poçtu kilidləyir. Bu məktuba cavab verməyin.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Xoş gəlmisiniz, {name}',                // Welcome, {name}
        'subtitle' => 'Yan paneldən bir söhbət seçin və ya yenisini başladın.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Dostlar',                                    // Friends
        'count' => 'Dostlar ({count})',                          // Friends ({count})
        'empty' => 'Hələ dost yoxdur',                         // No friends yet
        'add_button' => 'Dost Əlavə Et',                       // Add Friend
        'status_friends' => 'Dostlar',                           // Friends
        'status_pending' => 'Gözləyir',                        // Pending
        'status_declined' => 'Rədd edildi',                     // Declined
        'status_blocked' => 'Bloklandı',                        // Blocked
        'request_pending' => 'Sorğu Gözləyir',                // Request Pending
        'accept' => 'Qəbul et',                                 // Accept
        'decline' => 'Rədd et',                                 // Decline
        'retract' => 'Geri götür',                             // Retract
        'retract_confirm' => 'Bu dostluq sorğusunu geri götürmək istəyirsiniz? O ləğv ediləcək.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Birbaşa Mesajlar',                          // Direct Messages
        'empty' => 'Mesajlaşmağa başlamaq üçün dost əlavə edin', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Serverlər',                        // Servers
        'count' => 'Serverlər ({count})',              // Servers ({count})
        'empty' => 'Serverə qoşulun və ya yaradın', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Teatrlar',                                   // Theatres
        'count' => 'Teatrlar ({count})',                         // Theatres ({count})
        'empty' => 'Teatr yoxdur',                               // No theatres
        'role_speaker' => 'NATİQ',                              // SPEAKER
        'role_listener' => 'DİNLƏYİCİ',                      // LISTENER
        'create' => 'Teatr Yarat',                               // Create Theatre
        'name_placeholder' => 'Teatr adı',                      // Theatre name
        'add' => 'Dinləyici əlavə et',                        // Add listener
        'settings' => 'Teatr tənzimləmələri',                // Theatre settings
        'leave' => 'Teatrı tərk et',                           // Leave theatre
        'leave_confirm' => 'Bu teatrı tərk etmək istəyirsiniz?', // Leave this theatre?
        'rename_prompt' => 'Yeni teatr adı',                    // New theatre name
        'broadcast_placeholder' => 'Teatra yayımla...',         // Broadcast to the theatre...
        'send' => 'Ötür',                                      // Transmit
        'no_friends_to_add' => 'Əlavə ediləcək dost yoxdur', // No friends to add
        'promote' => 'NATİQ Et',                                // Make SPEAKER
        'demote' => 'DİNLƏYİCİ Et',                          // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Ləğv et',   // Cancel
        'yes' => 'Bəli',          // Yes
        'no' => 'Xeyr',            // No
        'confirm' => 'Təsdiqlə', // Confirm
    ],

    'call' => [
        'start' => 'Zəng',                               // Call
        'incoming' => '{name} zəng edir',                // Call from {name}
        'accept' => 'Qəbul et',                          // Accept
        'decline' => 'Rədd et',                          // Decline
        'calling' => 'Zəng edilir…',                   // Calling…
        'connecting' => 'Qoşulur…',                    // Connecting…
        'failed' => 'Qoşulmaq mümkün olmadı (relay)', // Could not connect (relay)
        'in_call' => 'Zəngdə',                          // In call
        'mute' => 'Səssiz',                              // Mute
        'unmute' => 'Səsi aç',                          // Unmute
        'hang_up' => 'Dayandır',                         // Hang up
        'unavailable' => 'İstifadəçi oflayndır',      // User is offline
        'busy' => 'İstifadəçi məşğuldur',           // User is busy
        'declined' => 'Zəng rədd edildi',               // Call declined
        'ended' => 'Zəng bitdi',                         // Call ended
        'mic_denied' => 'Mikrofona giriş rədd edildi',  // Microphone access denied
    ],

    'activity' => [
        'heading' => 'İndi aktiv',    // Now active
        'elapsed' => 'keçdi',         // elapsed
        'left' => 'qalıb',            // left
        'paused' => 'Durdurulub.',     // Paused.
        'playing' => 'Oynayır',       // Playing
        'streaming' => 'Yayımlayır', // Streaming
        'listening' => 'Dinləyir',    // Listening
        'watching' => 'İzləyir',     // Watching
        'competing' => 'Yarışır',   // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Mesaj yazın...',                // Type a message...
        'filelarge' => '№ {n} fayl çox böyükdür, yüklənə bilməz.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Yüklənir {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'Siz DİNLƏYİCİSİNİZ',         // You are a LISTENER
        'edited' => '(redaktə edildi)',                         // (edited)
        'untrusten_media' => 'Etibarsız media — yükləmək üçün klikləyin', // Untrusted media — click to load
        'untrusten_media_confirm' => 'Əminsiniz? Bu, mediyanı birbaşa IP ünvanınızı görəcək mənbədən yükləyir.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'yazır...',                              // is typing...
        'are_typing' => 'yazırlar...',                          // are typing...
        'replying_to' => 'Cavab verilir',                        // Replying to
        'like' => 'Bəyən',                                     // Like
        'paste_too_long_as_file' => 'Bu mesaj söhbət üçün çox uzundur. Onun əvəzinə fayl kimi göndərmək istəyirsiniz?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Cavab ver',                                  // Reply
        'edit' => 'Redaktə et',                                 // Edit
        'delete' => 'Sil',                                       // Delete
        'copy' => 'Kopyala',                                     // Copy
        'copy_raw' => 'Xam mətni kopyala',                      // Copy raw
        'morethan10items' => '10-dan çox fayl əlavə edə bilməzsiniz !', // You can not embed more than 10 files !
        'overlayupload' => 'Faylı əlavə etmək üçün sürükləməni dayandırın', // Stop dragging to embed the file
        'unknown' => 'Naməlum',                                 // Unknown
        'said' => 'dedi',                                        // said
        'reply_said' => '{actor} dedi :',                // {actor} said :
        'reply_media' => '{actor} tərəfindən {time} vaxtında göndərilən {kind}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => '{actor} tərəfindən {time} vaxtında göndərilən qoşma', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Orijinal mesaj əlçatan deyil', // Original message unavailable
        'media_image' => 'şəkil',                      // image
        'media_video' => 'video',                        // video
        'media_audio' => 'səs',                         // audio
        'media_file' => 'fayl',                          // file
        'download' => 'Yüklənmiş faylı endirmək üçün klikləyin', // Click to Down-load the Up-loaded file
        'create_group' => 'Qrup Yarat',                          // Create Group
        'add_to_group' => 'Qrupa Əlavə Et',                    // Add to Group
        'likes' => 'Bəyənmələr',                             // Likes
        'new_message_scroll_klick' => '{n} yeni mesaj',  // {n} new message( s )
        'liked_attachment' => 'Qoşma @ {time}',         // Attachment @ {time}
        'no_likes' => 'Bəyənilmiş mesaj yoxdur',              // No liked messages
        'group_settings' => 'Qrup Tənzimləmələri',           // Group Settings
        'leave_group' => 'Qrupu Tərk Et',                       // Leave Group
        'leave_confirm' => 'Bu qrupu tərk etmək istəyirsiniz?', // Leave this group?
        'go_to_latest' => 'Ən son söhbətə qayıtmaq üçün klikləyin', // Click to go back to Latest chat
        'empty' => 'Hələ mesaj yoxdur. Başlamaq üçün nəsə deyin.', // No messages yet. Say something to get started.
        'load_failed' => 'Mesajlar yüklənə bilmədi. Yenidən cəhd üçün klikləyin.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Teleqramlar',                  // Telegrams
        'received_title' => 'Alınan Teleqramlar', // Received Telegrams
        'empty' => 'Teleqram yoxdur',              // No telegrams
        'priority_routine' => 'ADİ',              // ROUTINE
        'priority_priority' => 'PRİORİTET',      // PRIORITY
        'priority_emergency' => 'TƏCİLİ',       // EMERGENCY
    ],

    'profile' => [
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
        'message_button' => 'Mesaj',                             // Message
        'block_button' => 'Blokla',                              // Block
        'unblock_button' => 'Bloku aç',                         // Unblock
        'block_confirm' => 'Bu istifadəçini bloklamaq istəyirsiniz?', // Block this user?
        'shared_friends' => 'Ortaq Dostlar',                     // Shared Friends
        'shared_servers' => 'Ortaq Serverlər',                  // Shared Servers
        'shared_theatres' => 'Ortaq Teatrlar',                   // Shared Theatres
        'no_shared_friends' => 'Ortaq dost yoxdur',              // No shared friends
        'no_shared_servers' => 'Ortaq server yoxdur',            // No shared servers
        'no_shared_theatres' => 'Ortaq teatr yoxdur',            // No shared theatres
    ],

    'settings' => [
        'title' => 'Tənzimləmələr',                          // Settings
        'account_section' => 'Hesab və Təhlükəsizlik',       // Account & Security
        'session_section' => 'Sessiya',                          // Session
        'images_section' => 'Şəkillər',                       // Images
        'profile_section' => 'Profil',                           // Profile
        'description' => 'Təsvir',                              // Description
        'description_placeholder' => 'Özünüz haqqında nəsə yazın…', // Write something about yourself…
        'description_preview' => 'Önbaxış',                   // Preview
        'preview_profile' => 'Profil',                           // Profile
        'preview_friend' => 'Dost siyahısı',                   // Friend list
        'preview_speaker' => 'Teatr natiqi',                     // Theatre speaker
        'preview_chat' => 'Söhbət mesajı',                    // Chat message
        'language' => 'Dil',                                     // Language
        'lang_auto' => 'Avtomatik',                              // Automatic
        'dm' => 'Tünd Rejim',                                   // Dark Mode
        'appearance' => 'Görünüş',                           // Appearance
        'rich_presence' => 'Zəngin mövcudluğa icazə verilsin?', // Allow rich presence?
        'close' => 'Bağla',                                     // Close
        'your_pin' => 'PIN-iniz',                                // Your PIN
        'your_pin_warn' => 'PIN-iniz şəxsi identifikatordur. Yalnız etibarlı mənbələrlə paylaşın.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Görünən Ad',                       // Display Name
        'change_name' => 'Adı Dəyiş',                         // Change Name
        'localsettings' => 'Lokal',                              // Locale
        'change_password' => 'Parolu Dəyiş',                   // Change Password
        'current_password' => 'Cari Parol',                      // Current Password
        'new_password' => 'Yeni Parol',                          // New Password
        'confirm_password' => 'Parolu Təsdiqlə',               // Confirm Password
        'avatar' => 'Avatar',                                    // Avatar
        'ambiance' => 'Fon Şəkli',                             // Ambiance Image
        'upload_avatar' => 'Avatar Yüklə',                     // Upload Avatar
        'upload_ambiance' => 'Fon Yüklə',                      // Upload Ambiance
        'max_size' => 'Maks 500 KB',                             // Max 500 KB
        'logout' => 'Çıxış',                                 // Logout
        'logout_desc' => 'Cari sessiyanızı bitirin',           // End your current session
        'save' => 'Yadda saxla',                                 // Save
        'saved' => 'Yadda saxlanıldı',                         // Saved
        'error_name_taken' => 'Ad artıq tutulub',               // Name already taken
        'error_wrong_password' => 'Yanlış parol',              // Wrong password
        'error_file_too_large' => 'Fayl çox böyükdür (maks 500 KB)', // File too large (max 500 KB)
        'error_invalid_file' => 'Yanlış fayl növü',          // Invalid file type
        'notifications' => 'Bildirişlər',                      // Notifications
        'global_mute' => 'Qlobal Səssiz',                       // Global Mute
        'notification_types' => 'Bildiriş Növləri',           // Notification Types
        'friend_requests' => 'Dostluq Sorğuları',              // Friend Requests
        'muting_settings' => 'Səssizə alma ayarları', // Muting Settings
        'friend_mute' => 'Dostluq sorğusu bildirişlərini səssizə al', // Friend request notification mute
        'friend_change_mute' => 'Dost dəyişikliyi bildirişlərini səssizə al', // Friend change notification mute
        'message_mute' => 'Mesaj bildirişlərini səssizə al', // Message notification mute
        'call_mute' => 'Zəng bildirişlərini səssizə al', // Call notification mute
        'friend_changes' => 'Dost qəbul edildi və ya silindi', // Friend accepted or removed
        'direct_messages' => 'Birbaşa Mesajlar',                // Direct Messages
        'server_mentions' => 'Qeydlər',                 // Mentions
        'mention_mute_prompt' => 'Qeyd bildirişlərini səssizə al', // Mention notification mute
        'account_settings' => 'HESAB TƏNZİMLƏMƏLƏRİ',      // ACCOUNT SETTINGS
        'current_email' => 'Cari Elektron Poçt',                // Current Electronic Mail
        'friend_request_filtering' => 'Dostluq Sorğusu Filtrasiyası', // Friend Request Filtering
        'filter_everyone' => 'Hamı',                            // Everyone
        'filter_fof' => 'Yalnız dostların dostları',          // Only friends of friends
        'dm_permissions' => 'Birbaşa Mesaj İcazələri',       // Direct Message Permissions
        'dm_server_members' => 'Server Üzvlərindən birbaşa mesajlara icazə ver', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Teatr natiqlərindən birbaşa mesajlara icazə ver', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Teatr dinləyicilərindən birbaşa mesajlara icazə ver', // Allow DMs from Theatre listeners
        'dm_groups' => 'Qruplardan birbaşa mesajlara icazə ver', // Allow DMs from groups
        'dm_strangers' => 'Yadlardan birbaşa mesajlara icazə ver', // Allow DMs from strangers
        'can_be_callen_by' => 'Səsli söhbət icazələri', // Voice Chat Permissions
        'vc_server_members' => 'Server üzvlərindən səsli söhbətlərə icazə ver', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Teatr natiqlərindən səsli söhbətlərə icazə ver', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Teatr dinləyicilərindən səsli söhbətlərə icazə ver', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Qruplardan səsli söhbətlərə icazə ver', // Allow Voice Chats from groups
        'vc_strangers' => 'Yadlardan səsli söhbətlərə icazə ver', // Allow Voice Chats from strangers
        'chat_settings' => 'Söhbət ayarları',         // Chat Settings
        'split_text_prompt' => 'Uzun mesajları böl',   // Split long messages
        'setting_apperance' => 'Bütün ayarları bir səhifədə göstər', // Show all settings on one page
        'junicode_show_prompt' => 'Saytın serifli versiyasından istifadə et', // Use the serif version of the website
        'off_set' => 'Vaxt fərqi',                      // Time offset
        'day_time_saving' => 'Yay vaxtı',               // Daylight saving time
        'session_management' => 'Sessiya İdarəetməsi',        // Session Management
        'log_all_out' => 'HAMISINDAN ÇIX [ BÜTÜN SESSİYALARI BİTİR ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Cihazlar',                         // Devices
        'this_device' => 'Bu cihaz',                             // This device
        'log_out_device' => 'Çıxış',                         // Log out
        'devices_empty' => 'Aktiv cihaz yoxdur',                 // No active devices
        'view_people' => 'Üzvləri göstər',                   // Show members
        'delete_account' => 'Hesabı sil',                       // Delete account
        'delete_account_confirm' => 'Bu hesabı kimsəsiz buraxmaq istəyirsiniz? Adınız, poçtunuz və şəkilləriniz silinir və bərpa edilə bilməz. Mesajlarınız qalır, anonim kimsəsizə aid edilir. Əminsiniz?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Qruplar',                     // Groups
        'count' => 'Qruplar ({count})',           // Groups ({count})
        'empty' => 'Hələ qrup yoxdur',          // No groups yet
        'group_of' => 'Qrup : {names}',           // Group of : {names}
        'create' => 'Qrup üçün ad daxil edin', // Enter a name for the group
    ],

    'status' => [
        'online' => 'Onlayn',               // Online
        'away' => 'Uzaqda',                 // Away
        'dnd' => 'Narahat Etmə',           // Do Not Disturb
        'offline' => 'Oflayn',              // Offline
        'set_status' => 'Status Təyin Et', // Set Status
    ],

    'notifications' => [
        'title' => 'Bildirişlər',                              // Notifications
        'empty' => 'Bildiriş yoxdur',                           // No notifications
        'friend_request' => '{name} sizə dostluq sorğusu göndərdi', // {name} sent you a friend request
        'friend_accept' => 'İndi {name} ilə dostsunuz',        // You are now friends with {name}
        'friend_remove' => '{name} sizi dostluqdan çıxardı', // {name} removed you as a friend
        'mention' => '{name} sizi qeyd etdi',            // {name} mentioned you
        'server_invite' => '{name} sizi {server} serverinə dəvət etdi', // {name} invited you to {server}
        'mark_read' => 'Oxunmuş kimi qeyd et',                  // Mark as read
        'clear_all' => 'Hamısını təmizlə',                  // Clear all
        'as_of' => '{date} tarixinə',                           // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'istifadəçi#1234',                    // username#1234
        'button' => 'Əlavə et',                                // Add
        'success' => 'Dostluq sorğusu göndərildi',            // Friend request sent
        'error_not_found' => 'İstifadəçi tapılmadı',        // User not found
        'error_invalid_format' => 'Formatdan istifadə edin: istifadəçi#1234', // Use format: username#1234
        'error_self' => 'Özünüzü əlavə edə bilməzsiniz', // Cannot add yourself
        'error_already_friends' => 'Artıq dostsunuz',           // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Tənzimləmələr',  // Settings
        'set_status' => 'Status Təyin Et', // Set Status
        'view_profile' => 'Profilə Bax',   // View Profile
    ],

    'recent' => [
        'title' => 'Son Söhbətlər',       // Recent Conversations
        'empty' => 'Hələ söhbət yoxdur', // No conversations yet
    ],

    'people' => [
        'title' => 'İnsanlar və Serverlər', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Profili aç',                         // Open profile
        'read_all' => 'Hamısını oxu',                         // Read all
        'silence' => 'Səssizləşdir',                          // Silence
        'unsilence' => 'Səsi aç',                              // Unsilence
        'close' => 'Bağla',                                     // Close
        'remove_friend' => 'Dostu Sil',                          // Remove Friend
        'leave_group' => 'Qrupu tərk et',                       // Leave group
        'remove_from_group' => 'Qrupdan çıxar',                // Remove from group
        'set_owner' => 'Sahib et',                               // Make owner
        'set_owner_confirm' => 'Bu şəxsi sahib etmək istəyirsiniz? Sahiblik hüquqlarınızı təhvil verəcəksiniz.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Bu şəxsi qrupdan çıxarmaq istəyirsiniz?', // Remove this person from the group?
        'block_confirm' => 'Bu istifadəçini bloklamaq istəyirsiniz? Artıq bir-birinizi görməyəcəksiniz.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} {target} əlavə etdi',         // {actor} added {target}
        'member_remove' => '{actor} {target} çıxardı',        // {actor} removed {target}
        'member_leave' => '{actor} tərk etdi',                  // {actor} left
        'member_join' => '{actor} qoşuldu',                     // {actor} joined
        'call' => '{actor} {duration} davam edən zəng başlatdı', // {actor} started a call that lasted {duration}
        'call_missed' => '{actor} sizə zəng etdi, cavab vermədiniz', // You missed a call from {actor}
        'group_rename' => '{actor} qrupu « {name} » adlandırdı', // {actor} named the group « {name} »
        'group_icon' => '{actor} qrup ikonunu dəyişdi',        // {actor} changed the group icon
        'group_create' => '{actor} qrupu yaratdı',              // {actor} created the group
        'owner_change' => '{target} indi sahibdir',              // {target} is now the owner
        'friend' => '{actor} və {target} indi dostdur',         // {actor} and {target} are now friends
        'like' => '{actor} cəmi {x} dəfə olmaqla {n} mesajı bəyəndi', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'EMOJİLƏRİ AXTAR...',        // SEARCH EMOJIS...
        'not_found' => 'EMOJİ TAPILMADI',          // NO EMOJIS FOUND
        'recents' => 'SON EMOJİLƏR',              // RECENT EMOJIS
        'smileys' => 'GÜLƏRÜZLƏR VƏ EMOSİYA', // SMILEYS AND EMOTION
        'people' => 'İNSANLAR VƏ BƏDƏN',        // PEOPLE AND BODY
        'animals' => 'HEYVANLAR VƏ TƏBİƏT',     // ANIMALS AND NATURE
        'food' => 'YEMƏK VƏ İÇKİ',             // FOOD AND DRINK
        'activities' => 'FƏALİYYƏTLƏR',         // ACTIVITIES
        'travel' => 'SƏYAHƏT VƏ YERLƏR',        // TRAVEL & PLACES
        'objects' => 'ƏŞYALAR',                   // OBJECTS
        'symbols' => 'SİMVOLLAR',                  // SYMBOLS
        'flags' => 'BAYRAQLAR',                     // FLAGS
        'custom' => 'XÜSUSİ',                     // CUSTOM
        'user' => 'SİZİN EMOJİLƏRİNİZ',       // YOUR EMOJIS
        'tabs_emojis' => 'EMOJİLƏR',              // EMOJIS
        'tabs_gifs' => 'GİFLƏR',                  // GIFS
    ],

    'gif' => [
        'tab_history' => 'TARİXÇƏ',                       // HISTORY
        'tab_liked' => 'BƏYƏNİLƏN',                      // LIKED
        'tab_tenor' => 'GİFLƏR',                           // GIFS
        'search' => 'GİFLƏRİ AXTAR...',                   // SEARCH GIFS...
        'loading' => 'Yüklənir...',                        // Loading...
        'error' => 'GİFlər yüklənə bilmədi',           // Could not load GIFs
        'empty' => 'Burada hələ heç nə yoxdur',          // Nothing here yet
        'powered_by' => 'KLIPY tərəfindən təmin edilir', // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Şəkli tənzimlə',                         // Adjust image
        'apply' => 'Tətbiq et',                                 // Apply
        'cancel' => 'Ləğv et',                                 // Cancel
        'zoom' => 'Yaxınlaşdır',                              // Zoom
        'trim' => 'Kəs',                                        // Trim
        'processing' => 'Emal edilir…',                        // Processing…
        'drag_hint' => 'Yerini dəyişmək üçün sürükləyin · yaxınlaşdırmaq üçün sürüşdürün', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Bağla',                 // Close
        'download' => 'Endir',               // Download
        'open_original' => 'Orijinalı aç', // Open original
    ],

    'image' => [
        'change' => 'Dəyiş',          // Change
        'view' => 'Bax',                // View
        'revert' => 'Geri qaytar',      // Revert
        'uploading' => 'Yüklənir…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'İcazəsiz',                  // Unauthorized
        'invalid_pin' => 'Yanlış PIN',                 // Invalid PIN
        'user_not_found' => 'İstifadəçi tapılmadı', // User not found
        'talk_not_found' => 'Söhbət tapılmadı',      // Talk not found
        'invalid_talk' => 'Yanlış söhbət',           // Invalid talk
        'access_denied' => 'Giriş rədd edildi',        // Access denied
    ],
];
