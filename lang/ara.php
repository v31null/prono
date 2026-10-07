<?php

$S = [
    'app' => [
        'name' => 'برونو', // Prono
    ],

    'nav' => [
        'home' => 'الرئيسية',               // Home
        'dms' => 'الرسائل المباشرة', // Direct Messages
        'groups' => 'المجموعات',           // Groups
        'servers' => 'الخوادم',              // Servers
        'theatres' => 'المسارح',             // Theatres
        'telegram' => 'البرقيات',           // Telegrams
        'settings' => 'الإعدادات',         // Settings
        'notifications' => 'الإشعارات',    // Notifications
    ],

    'auth' => [
        'login_title' => 'تسجيل الدخول',              // LOG-IN
        'enlist_title' => 'التسجيل',                      // EN-LIST
        'email_placeholder' => 'البريد الإلكتروني', // Electronic Mail
        'password_placeholder' => 'كلمة المرور',       // Password
        'password_confirm_placeholder' => 'تأكيد كلمة المرور', // Confirm Password
        'name_placeholder' => 'الاسم المعروض',       // Display Name
        'login_button' => 'دخول',                            // Enter
        'enlist_button' => 'إنشاء حساب',                // Create Account
        'link_to_enlist' => 'إنشاء حساب',               // Create account
        'link_to_login' => 'لديّ حساب بالفعل',     // Already have account
        'error_fill_fields' => 'املأ جميع الحقول', // Fill all fields
        'error_invalid_credentials' => 'بيانات الدخول غير صحيحة', // Invalid credentials
        'error_too_many' => 'محاولات كثيرة جدًا. انتظر بضع دقائق ثم حاول مجددًا.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'يجب أن يتراوح الاسم بين 2 و32 حرفًا', // Name must be 2-32 characters
        'error_invalid_email' => 'صيغة البريد الإلكتروني غير صحيحة', // Invalid email format
        'error_password_length' => 'يجب أن تتكوّن كلمة المرور من 8 أحرف على الأقل', // Password must be at least 8 characters
        'error_password_mismatch' => 'كلمتا المرور غير متطابقتين', // Passwords do not match
        'error_email_exists' => 'هذا البريد مسجَّل مسبقًا', // Email already registered
        'error_email_banned' => 'هذا البريد محظور.', // This mail is banned.
        'link_to_forgot' => 'نسيت كلمة المرور',    // I forgot my password
        'download_client' => 'تنزيل العميل البرونوي لنظام ويندوز', // Download pronal client for Windows
        'open_in_client' => 'الفتح في العميل',      // Open in client
        'forgot_title' => 'إعادة التعيين',           // RE-SET
        'forgot_instruction' => 'أدخل بريدك الإلكتروني. إن كان مسجَّلًا، فسيصله رابط إعادة التعيين.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'إرسال رابط إعادة التعيين', // Send resetting link
        'forgot_sent' => 'إن كان ذلك البريد مسجَّلًا، فرابط إعادة التعيين في طريقه إليه. تفقّد بريدك الوارد.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'تعذّر خروج الرسالة الآن. حاول مجددًا لاحقًا.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'العودة إلى تسجيل الدخول', // Back to log-in
        'reset_title' => 'كلمة مرور جديدة',         // NEW PASS-WORD
        'reset_button' => 'حفظ وتسجيل الدخول',    // Save & Log-in
        'reset_invalid' => 'رابط إعادة التعيين هذا باطل أو منتهي الصلاحية.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'برونو — إعادة تعيين كلمة المرور', // Prono — pass-word reset
        'reset_mail_intro' => 'طلب أحدهم إعادة تعيين كلمة المرور لهذا الحساب البرونوي.', // Someone asked to reset the pass-word for this pronal account.
        'reset_mail_cta' => 'تعيين كلمة مرور جديدة', // Set a new pass-word
        'reset_mail_ignore' => 'إن لم تكن أنت، فلا تلتفت إلى هذه الرسالة. لا تردّ عليها.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'البريد الإلكتروني أو P.I.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'لم تدخل للمرة الأولى بعد. افتح الرسالة التي أرسلناها إليك.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'هذا الحساب مقفل.', // This account is locked.
        'enlist_check_mail' => 'تم إنشاء الحساب. رسالة تحمل P.I.-№ الخاص بك ورمز دخول لمرة واحدة في طريقها إليك. افتحها لتدخل للمرة الأولى.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'الدخول الأول',             // FIRST ENTRY
        'verify_instruction' => 'أعد كتابة P.I.-№ الخاص بك والرمز المكوَّن من أربعة أحرف كما ورد في الرسالة.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-№',                  // P.I.-№
        'verify_code_placeholder' => 'رمز من أربعة أحرف', // Four-letter code
        'verify_button' => 'دخول',                           // Enter
        'verify_invalid_link' => 'رابط الدخول هذا باطل أو منتهي الصلاحية.', // This entry link is void or has expired.
        'verify_burnt' => 'محظور.',                         // Banned.
        'verify_mail_subject' => 'برونو — P.I.-№ ورمز الدخول الخاصان بك', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'أهلًا بك. هذه مفاتيح حسابك البرونوي الجديد.', // Welcome. Here are the keys to your new pronal account.
        'verify_mail_pin_label' => 'P.I.-№ الخاص بك',   // Your P.I.-№
        'verify_mail_code_label' => 'رمز الدخول الخاص بك لمرة واحدة', // Your one-time entry code
        'verify_mail_cta' => 'الدخول للمرة الأولى', // Enter for the first time
        'verify_mail_warn' => 'أعد كتابة الاثنين تمامًا كما هما في صفحة الدخول. خطأ واحد في حرف يحرق الحساب ويقفل البريد. لا تردّ على هذه الرسالة.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'أهلًا بك، {name}',                // Welcome, {name}
        'subtitle' => 'اختر محادثة من الشريط الجانبي أو ابدأ محادثة جديدة.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'الأصدقاء',                           // Friends
        'count' => 'الأصدقاء ({count})',                 // Friends ({count})
        'empty' => 'لا أصدقاء بعد',                   // No friends yet
        'add_button' => 'إضافة صديق',                   // Add Friend
        'status_friends' => 'الأصدقاء',                  // Friends
        'status_pending' => 'قيد الانتظار',           // Pending
        'status_declined' => 'مرفوض',                       // Declined
        'status_blocked' => 'محظور',                        // Blocked
        'request_pending' => 'الطلب قيد الانتظار', // Request Pending
        'accept' => 'قبول',                                  // Accept
        'decline' => 'رفض',                                   // Decline
        'retract' => 'سحب',                                   // Retract
        'retract_confirm' => 'سحب طلب الصداقة هذا؟ سيتم سحبه.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'الرسائل المباشرة',            // Direct Messages
        'empty' => 'أضف أصدقاء لبدء المراسلة', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'الخوادم',                             // Servers
        'count' => 'الخوادم ({count})',                   // Servers ({count})
        'empty' => 'انضم إلى خادم أو أنشئ واحدًا', // Join or create a server
    ],

    'theatres' => [
        'title' => 'المسارح',                             // Theatres
        'count' => 'المسارح ({count})',                   // Theatres ({count})
        'empty' => 'لا مسارح',                            // No theatres
        'role_speaker' => 'متحدّث',                        // SPEAKER
        'role_listener' => 'مستمع',                         // LISTENER
        'create' => 'إنشاء مسرح',                       // Create Theatre
        'name_placeholder' => 'اسم المسرح',             // Theatre name
        'add' => 'إضافة مستمع',                        // Add listener
        'settings' => 'إعدادات المسرح',             // Theatre settings
        'leave' => 'مغادرة المسرح',                  // Leave theatre
        'leave_confirm' => 'مغادرة هذا المسرح؟', // Leave this theatre?
        'rename_prompt' => 'اسم المسرح الجديد',   // New theatre name
        'broadcast_placeholder' => 'بثّ إلى المسرح…', // Broadcast to the theatre...
        'send' => 'إرسال',                                  // Transmit
        'no_friends_to_add' => 'لا أصدقاء لإضافتهم', // No friends to add
        'promote' => 'جعله متحدّثًا',                // Make SPEAKER
        'demote' => 'جعله مستمعًا',                   // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'إلغاء',  // Cancel
        'yes' => 'نعم',         // Yes
        'no' => 'لا',            // No
        'confirm' => 'تأكيد', // Confirm
    ],

    'call' => [
        'start' => 'اتصال',                                 // Call
        'incoming' => 'اتصال من {name}',                  // Call from {name}
        'accept' => 'رد',                                      // Accept
        'decline' => 'رفض',                                   // Decline
        'calling' => 'جارٍ الاتصال…',               // Calling…
        'connecting' => 'جارٍ الاتصال بالشبكة…', // Connecting…
        'failed' => 'تعذّر الاتصال (ترحيل)',    // Could not connect (relay)
        'in_call' => 'في مكالمة',                        // In call
        'mute' => 'كتم',                                      // Mute
        'unmute' => 'إلغاء الكتم',                     // Unmute
        'hang_up' => 'إنهاء',                               // Hang up
        'unavailable' => 'المستخدم غير متصل',     // User is offline
        'busy' => 'المستخدم مشغول',                 // User is busy
        'declined' => 'تم رفض المكالمة',            // Call declined
        'ended' => 'انتهت المكالمة',                // Call ended
        'mic_denied' => 'تم رفض الوصول إلى الميكروفون', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'نشط الآن',         // Now active
        'elapsed' => 'مضى',                  // elapsed
        'left' => 'متبقٍّ',               // left
        'paused' => 'متوقف مؤقتًا.', // Paused.
        'playing' => 'يلعب',                // Playing
        'streaming' => 'يبثّ',              // Streaming
        'listening' => 'يستمع',            // Listening
        'watching' => 'يشاهد',             // Watching
        'competing' => 'يتنافس',          // Competing
    ],

    'chat' => [
        'input_placeholder' => 'اكتب رسالة…',         // Type a message...
        'filelarge' => 'الملف رقم {n} كبير جدًا، لا يمكن رفعه.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'جارٍ الرفع {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'أنت مستمع',                // You are a LISTENER
        'edited' => '(معدَّلة)',                          // (edited)
        'untrusten_media' => 'وسائط غير موثوقة — انقر للتحميل', // Untrusted media — click to load
        'untrusten_media_confirm' => 'هل أنت متأكد؟ سيحمّل هذا الوسائط مباشرة من مصدرها، وسيرى المصدر عنوان IP الخاص بك.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'يكتب…',                            // is typing...
        'are_typing' => 'يكتبون…',                       // are typing...
        'replying_to' => 'ردًّا على',                    // Replying to
        'like' => 'إعجاب',                                  // Like
        'paste_too_long_as_file' => 'هذه الرسالة أطول من أن تُرسل في الدردشة. هل تودّ إرسالها كملف بدلًا من ذلك؟', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'رد',                                       // Reply
        'edit' => 'تعديل',                                  // Edit
        'delete' => 'حذف',                                    // Delete
        'copy' => 'نسخ',                                      // Copy
        'copy_raw' => 'نسخ النص الخام',              // Copy raw
        'copied' => 'تم النسخ',                           // Copied
        'morethan10items' => 'لا يمكنك تضمين أكثر من 10 ملفات!', // You can not embed more than 10 files !
        'overlayupload' => 'توقّف عن السحب لتضمين الملف', // Stop dragging to embed the file
        'unknown' => 'غير معروف',                        // Unknown
        'said' => 'قال',                                      // said
        'reply_said' => 'قال {actor}:',                       // {actor} said :
        'reply_media' => '{kind} أرسله {actor} في {time}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => 'مرفق أرسله {actor} في {time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'الرسالة الأصلية غير متاحة', // Original message unavailable
        'reply_far' => 'بعيدة في أعلى الدردشة. انقر للانتقال إليها.', // Too far up the chat. Click to go there.
        'media_image' => 'صورة',                             // image
        'media_video' => 'فيديو',                           // video
        'media_audio' => 'مقطع صوتي',                    // audio
        'media_file' => 'ملف',                                // file
        'download' => 'انقر لتنزيل الملف المرفوع', // Click to Down-load the Up-loaded file
        'create_group' => 'إنشاء مجموعة',             // Create Group
        'add_to_group' => 'إضافة إلى مجموعة',      // Add to Group
        'likes' => 'الإعجابات',                         // Likes
        'new_message_scroll_klick' => '{n} رسالة جديدة', // {n} new message( s )
        'liked_attachment' => 'مرفق @ {time}',               // Attachment @ {time}
        'no_likes' => 'لا رسائل مُعجَب بها',     // No liked messages
        'group_settings' => 'إعدادات المجموعة',   // Group Settings
        'leave_group' => 'مغادرة المجموعة',        // Leave Group
        'leave_confirm' => 'مغادرة هذه المجموعة؟', // Leave this group?
        'go_to_latest' => 'انقر للعودة إلى أحدث الدردشة', // Click to go back to Latest chat
        'empty' => 'لا رسائل بعد. قل شيئًا لتبدأ.', // No messages yet. Say something to get started.
        'load_failed' => 'تعذّر تحميل الرسائل. انقر لإعادة المحاولة.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'البرقيات',                         // Telegrams
        'received_title' => 'البرقيات الواردة', // Received Telegrams
        'empty' => 'لا برقيات',                        // No telegrams
        'priority_routine' => 'عادية',                    // ROUTINE
        'priority_priority' => 'ذات أولوية',          // PRIORITY
        'priority_emergency' => 'طارئة',                  // EMERGENCY
    ],

    'profile' => [
        'details' => 'تفاصيل الملف الشخصي',     // Profile details
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
        'message_button' => 'مراسلة',                      // Message
        'block_button' => 'حظر',                              // Block
        'unblock_button' => 'إلغاء الحظر',             // Unblock
        'block_confirm' => 'حظر هذا المستخدم؟',   // Block this user?
        'shared_friends' => 'الأصدقاء المشتركون', // Shared Friends
        'shared_servers' => 'الخوادم المشتركة',   // Shared Servers
        'shared_theatres' => 'المسارح المشتركة',  // Shared Theatres
        'no_shared_friends' => 'لا أصدقاء مشتركون', // No shared friends
        'no_shared_servers' => 'لا خوادم مشتركة',   // No shared servers
        'no_shared_theatres' => 'لا مسارح مشتركة',  // No shared theatres
    ],

    'settings' => [
        'title' => 'الإعدادات',                         // Settings
        'account_section' => 'الحساب والأمان',      // Account & Security
        'session_section' => 'الجلسة',                     // Session
        'images_section' => 'الصور',                        // Images
        'profile_section' => 'الملف الشخصي',          // Profile
        'description' => 'الوصف',                           // Description
        'description_placeholder' => 'اكتب شيئًا عن نفسك…', // Write something about yourself…
        'description_preview' => 'معاينة',                 // Preview
        'preview_profile' => 'الملف الشخصي',          // Profile
        'preview_friend' => 'قائمة الأصدقاء',       // Friend list
        'preview_speaker' => 'متحدّث المسرح',        // Theatre speaker
        'preview_chat' => 'رسالة الدردشة',           // Chat message
        'language' => 'اللغة',                              // Language
        'lang_auto' => 'تلقائي',                           // Automatic
        'dm' => 'الوضع الداكن',                       // Dark Mode
        'appearance' => 'المظهر',                          // Appearance
        'rich_presence' => 'السماح بالحضور الغني؟', // Allow rich presence?
        'close' => 'إغلاق',                                 // Close
        'your_pin' => 'PIN الخاص بك',                     // Your PIN
        'your_pin_warn' => 'PIN الخاص بك معرّف خاص. شاركه مع المصادر الموثوقة فقط.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'الاسم المعروض',           // Display Name
        'change_name' => 'تغيير الاسم',                // Change Name
        'localsettings' => 'الإعدادات المحلية',  // Locale
        'change_password' => 'تغيير كلمة المرور', // Change Password
        'current_password' => 'كلمة المرور الحالية', // Current Password
        'new_password' => 'كلمة المرور الجديدة', // New Password
        'confirm_password' => 'تأكيد كلمة المرور', // Confirm Password
        'avatar' => 'الصورة الرمزية',               // Avatar
        'ambiance' => 'صورة الأجواء',                 // Ambiance Image
        'upload_avatar' => 'رفع الصورة الرمزية', // Upload Avatar
        'upload_ambiance' => 'رفع صورة الأجواء',   // Upload Ambiance
        'max_size' => 'الحد الأقصى 500 كيلوبايت', // Max 500 KB
        'logout' => 'تسجيل الخروج',                   // Logout
        'logout_desc' => 'إنهاء جلستك الحالية', // End your current session
        'save' => 'حفظ',                                      // Save
        'saved' => 'تم الحفظ',                            // Saved
        'error_name_taken' => 'الاسم مستخدم بالفعل', // Name already taken
        'error_wrong_password' => 'كلمة المرور خاطئة', // Wrong password
        'error_file_too_large' => 'الملف كبير جدًا (الحد الأقصى 500 كيلوبايت)', // File too large (max 500 KB)
        'error_invalid_file' => 'نوع الملف غير صالح', // Invalid file type
        'notifications' => 'الإشعارات',                 // Notifications
        'global_mute' => 'كتم شامل',                      // Global Mute
        'notification_types' => 'أنواع الإشعارات', // Notification Types
        'friend_requests' => 'طلبات الصداقة',        // Friend Requests
        'muting_settings' => 'إعدادات الكتم',        // Muting Settings
        'friend_mute' => 'كتم إشعارات طلبات الصداقة', // Friend request notification mute
        'friend_change_mute' => 'كتم إشعارات تغيّر الأصدقاء', // Friend change notification mute
        'message_mute' => 'كتم إشعارات الرسائل', // Message notification mute
        'call_mute' => 'كتم إشعارات المكالمات', // Call notification mute
        'friend_changes' => 'قبول صديق أو إزالته', // Friend accepted or removed
        'direct_messages' => 'الرسائل المباشرة',  // Direct Messages
        'server_mentions' => 'الإشارات',                 // Mentions
        'mention_mute_prompt' => 'كتم إشعارات الإشارات', // Mention notification mute
        'account_settings' => 'إعدادات الحساب',     // ACCOUNT SETTINGS
        'current_email' => 'البريد الإلكتروني الحالي', // Current Electronic Mail
        'friend_request_filtering' => 'تصفية طلبات الصداقة', // Friend Request Filtering
        'filter_everyone' => 'الجميع',                     // Everyone
        'filter_fof' => 'أصدقاء الأصدقاء فقط',  // Only friends of friends
        'dm_permissions' => 'أذونات الرسائل المباشرة', // Direct Message Permissions
        'dm_server_members' => 'السماح بالرسائل المباشرة من أعضاء الخادم', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'السماح بالرسائل المباشرة من متحدّثي المسرح', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'السماح بالرسائل المباشرة من مستمعي المسرح', // Allow DMs from Theatre listeners
        'dm_groups' => 'السماح بالرسائل المباشرة من المجموعات', // Allow DMs from groups
        'dm_strangers' => 'السماح بالرسائل المباشرة من الغرباء', // Allow DMs from strangers
        'can_be_callen_by' => 'أذونات الدردشة الصوتية', // Voice Chat Permissions
        'vc_server_members' => 'السماح بالدردشة الصوتية من أعضاء الخادم', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'السماح بالدردشة الصوتية من متحدّثي المسرح', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'السماح بالدردشة الصوتية من مستمعي المسرح', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'السماح بالدردشة الصوتية من المجموعات', // Allow Voice Chats from groups
        'vc_strangers' => 'السماح بالدردشة الصوتية من الغرباء', // Allow Voice Chats from strangers
        'chat_settings' => 'إعدادات الدردشة',      // Chat Settings
        'split_text_prompt' => 'تقسيم الرسائل الطويلة', // Split long messages
        'setting_apperance' => 'عرض كل الإعدادات في صفحة واحدة', // Show all settings on one page
        'junicode_show_prompt' => 'استخدام نسخة الموقع ذات خط السيريف', // Use the serif version of the website
        'maru_marks' => 'استخدام علامات الدائرة (مارو)', // Use the maru versions
        'off_set' => 'فارق التوقيت',                  // Time offset
        'day_time_saving' => 'التوقيت الصيفي',      // Daylight saving time
        'session_management' => 'إدارة الجلسات',     // Session Management
        'log_all_out' => 'تسجيل الخروج من الكل [ إنهاء كل الجلسات ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'الأجهزة',                   // Devices
        'this_device' => 'هذا الجهاز',                  // This device
        'log_out_device' => 'تسجيل الخروج',           // Log out
        'devices_empty' => 'لا أجهزة نشطة',           // No active devices
        'view_people' => 'عرض الأعضاء',                // Show members
        'delete_account' => 'حذف الحساب',               // Delete account
        'delete_account_confirm' => 'تحويل هذا الحساب إلى حساب يتيم؟ سيُمحى اسمك وبريدك وصورك ولا يمكن استرجاعها. ستبقى رسائلك منسوبة إلى يتيم مجهول. هل أنت متأكد؟', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'المجموعات',                    // Groups
        'count' => 'المجموعات ({count})',          // Groups ({count})
        'empty' => 'لا مجموعات بعد',            // No groups yet
        'group_of' => 'مجموعة: {names}',              // Group of : {names}
        'create' => 'أدخل اسمًا للمجموعة', // Enter a name for the group
    ],

    'status' => [
        'online' => 'متصل',                    // Online
        'away' => 'بعيد',                      // Away
        'dnd' => 'عدم الإزعاج',          // Do Not Disturb
        'offline' => 'غير متصل',            // Offline
        'set_status' => 'تعيين الحالة', // Set Status
    ],

    'notifications' => [
        'title' => 'الإشعارات',                         // Notifications
        'empty' => 'لا إشعارات',                        // No notifications
        'friend_request' => 'أرسل لك {name} طلب صداقة', // {name} sent you a friend request
        'friend_accept' => 'أصبحتَ الآن صديقًا لـ {name}', // You are now friends with {name}
        'friend_remove' => 'أزالك {name} من الأصدقاء', // {name} removed you as a friend
        'mention' => 'أشار إليك {name}',                 // {name} mentioned you
        'server_invite' => 'دعاك {name} إلى {server}',    // {name} invited you to {server}
        'mark_read' => 'وضع علامة مقروء',           // Mark as read
        'clear_all' => 'مسح الكل',                        // Clear all
        'as_of' => 'اعتبارًا من {date}',               // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',                        // username#1234
        'button' => 'إضافة',                                // Add
        'success' => 'تم إرسال طلب الصداقة',    // Friend request sent
        'error_not_found' => 'المستخدم غير موجود', // User not found
        'error_invalid_format' => 'استخدم الصيغة: username#1234', // Use format: username#1234
        'error_self' => 'لا يمكنك إضافة نفسك',   // Cannot add yourself
        'error_already_friends' => 'أنتما صديقان بالفعل', // Already friends
    ],

    'hover_profile' => [
        'settings' => 'الإعدادات',                 // Settings
        'set_status' => 'تعيين الحالة',          // Set Status
        'view_profile' => 'عرض الملف الشخصي', // View Profile
    ],

    'recent' => [
        'title' => 'المحادثات الأخيرة', // Recent Conversations
        'empty' => 'لا محادثات بعد',        // No conversations yet
    ],

    'people' => [
        'title' => 'الأشخاص والخوادم', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'فتح الملف الشخصي',      // Open profile
        'read_all' => 'تعليم الكل كمقروء',        // Read all
        'silence' => 'كتم',                                   // Silence
        'unsilence' => 'إلغاء الكتم',                  // Unsilence
        'close' => 'إغلاق',                                 // Close
        'remove_friend' => 'إزالة الصديق',            // Remove Friend
        'leave_group' => 'مغادرة المجموعة',        // Leave group
        'remove_from_group' => 'إزالة من المجموعة', // Remove from group
        'set_owner' => 'جعله المالك',                  // Make owner
        'set_owner_confirm' => 'جعل هذا الشخص المالك؟ ستسلّم صلاحيات المالك الخاصة بك.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'إزالة هذا الشخص من المجموعة؟', // Remove this person from the group?
        'block_confirm' => 'حظر هذا المستخدم؟ لن ترى أحدكما الآخر بعد الآن.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => 'أضاف {actor} {target}',             // {actor} added {target}
        'member_remove' => 'أزال {actor} {target}',          // {actor} removed {target}
        'member_leave' => 'غادر {actor}',                    // {actor} left
        'member_join' => 'انضم {actor}',                     // {actor} joined
        'call' => 'بدأ {actor} مكالمة استمرت {duration}', // {actor} started a call that lasted {duration}
        'call_missed' => 'فاتتك مكالمة من {actor}', // You missed a call from {actor}
        'group_rename' => 'سمّى {actor} المجموعة « {name} »', // {actor} named the group « {name} »
        'group_icon' => 'غيّر {actor} أيقونة المجموعة', // {actor} changed the group icon
        'group_create' => 'أنشأ {actor} المجموعة',   // {actor} created the group
        'owner_change' => 'أصبح {target} المالك الآن', // {target} is now the owner
        'friend' => 'أصبح {actor} و{target} صديقين الآن', // {actor} and {target} are now friends
        'like' => 'أعجب {actor} بـ {n} رسالة، {x} مرة في المجموع', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'ابحث عن الرموز التعبيرية…', // SEARCH EMOJIS...
        'not_found' => 'لا رموز تعبيرية',           // NO EMOJIS FOUND
        'recents' => 'الرموز الأخيرة',              // RECENT EMOJIS
        'smileys' => 'الوجوه والمشاعر',            // SMILEYS AND EMOTION
        'people' => 'الأشخاص والجسم',               // PEOPLE AND BODY
        'animals' => 'الحيوانات والطبيعة',      // ANIMALS AND NATURE
        'food' => 'الطعام والشراب',                 // FOOD AND DRINK
        'activities' => 'الأنشطة',                        // ACTIVITIES
        'travel' => 'السفر والأماكن',               // TRAVEL & PLACES
        'objects' => 'الأشياء',                           // OBJECTS
        'symbols' => 'الرموز',                             // SYMBOLS
        'flags' => 'الأعلام',                             // FLAGS
        'custom' => 'مخصّصة',                              // CUSTOM
        'user' => 'رموزك التعبيرية',               // YOUR EMOJIS
        'tabs_emojis' => 'الرموز التعبيرية',      // EMOJIS
        'tabs_gifs' => 'GIF',                                    // GIFS
    ],

    'gif' => [
        'tab_history' => 'السجل',             // HISTORY
        'tab_liked' => 'المفضلة',           // LIKED
        'tab_tenor' => 'GIF',                      // GIFS
        'search' => 'ابحث عن GIF…',        // SEARCH GIFS...
        'loading' => 'جارٍ التحميل…', // Loading...
        'error' => 'تعذّر تحميل GIF',    // Could not load GIFs
        'empty' => 'لا شيء هنا بعد',    // Nothing here yet
        'powered_by' => 'بدعم من KLIPY',     // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'ضبط الصورة',                        // Adjust image
        'apply' => 'تطبيق',                                 // Apply
        'cancel' => 'إلغاء',                                // Cancel
        'zoom' => 'تكبير',                                  // Zoom
        'trim' => 'قص',                                        // Trim
        'processing' => 'جارٍ المعالجة…',          // Processing…
        'drag_hint' => 'اسحب لإعادة التموضع · مرّر للتكبير', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'إغلاق',                // Close
        'download' => 'تنزيل',             // Download
        'open_original' => 'فتح الأصل', // Open original
    ],

    'image' => [
        'change' => 'تغيير',                // Change
        'view' => 'عرض',                      // View
        'revert' => 'تراجع',                // Revert
        'uploading' => 'جارٍ الرفع…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'غير مصرّح',                   // Unauthorized
        'invalid_pin' => 'PIN غير صالح',                  // Invalid PIN
        'user_not_found' => 'المستخدم غير موجود', // User not found
        'talk_not_found' => 'المحادثة غير موجودة', // Talk not found
        'invalid_talk' => 'محادثة غير صالحة',      // Invalid talk
        'access_denied' => 'تم رفض الوصول',           // Access denied
    ],
];
