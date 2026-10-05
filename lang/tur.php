<?php

$S = [
    'app' => [
        'name' => 'Prono', // Prono
    ],

    'nav' => [
        'home' => 'Ana Sayfa',            // Home
        'dms' => 'Doğrudan Mesajlar',    // Direct Messages
        'groups' => 'Gruplar',            // Groups
        'servers' => 'Sunucular',         // Servers
        'theatres' => 'Tiyatrolar',       // Theatres
        'telegram' => 'Telgraflar',       // Telegrams
        'settings' => 'Ayarlar',          // Settings
        'notifications' => 'Bildirimler', // Notifications
    ],

    'auth' => [
        'login_title' => 'GİRİŞ',                             // LOG-IN
        'enlist_title' => 'KAYIT',                               // EN-LIST
        'email_placeholder' => 'Elektronik Posta',               // Electronic Mail
        'password_placeholder' => 'Parola',                      // Password
        'password_confirm_placeholder' => 'Parolayı Onayla',    // Confirm Password
        'name_placeholder' => 'Görünen Ad',                    // Display Name
        'login_button' => 'Gir',                                 // Enter
        'enlist_button' => 'Hesap Oluştur',                     // Create Account
        'link_to_enlist' => 'Hesap oluştur',                    // Create account
        'link_to_login' => 'Zaten hesabım var',                 // Already have account
        'error_fill_fields' => 'Tüm alanları doldurun',        // Fill all fields
        'error_invalid_credentials' => 'Geçersiz kimlik bilgileri', // Invalid credentials
        'error_too_many' => 'Çok fazla deneme. Lütfen birkaç dakika bekleyip tekrar deneyin.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'Ad 2-32 karakter olmalıdır',   // Name must be 2-32 characters
        'error_invalid_email' => 'Geçersiz e-posta biçimi',    // Invalid email format
        'error_password_length' => 'Parola en az 8 karakter olmalıdır', // Password must be at least 8 characters
        'error_password_mismatch' => 'Parolalar eşleşmiyor',   // Passwords do not match
        'error_email_exists' => 'E-posta zaten kayıtlı',       // Email already registered
        'error_email_banned' => 'Bu posta yasaklanmış.',       // This mail is banned.
        'link_to_forgot' => 'Parolamı unuttum',                 // I forgot my password
        'download_client' => 'Windows için Prono istemcisini indir', // Download Prono client for Windows
        'open_in_client' => 'İstemcide aç',                    // Open in client
        'forgot_title' => 'SIFIRLA',                             // RE-SET
        'forgot_instruction' => 'Elektronik postanızı verin. Kayıtlıysa, ona bir sıfırlama bağlantısı yolculuk eder.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Sıfırlama bağlantısı gönder',  // Send resetting link
        'forgot_sent' => 'O posta kayıtlıysa, bir sıfırlama bağlantısı yolda. Gelen kutunuza bakın.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'Mektup şu anda gönderilemedi. Daha sonra tekrar deneyin.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Girişe dön',                       // Back to log-in
        'reset_title' => 'YENİ PAROLA',                         // NEW PASS-WORD
        'reset_button' => 'Kaydet ve Giriş Yap',                // Save & Log-in
        'reset_invalid' => 'Bu sıfırlama bağlantısı geçersiz veya süresi dolmuş.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — parola sıfırlama',  // Prono — pass-word reset
        'reset_mail_intro' => 'Birisi bu Prono hesabı için parolanın sıfırlanmasını istedi.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Yeni bir parola belirle',           // Set a new pass-word
        'reset_mail_ignore' => 'Bu siz değilseniz, aldırmayın. Bu mektubu yanıtlamayın.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'Elektronik Posta veya K.T.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Henüz ilk kez giriş yapmadınız. Size gönderdiğimiz mektubu açın.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Bu hesap kilitli.',           // This account is locked.
        'enlist_check_mail' => 'Hesap oluşturuldu. K.T.-№\'nızı ve tek kullanımlık bir giriş kodunu taşıyan bir mektup yolda. İlk kez girmek için onu açın.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'İLK GİRİŞ',                       // FIRST ENTRY
        'verify_instruction' => 'K.T.-№\'nızı ve mektuptaki dört harfli kodu yeniden girin.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'K.T.-№',                  // P.I.-№
        'verify_code_placeholder' => 'Dört harfli kod',         // Four-letter code
        'verify_button' => 'Gir',                                // Enter
        'verify_invalid_link' => 'Bu giriş bağlantısı geçersiz veya süresi dolmuş.', // This entry link is void or has expired.
        'verify_burnt' => 'Yasaklandı.',                        // Banned.
        'verify_mail_subject' => 'Prono — K.T.-№\'nız ve giriş kodunuz', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Hoş geldiniz. İşte yeni Prono hesabınızın anahtarları.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'K.T.-№\'nız',             // Your P.I.-№
        'verify_mail_code_label' => 'Tek kullanımlık giriş kodunuz', // Your one-time entry code
        'verify_mail_cta' => 'İlk kez giriş yap',              // Enter for the first time
        'verify_mail_warn' => 'İkisini de giriş sayfasında tam olarak yeniden girin. Tek yanlış vuruş hesabı yakar ve postayı kilitler. Bu mektubu yanıtlamayın.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Hoş geldin, {name}',                     // Welcome, {name}
        'subtitle' => 'Kenar çubuğundan bir sohbet seçin veya yeni bir tane başlatın.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Arkadaşlar',                                // Friends
        'count' => 'Arkadaşlar ({count})',                      // Friends ({count})
        'empty' => 'Henüz arkadaş yok',                        // No friends yet
        'add_button' => 'Arkadaş Ekle',                         // Add Friend
        'status_friends' => 'Arkadaş',                          // Friends
        'status_pending' => 'Beklemede',                         // Pending
        'status_declined' => 'Reddedildi',                       // Declined
        'status_blocked' => 'Engellendi',                        // Blocked
        'request_pending' => 'İstek Beklemede',                 // Request Pending
        'accept' => 'Kabul Et',                                  // Accept
        'decline' => 'Reddet',                                   // Decline
        'retract' => 'Geri Çek',                                // Retract
        'retract_confirm' => 'Bu arkadaşlık isteği geri çekilsin mi? Geri alınacaktır.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Doğrudan Mesajlar',                         // Direct Messages
        'empty' => 'Mesajlaşmaya başlamak için arkadaş ekleyin', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Sunucular',                         // Servers
        'count' => 'Sunucular ({count})',               // Servers ({count})
        'empty' => 'Bir sunucuya katıl veya oluştur', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Tiyatrolar',                               // Theatres
        'count' => 'Tiyatrolar ({count})',                     // Theatres ({count})
        'empty' => 'Tiyatro yok',                              // No theatres
        'role_speaker' => 'KONUŞMACI',                        // SPEAKER
        'role_listener' => 'DİNLEYİCİ',                     // LISTENER
        'create' => 'Tiyatro Oluştur',                        // Create Theatre
        'name_placeholder' => 'Tiyatro adı',                  // Theatre name
        'add' => 'Dinleyici ekle',                             // Add listener
        'settings' => 'Tiyatro ayarları',                     // Theatre settings
        'leave' => 'Tiyatrodan ayrıl',                        // Leave theatre
        'leave_confirm' => 'Bu tiyatrodan ayrılınsın mı?', // Leave this theatre?
        'rename_prompt' => 'Yeni tiyatro adı',                // New theatre name
        'broadcast_placeholder' => 'Tiyatroya yayınla...',    // Broadcast to the theatre...
        'send' => 'İlet',                                     // Transmit
        'no_friends_to_add' => 'Eklenecek arkadaş yok',       // No friends to add
        'promote' => 'KONUŞMACI Yap',                         // Make SPEAKER
        'demote' => 'DİNLEYİCİ Yap',                        // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'İptal',  // Cancel
        'yes' => 'Evet',       // Yes
        'no' => 'Hayır',      // No
        'confirm' => 'Onayla', // Confirm
    ],

    'call' => [
        'start' => 'Ara',                               // Call
        'incoming' => '{name} arıyor',                 // Call from {name}
        'accept' => 'Kabul Et',                         // Accept
        'decline' => 'Reddet',                          // Decline
        'calling' => 'Aranıyor…',                    // Calling…
        'connecting' => 'Bağlanıyor…',              // Connecting…
        'failed' => 'Bağlanılamadı (aktarıcı)',    // Could not connect (relay)
        'in_call' => 'Aramada',                         // In call
        'mute' => 'Sessize Al',                         // Mute
        'unmute' => 'Sesi Aç',                         // Unmute
        'hang_up' => 'Kapat',                           // Hang up
        'unavailable' => 'Kullanıcı çevrimdışı',  // User is offline
        'busy' => 'Kullanıcı meşgul',                // User is busy
        'declined' => 'Arama reddedildi',               // Call declined
        'ended' => 'Arama sona erdi',                   // Call ended
        'mic_denied' => 'Mikrofon erişimi reddedildi', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Şimdi etkin',   // Now active
        'elapsed' => 'geçti',         // elapsed
        'left' => 'kaldı',            // left
        'paused' => 'Duraklatıldı.', // Paused.
        'playing' => 'Oynuyor',        // Playing
        'streaming' => 'Yayında',     // Streaming
        'listening' => 'Dinliyor',     // Listening
        'watching' => 'İzliyor',      // Watching
        'competing' => 'Yarışıyor', // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Bir mesaj yazın...',            // Type a message...
        'filelarge' => '{n} numaralı dosya çok büyük, yüklenemiyor.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Yükleniyor %{percentage}', // Up-loading {percentage} %
        'listener_notice' => 'Bir DİNLEYİCİSİNİZ',          // You are a LISTENER
        'edited' => '(düzenlendi)',                             // (edited)
        'untrusten_media' => 'Güvenilmeyen medya — yüklemek için tıklayın', // Untrusted media — click to load
        'untrusten_media_confirm' => 'Emin misiniz? Bu, medyayı doğrudan IP adresinizi görecek olan kaynağından yükler.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'yazıyor...',                            // is typing...
        'are_typing' => 'yazıyorlar...',                        // are typing...
        'replying_to' => 'Yanıtlanıyor',                       // Replying to
        'like' => 'Beğen',                                      // Like
        'paste_too_long_as_file' => 'Bu mesaj sohbet için çok uzun. Bunun yerine bir dosya olarak göndermek ister misiniz?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Yanıtla',                                   // Reply
        'edit' => 'Düzenle',                                    // Edit
        'delete' => 'Sil',                                       // Delete
        'copy' => 'Kopyala',                                     // Copy
        'copy_raw' => 'Ham kopyala',                             // Copy raw
        'morethan10items' => '10\'dan fazla dosya gömemezsiniz!', // You can not embed more than 10 files !
        'overlayupload' => 'Dosyayı gömmek için sürüklemeyi bırakın', // Stop dragging to embed the file
        'unknown' => 'Bilinmiyor',                               // Unknown
        'said' => 'dedi',                                        // said
        'reply_said' => '{actor} dedi :',                // {actor} said :
        'reply_media' => '{actor} tarafından {time} saatinde gönderilen {kind}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => '{actor} tarafından {time} saatinde gönderilen ek', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Özgün mesaj kullanılamıyor', // Original message unavailable
        'media_image' => 'görsel',                      // image
        'media_video' => 'video',                        // video
        'media_audio' => 'ses',                          // audio
        'media_file' => 'dosya',                         // file
        'download' => 'Yüklenen dosyayı indirmek için tıklayın', // Click to Down-load the Up-loaded file
        'create_group' => 'Grup Oluştur',                       // Create Group
        'add_to_group' => 'Gruba Ekle',                          // Add to Group
        'likes' => 'Beğeniler',                                 // Likes
        'new_message_scroll_klick' => '{n} yeni mesaj',  // {n} new message( s )
        'liked_attachment' => 'Ek @ {time}',             // Attachment @ {time}
        'no_likes' => 'Beğenilen mesaj yok',                    // No liked messages
        'group_settings' => 'Grup Ayarları',                    // Group Settings
        'leave_group' => 'Gruptan Ayrıl',                       // Leave Group
        'leave_confirm' => 'Bu gruptan ayrılınsın mı?',      // Leave this group?
        'go_to_latest' => 'En son sohbete geri dönmek için tıklayın', // Click to go back to Latest chat
        'empty' => 'Henüz mesaj yok. Başlamak için bir şeyler söyleyin.', // No messages yet. Say something to get started.
        'load_failed' => 'Mesajlar yüklenemedi. Yeniden denemek için tıklayın.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Telgraflar',                  // Telegrams
        'received_title' => 'Alınan Telgraflar', // Received Telegrams
        'empty' => 'Telgraf yok',                 // No telegrams
        'priority_routine' => 'RUTİN',           // ROUTINE
        'priority_priority' => 'ÖNCELİKLİ',    // PRIORITY
        'priority_emergency' => 'ACİL',          // EMERGENCY
    ],

    'profile' => [
        'pin_label' => 'PIN: {pin}',                         // PIN: {pin}
        'message_button' => 'Mesaj',                         // Message
        'block_button' => 'Engelle',                         // Block
        'unblock_button' => 'Engeli Kaldır',                // Unblock
        'block_confirm' => 'Bu kullanıcı engellensin mi?', // Block this user?
        'shared_friends' => 'Ortak Arkadaşlar',             // Shared Friends
        'shared_servers' => 'Ortak Sunucular',               // Shared Servers
        'shared_theatres' => 'Ortak Tiyatrolar',             // Shared Theatres
        'no_shared_friends' => 'Ortak arkadaş yok',         // No shared friends
        'no_shared_servers' => 'Ortak sunucu yok',           // No shared servers
        'no_shared_theatres' => 'Ortak tiyatro yok',         // No shared theatres
    ],

    'settings' => [
        'title' => 'Ayarlar',                                    // Settings
        'account_section' => 'Hesap ve Güvenlik',               // Account & Security
        'session_section' => 'Oturum',                           // Session
        'images_section' => 'Görseller',                        // Images
        'profile_section' => 'Profil',                           // Profile
        'description' => 'Açıklama',                           // Description
        'description_placeholder' => 'Kendiniz hakkında bir şeyler yazın…', // Write something about yourself…
        'description_preview' => 'Önizleme',                    // Preview
        'preview_profile' => 'Profil',                           // Profile
        'preview_friend' => 'Arkadaş listesi',                  // Friend list
        'preview_speaker' => 'Tiyatro konuşmacısı',           // Theatre speaker
        'preview_chat' => 'Sohbet mesajı',                      // Chat message
        'language' => 'Dil',                                     // Language
        'lang_auto' => 'Otomatik',                               // Automatic
        'dm' => 'Karanlık Mod',                                 // Dark Mode
        'appearance' => 'Görünüm',                            // Appearance
        'rich_presence' => 'Zengin durum gösterimine izin verilsin mi?', // Allow rich presence?
        'close' => 'Kapat',                                      // Close
        'your_pin' => 'PIN\'iniz',                               // Your PIN
        'your_pin_warn' => 'PIN\'iniz özel bir tanımlayıcıdır. Yalnızca güvendiğiniz kaynaklarla paylaşın.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Görünen Ad',                        // Display Name
        'change_name' => 'Adı Değiştir',                      // Change Name
        'localsettings' => 'Yerel Ayar',                         // Locale
        'change_password' => 'Parolayı Değiştir',             // Change Password
        'current_password' => 'Mevcut Parola',                   // Current Password
        'new_password' => 'Yeni Parola',                         // New Password
        'confirm_password' => 'Parolayı Onayla',                // Confirm Password
        'avatar' => 'Avatar',                                    // Avatar
        'ambiance' => 'Ortam Görseli',                          // Ambiance Image
        'upload_avatar' => 'Avatar Yükle',                      // Upload Avatar
        'upload_ambiance' => 'Ortam Görseli Yükle',            // Upload Ambiance
        'max_size' => 'En fazla 500 KB',                         // Max 500 KB
        'logout' => 'Çıkış Yap',                             // Logout
        'logout_desc' => 'Mevcut oturumunuzu sonlandırın',     // End your current session
        'save' => 'Kaydet',                                      // Save
        'saved' => 'Kaydedildi',                                 // Saved
        'error_name_taken' => 'Bu ad zaten alınmış',          // Name already taken
        'error_wrong_password' => 'Yanlış parola',             // Wrong password
        'error_file_too_large' => 'Dosya çok büyük (en fazla 500 KB)', // File too large (max 500 KB)
        'error_invalid_file' => 'Geçersiz dosya türü',        // Invalid file type
        'notifications' => 'Bildirimler',                        // Notifications
        'global_mute' => 'Genel Sessize Alma',                   // Global Mute
        'notification_types' => 'Bildirim Türleri',             // Notification Types
        'friend_requests' => 'Arkadaşlık İstekleri',          // Friend Requests
        'muting_settings' => 'Sessize Alma Ayarları',   // Muting Settings
        'friend_mute' => 'Arkadaşlık isteği bildirimlerini sessize al', // Friend request notification mute
        'friend_change_mute' => 'Arkadaş değişikliği bildirimlerini sessize al', // Friend change notification mute
        'message_mute' => 'Mesaj bildirimlerini sessize al', // Message notification mute
        'call_mute' => 'Arama bildirimlerini sessize al', // Call notification mute
        'friend_changes' => 'Arkadaş kabul edildi veya kaldırıldı', // Friend accepted or removed
        'direct_messages' => 'Doğrudan Mesajlar',               // Direct Messages
        'server_mentions' => 'Bahsetmeler',              // Mentions
        'mention_mute_prompt' => 'Bahsetme bildirimlerini sessize al', // Mention notification mute
        'account_settings' => 'HESAP AYARLARI',                  // ACCOUNT SETTINGS
        'current_email' => 'Mevcut Elektronik Posta',            // Current Electronic Mail
        'friend_request_filtering' => 'Arkadaşlık İsteği Filtreleme', // Friend Request Filtering
        'filter_everyone' => 'Herkes',                           // Everyone
        'filter_fof' => 'Yalnızca arkadaşların arkadaşları', // Only friends of friends
        'dm_permissions' => 'Doğrudan Mesaj İzinleri',         // Direct Message Permissions
        'dm_server_members' => 'Sunucu Üyelerinden DM\'lere izin ver', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Tiyatro konuşmacılarından DM\'lere izin ver', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Tiyatro dinleyicilerinden DM\'lere izin ver', // Allow DMs from Theatre listeners
        'dm_groups' => 'Gruplardan DM\'lere izin ver',           // Allow DMs from groups
        'dm_strangers' => 'Yabancılardan gelen doğrudan mesajlara izin ver', // Allow DMs from strangers
        'can_be_callen_by' => 'Sesli Sohbet İzinleri',  // Voice Chat Permissions
        'vc_server_members' => 'Sunucu üyelerinden gelen sesli sohbetlere izin ver', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Tiyatro konuşmacılarından gelen sesli sohbetlere izin ver', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Tiyatro dinleyicilerinden gelen sesli sohbetlere izin ver', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Gruplardan gelen sesli sohbetlere izin ver', // Allow Voice Chats from groups
        'vc_strangers' => 'Yabancılardan gelen sesli sohbetlere izin ver', // Allow Voice Chats from strangers
        'chat_settings' => 'Sohbet Ayarları',           // Chat Settings
        'split_text_prompt' => 'Uzun mesajları böl',   // Split long messages
        'setting_apperance' => 'Tüm ayarları tek sayfada göster', // Show all settings on one page
        'junicode_show_prompt' => 'Sitenin tırnaklı (serif) sürümünü kullan', // Use the serif version of the website
        'off_set' => 'Saat farkı',                      // Time offset
        'day_time_saving' => 'Yaz saati uygulaması',    // Daylight saving time
        'session_management' => 'Oturum Yönetimi',              // Session Management
        'log_all_out' => 'TÜMÜNDEN ÇIKIŞ YAP [ TÜM OTURUMLARI SONLANDIR ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Cihazlar',                         // Devices
        'this_device' => 'Bu cihaz',                             // This device
        'log_out_device' => 'Çıkış yap',                     // Log out
        'devices_empty' => 'Etkin cihaz yok',                    // No active devices
        'view_people' => 'Üyeleri göster',                     // Show members
        'delete_account' => 'Hesabı sil',                       // Delete account
        'delete_account_confirm' => 'Bu hesap sahipsiz bırakılsın mı? Adınız, postanız ve resimleriniz silinir ve kurtarılamaz. Mesajlarınız, sahipsiz bir kullanıcıya atfedilerek kalır. Emin misiniz?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Gruplar',                  // Groups
        'count' => 'Gruplar ({count})',        // Groups ({count})
        'empty' => 'Henüz grup yok',          // No groups yet
        'group_of' => 'Grup: {names}',         // Group of : {names}
        'create' => 'Grup için bir ad girin', // Enter a name for the group
    ],

    'status' => [
        'online' => 'Çevrimiçi',       // Online
        'away' => 'Uzakta',              // Away
        'dnd' => 'Rahatsız Etmeyin',    // Do Not Disturb
        'offline' => 'Çevrimdışı',   // Offline
        'set_status' => 'Durum Belirle', // Set Status
    ],

    'notifications' => [
        'title' => 'Bildirimler',                                // Notifications
        'empty' => 'Bildirim yok',                               // No notifications
        'friend_request' => '{name} size bir arkadaşlık isteği gönderdi', // {name} sent you a friend request
        'friend_accept' => 'Artık {name} ile arkadaşsınız',  // You are now friends with {name}
        'friend_remove' => '{name} sizi arkadaşlıktan çıkardı', // {name} removed you as a friend
        'mention' => '{name} sizden bahsetti',           // {name} mentioned you
        'server_invite' => '{name} sizi {server} sunucusuna davet etti', // {name} invited you to {server}
        'mark_read' => 'Okundu olarak işaretle',                // Mark as read
        'clear_all' => 'Tümünü temizle',                      // Clear all
        'as_of' => '{date} itibarıyla',                         // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'kullanıcıadı#1234',                 // username#1234
        'button' => 'Ekle',                                      // Add
        'success' => 'Arkadaşlık isteği gönderildi',         // Friend request sent
        'error_not_found' => 'Kullanıcı bulunamadı',          // User not found
        'error_invalid_format' => 'Şu biçimi kullanın: kullanıcıadı#1234', // Use format: username#1234
        'error_self' => 'Kendinizi ekleyemezsiniz',              // Cannot add yourself
        'error_already_friends' => 'Zaten arkadaşsınız',      // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Ayarlar',                  // Settings
        'set_status' => 'Durum Belirle',          // Set Status
        'view_profile' => 'Profili Görüntüle', // View Profile
    ],

    'recent' => [
        'title' => 'Son Sohbetler',     // Recent Conversations
        'empty' => 'Henüz sohbet yok', // No conversations yet
    ],

    'people' => [
        'title' => 'Kişiler ve Sunucular', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Profili aç',                         // Open profile
        'read_all' => 'Tümünü oku',                           // Read all
        'silence' => 'Sustur',                                   // Silence
        'unsilence' => 'Susturmayı kaldır',                    // Unsilence
        'close' => 'Kapat',                                      // Close
        'remove_friend' => 'Arkadaşı Çıkar',                 // Remove Friend
        'leave_group' => 'Gruptan ayrıl',                       // Leave group
        'remove_from_group' => 'Gruptan çıkar',                // Remove from group
        'set_owner' => 'Sahip yap',                              // Make owner
        'set_owner_confirm' => 'Bu kişi sahip yapılsın mı? Sahiplik haklarınızı devredeceksiniz.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Bu kişi gruptan çıkarılsın mı?', // Remove this person from the group?
        'block_confirm' => 'Bu kullanıcı engellensin mi? Artık birbirinizi göremeyeceksiniz.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor}, {target} kişisini ekledi',    // {actor} added {target}
        'member_remove' => '{actor}, {target} kişisini çıkardı', // {actor} removed {target}
        'member_leave' => '{actor} ayrıldı',                   // {actor} left
        'member_join' => '{actor} katıldı',                    // {actor} joined
        'call' => '{actor} {duration} süren bir arama başlattı', // {actor} started a call that lasted {duration}
        'call_missed' => '{actor} kişisinden gelen aramayı kaçırdınız', // You missed a call from {actor}
        'group_rename' => '{actor}, gruba « {name} » adını verdi', // {actor} named the group « {name} »
        'group_icon' => '{actor}, grup simgesini değiştirdi',  // {actor} changed the group icon
        'group_create' => '{actor} grubu oluşturdu',            // {actor} created the group
        'owner_change' => 'Artık {target} sahip',               // {target} is now the owner
        'friend' => '{actor} ve {target} artık arkadaş',       // {actor} and {target} are now friends
        'like' => '{actor} toplam {x} kez olmak üzere {n} mesajı beğendi', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'EMOJİ ARA...',               // SEARCH EMOJIS...
        'not_found' => 'EMOJİ BULUNAMADI',        // NO EMOJIS FOUND
        'recents' => 'SON EMOJİLER',              // RECENT EMOJIS
        'smileys' => 'GÜLEN YÜZLER VE DUYGULAR', // SMILEYS AND EMOTION
        'people' => 'İNSANLAR VE BEDEN',          // PEOPLE AND BODY
        'animals' => 'HAYVANLAR VE DOĞA',         // ANIMALS AND NATURE
        'food' => 'YİYECEK VE İÇECEK',          // FOOD AND DRINK
        'activities' => 'ETKİNLİKLER',           // ACTIVITIES
        'travel' => 'SEYAHAT VE YERLER',           // TRAVEL & PLACES
        'objects' => 'NESNELER',                   // OBJECTS
        'symbols' => 'SEMBOLLER',                  // SYMBOLS
        'flags' => 'BAYRAKLAR',                    // FLAGS
        'custom' => 'ÖZEL',                       // CUSTOM
        'user' => 'EMOJİLERİNİZ',               // YOUR EMOJIS
        'tabs_emojis' => 'EMOJİLER',              // EMOJIS
        'tabs_gifs' => 'GİFLER',                  // GIFS
    ],

    'gif' => [
        'tab_history' => 'GEÇMİŞ',                          // HISTORY
        'tab_liked' => 'BEĞENİLENLER',                       // LIKED
        'tab_tenor' => 'GİFLER',                              // GIFS
        'search' => 'GİF ARA...',                             // SEARCH GIFS...
        'loading' => 'Yükleniyor...',                         // Loading...
        'error' => 'GIF\'ler yüklenemedi',                    // Could not load GIFs
        'empty' => 'Henüz burada bir şey yok',               // Nothing here yet
        'powered_by' => 'KLIPY tarafından desteklenmektedir', // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Görseli ayarla',                            // Adjust image
        'apply' => 'Uygula',                                     // Apply
        'cancel' => 'İptal',                                    // Cancel
        'zoom' => 'Yakınlaştır',                              // Zoom
        'trim' => 'Kırp',                                       // Trim
        'processing' => 'İşleniyor…',                        // Processing…
        'drag_hint' => 'Yeniden konumlandırmak için sürükle · yakınlaştırmak için kaydır', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Kapat',                 // Close
        'download' => 'İndir',             // Download
        'open_original' => 'Orijinali aç', // Open original
    ],

    'image' => [
        'change' => 'Değiştir',        // Change
        'view' => 'Görüntüle',        // View
        'revert' => 'Geri al',           // Revert
        'uploading' => 'Yükleniyor…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'Yetkisiz',                  // Unauthorized
        'invalid_pin' => 'Geçersiz PIN',              // Invalid PIN
        'user_not_found' => 'Kullanıcı bulunamadı', // User not found
        'talk_not_found' => 'Sohbet bulunamadı',      // Talk not found
        'invalid_talk' => 'Geçersiz sohbet',          // Invalid talk
        'access_denied' => 'Erişim reddedildi',       // Access denied
    ],
];
