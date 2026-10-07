<?php

$S = [
    'app' => [
        'name' => 'פרונו', // Prono
    ],

    'nav' => [
        'home' => 'בית',                   // Home
        'dms' => 'הודעות ישירות', // Direct Messages
        'groups' => 'קבוצות',           // Groups
        'servers' => 'שרתים',            // Servers
        'theatres' => 'תיאטראות',     // Theatres
        'telegram' => 'מברקים',         // Telegrams
        'settings' => 'הגדרות',         // Settings
        'notifications' => 'התראות',    // Notifications
    ],

    'auth' => [
        'login_title' => 'התחברות',                       // LOG-IN
        'enlist_title' => 'הרשמה',                          // EN-LIST
        'email_placeholder' => 'דואר אלקטרוני',      // Electronic Mail
        'password_placeholder' => 'סיסמה',                  // Password
        'password_confirm_placeholder' => 'אימות סיסמה', // Confirm Password
        'name_placeholder' => 'שם תצוגה',                 // Display Name
        'login_button' => 'כניסה',                          // Enter
        'enlist_button' => 'יצירת חשבון',              // Create Account
        'link_to_enlist' => 'יצירת חשבון',             // Create account
        'link_to_login' => 'כבר יש לי חשבון',        // Already have account
        'error_fill_fields' => 'יש למלא את כל השדות', // Fill all fields
        'error_invalid_credentials' => 'פרטי ההתחברות שגויים', // Invalid credentials
        'error_too_many' => 'יותר מדי ניסיונות. המתינו כמה דקות ונסו שוב.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'השם חייב להכיל 2 עד 32 תווים', // Name must be 2-32 characters
        'error_invalid_email' => 'תבנית הדואר האלקטרוני שגויה', // Invalid email format
        'error_password_length' => 'הסיסמה חייבת להכיל לפחות 8 תווים', // Password must be at least 8 characters
        'error_password_mismatch' => 'הסיסמאות אינן תואמות', // Passwords do not match
        'error_email_exists' => 'הדואר האלקטרוני כבר רשום', // Email already registered
        'error_email_banned' => 'כתובת הדואר הזאת חסומה.', // This mail is banned.
        'link_to_forgot' => 'שכחתי את הסיסמה',      // I forgot my password
        'download_client' => 'הורדת תוכנת פרונו ל־Windows', // Download Prono client for Windows
        'open_in_client' => 'פתיחה בתוכנה',           // Open in client
        'forgot_title' => 'איפוס',                          // RE-SET
        'forgot_instruction' => 'הזינו את כתובת הדואר האלקטרוני שלכם. אם היא רשומה, קישור לאיפוס יישלח אליה.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'שליחת קישור לאיפוס', // Send resetting link
        'forgot_sent' => 'אם כתובת הדואר רשומה, קישור לאיפוס בדרך אליה. בדקו את תיבת הדואר הנכנס.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'המכתב לא הצליח לצאת כרגע. נסו שוב מאוחר יותר.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'חזרה להתחברות',          // Back to log-in
        'reset_title' => 'סיסמה חדשה',                  // NEW PASS-WORD
        'reset_button' => 'שמירה והתחברות',         // Save & Log-in
        'reset_invalid' => 'קישור האיפוס הזה בטל או שפג תוקפו.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'פרונו — איפוס סיסמה', // Prono — pass-word reset
        'reset_mail_intro' => 'מישהו ביקש לאפס את הסיסמה של חשבון פרונו זה.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'הגדרת סיסמה חדשה',    // Set a new pass-word
        'reset_mail_ignore' => 'אם זה לא היה אתם, התעלמו מכך. אל תשיבו על המכתב הזה.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'דואר אלקטרוני או P.I.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'עדיין לא נכנסתם בפעם הראשונה. פתחו את המכתב ששלחנו אליכם.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'החשבון הזה נעול.', // This account is locked.
        'enlist_check_mail' => 'החשבון נוצר. מכתב הנושא את ה־P.I.-№ שלכם וקוד כניסה חד־פעמי בדרך אליכם. פתחו אותו כדי להיכנס בפעם הראשונה.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'כניסה ראשונה',             // FIRST ENTRY
        'verify_instruction' => 'העתיקו במדויק את ה־P.I.-№ שלכם ואת הקוד בן ארבע האותיות מן המכתב.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-№',                  // P.I.-№
        'verify_code_placeholder' => 'קוד בן ארבע אותיות', // Four-letter code
        'verify_button' => 'כניסה',                         // Enter
        'verify_invalid_link' => 'קישור הכניסה הזה בטל או שפג תוקפו.', // This entry link is void or has expired.
        'verify_burnt' => 'חסום.',                           // Banned.
        'verify_mail_subject' => 'פרונו — ה־P.I.-№ וקוד הכניסה שלכם', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'ברוכים הבאים. הנה המפתחות לחשבון פרונו החדש שלכם.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'ה־P.I.-№ שלכם',      // Your P.I.-№
        'verify_mail_code_label' => 'קוד הכניסה החד־פעמי שלכם', // Your one-time entry code
        'verify_mail_cta' => 'כניסה בפעם הראשונה', // Enter for the first time
        'verify_mail_warn' => 'העתיקו את שניהם במדויק בדף הכניסה. טעות אחת בתו שורפת את החשבון ונועלת את הדואר. אל תשיבו על המכתב הזה.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'ברוך הבא, {name}',                 // Welcome, {name}
        'subtitle' => 'בחרו שיחה בסרגל הצד או התחילו שיחה חדשה.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'חברים',                                 // Friends
        'count' => 'חברים ({count})',                       // Friends ({count})
        'empty' => 'אין חברים עדיין',               // No friends yet
        'add_button' => 'הוספת חבר',                     // Add Friend
        'status_friends' => 'חברים',                        // Friends
        'status_pending' => 'ממתין',                        // Pending
        'status_declined' => 'נדחה',                         // Declined
        'status_blocked' => 'חסום',                          // Blocked
        'request_pending' => 'הבקשה ממתינה',          // Request Pending
        'accept' => 'אישור',                                // Accept
        'decline' => 'דחייה',                               // Decline
        'retract' => 'ביטול',                               // Retract
        'retract_confirm' => 'לבטל את בקשת החברות הזאת? היא תימשך בחזרה.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'הודעות ישירות',                  // Direct Messages
        'empty' => 'הוסיפו חברים כדי להתחיל להתכתב', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'שרתים',                               // Servers
        'count' => 'שרתים ({count})',                     // Servers ({count})
        'empty' => 'הצטרפו לשרת או צרו שרת', // Join or create a server
    ],

    'theatres' => [
        'title' => 'תיאטראות',                           // Theatres
        'count' => 'תיאטראות ({count})',                 // Theatres ({count})
        'empty' => 'אין תיאטראות',                    // No theatres
        'role_speaker' => 'דובר',                            // SPEAKER
        'role_listener' => 'מאזין',                         // LISTENER
        'create' => 'יצירת תיאטרון',                 // Create Theatre
        'name_placeholder' => 'שם התיאטרון',           // Theatre name
        'add' => 'הוספת מאזין',                        // Add listener
        'settings' => 'הגדרות התיאטרון',           // Theatre settings
        'leave' => 'עזיבת התיאטרון',                // Leave theatre
        'leave_confirm' => 'לעזוב את התיאטרון הזה?', // Leave this theatre?
        'rename_prompt' => 'שם חדש לתיאטרון',       // New theatre name
        'broadcast_placeholder' => 'שידור לתיאטרון…', // Broadcast to the theatre...
        'send' => 'שידור',                                  // Transmit
        'no_friends_to_add' => 'אין חברים להוספה', // No friends to add
        'promote' => 'הפיכה לדובר',                    // Make SPEAKER
        'demote' => 'הפיכה למאזין',                   // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'ביטול',  // Cancel
        'yes' => 'כן',           // Yes
        'no' => 'לא',            // No
        'confirm' => 'אישור', // Confirm
    ],

    'call' => [
        'start' => 'שיחה',                                   // Call
        'incoming' => 'שיחה מ־{name}',                     // Call from {name}
        'accept' => 'מענה',                                  // Accept
        'decline' => 'דחייה',                               // Decline
        'calling' => 'מתקשר…',                            // Calling…
        'connecting' => 'מתחבר…',                         // Connecting…
        'failed' => 'ההתחברות נכשלה (ממסר)',    // Could not connect (relay)
        'in_call' => 'בשיחה',                               // In call
        'mute' => 'השתקה',                                  // Mute
        'unmute' => 'ביטול השתקה',                     // Unmute
        'hang_up' => 'ניתוק',                               // Hang up
        'unavailable' => 'המשתמש במצב לא מקוון', // User is offline
        'busy' => 'המשתמש עסוק',                       // User is busy
        'declined' => 'השיחה נדחתה',                   // Call declined
        'ended' => 'השיחה הסתיימה',                  // Call ended
        'mic_denied' => 'הגישה למיקרופון נדחתה', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'פעיל עכשיו', // Now active
        'elapsed' => 'חלפו',            // elapsed
        'left' => 'נותרו',             // left
        'paused' => 'מושהה.',          // Paused.
        'playing' => 'משחק',            // Playing
        'streaming' => 'משדר',          // Streaming
        'listening' => 'מאזין',        // Listening
        'watching' => 'צופה',           // Watching
        'competing' => 'מתחרה',        // Competing
    ],

    'chat' => [
        'input_placeholder' => 'כתבו הודעה…',         // Type a message...
        'filelarge' => 'קובץ מס׳ {n} גדול מדי, אי אפשר להעלות אותו.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'מעלה {percentage} %',  // Up-loading {percentage} %
        'listener_notice' => 'אתם מאזינים',            // You are a LISTENER
        'edited' => '(נערך)',                                // (edited)
        'untrusten_media' => 'מדיה לא מהימנה — לחצו לטעינה', // Untrusted media — click to load
        'untrusten_media_confirm' => 'בטוחים? הפעולה טוענת את המדיה ישירות מהמקור שלה, והוא יראה את כתובת ה־IP שלכם.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'מקליד…',                          // is typing...
        'are_typing' => 'מקלידים…',                     // are typing...
        'replying_to' => 'משיב ל־',                        // Replying to
        'like' => 'לייק',                                    // Like
        'paste_too_long_as_file' => 'ההודעה הזאת ארוכה מדי לצ׳אט. לשלוח אותה כקובץ במקום?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'תגובה',                                 // Reply
        'edit' => 'עריכה',                                  // Edit
        'delete' => 'מחיקה',                                // Delete
        'copy' => 'העתקה',                                  // Copy
        'copy_raw' => 'העתקת המקור',                   // Copy raw
        'copied' => 'הועתק',                                // Copied
        'morethan10items' => 'אי אפשר להטמיע יותר מ־10 קבצים!', // You can not embed more than 10 files !
        'overlayupload' => 'הפסיקו לגרור כדי להטמיע את הקובץ', // Stop dragging to embed the file
        'unknown' => 'לא ידוע',                            // Unknown
        'said' => 'אמר',                                      // said
        'reply_said' => '{actor} אמר:',                       // {actor} said :
        'reply_media' => '{kind} ששלח {actor} ב־{time}',   // {actor}’s sent {kind} at {time}
        'reply_attachment' => 'קובץ מצורף ששלח {actor} ב־{time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'ההודעה המקורית אינה זמינה', // Original message unavailable
        'reply_far' => 'רחוק מדי למעלה בצ׳אט. לחצו כדי להגיע לשם.', // Too far up the chat. Click to go there.
        'media_image' => 'תמונה',                           // image
        'media_video' => 'סרטון',                           // video
        'media_audio' => 'אודיו',                           // audio
        'media_file' => 'קובץ',                              // file
        'download' => 'לחצו להורדת הקובץ שהועלה', // Click to Down-load the Up-loaded file
        'create_group' => 'יצירת קבוצה',               // Create Group
        'add_to_group' => 'הוספה לקבוצה',             // Add to Group
        'likes' => 'לייקים',                               // Likes
        'new_message_scroll_klick' => '{n} הודעות חדשות', // {n} new message( s )
        'liked_attachment' => 'קובץ מצורף @ {time}',    // Attachment @ {time}
        'no_likes' => 'אין הודעות שסומנו בלייק', // No liked messages
        'group_settings' => 'הגדרות הקבוצה',         // Group Settings
        'leave_group' => 'עזיבת הקבוצה',              // Leave Group
        'leave_confirm' => 'לעזוב את הקבוצה הזאת?', // Leave this group?
        'go_to_latest' => 'לחצו לחזרה לצ׳אט האחרון', // Click to go back to Latest chat
        'empty' => 'אין הודעות עדיין. כתבו משהו כדי להתחיל.', // No messages yet. Say something to get started.
        'load_failed' => 'לא ניתן לטעון הודעות. לחצו לניסיון חוזר.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'מברקים',                         // Telegrams
        'received_title' => 'מברקים שהתקבלו', // Received Telegrams
        'empty' => 'אין מברקים',                  // No telegrams
        'priority_routine' => 'רגיל',                  // ROUTINE
        'priority_priority' => 'דחוף',                 // PRIORITY
        'priority_emergency' => 'חירום',              // EMERGENCY
    ],

    'profile' => [
        'details' => 'פרטי הפרופיל',                  // Profile details
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
        'message_button' => 'הודעה',                        // Message
        'block_button' => 'חסימה',                          // Block
        'unblock_button' => 'ביטול חסימה',             // Unblock
        'block_confirm' => 'לחסום את המשתמש הזה?', // Block this user?
        'shared_friends' => 'חברים משותפים',         // Shared Friends
        'shared_servers' => 'שרתים משותפים',         // Shared Servers
        'shared_theatres' => 'תיאטראות משותפים',  // Shared Theatres
        'no_shared_friends' => 'אין חברים משותפים', // No shared friends
        'no_shared_servers' => 'אין שרתים משותפים', // No shared servers
        'no_shared_theatres' => 'אין תיאטראות משותפים', // No shared theatres
    ],

    'settings' => [
        'title' => 'הגדרות',                               // Settings
        'account_section' => 'חשבון ואבטחה',          // Account & Security
        'session_section' => 'הפעלה',                       // Session
        'images_section' => 'תמונות',                      // Images
        'profile_section' => 'פרופיל',                     // Profile
        'description' => 'תיאור',                           // Description
        'description_placeholder' => 'כתבו משהו על עצמכם…', // Write something about yourself…
        'description_preview' => 'תצוגה מקדימה',      // Preview
        'preview_profile' => 'פרופיל',                     // Profile
        'preview_friend' => 'רשימת חברים',             // Friend list
        'preview_speaker' => 'דובר בתיאטרון',        // Theatre speaker
        'preview_chat' => 'הודעת צ׳אט',                 // Chat message
        'language' => 'שפה',                                  // Language
        'lang_auto' => 'אוטומטי',                         // Automatic
        'dm' => 'מצב כהה',                                 // Dark Mode
        'appearance' => 'מראה',                              // Appearance
        'rich_presence' => 'לאפשר נוכחות עשירה?', // Allow rich presence?
        'close' => 'סגירה',                                 // Close
        'your_pin' => 'ה־PIN שלכם',                        // Your PIN
        'your_pin_warn' => 'ה־PIN שלכם הוא מזהה פרטי. שתפו אותו רק עם גורמים מהימנים.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'שם תצוגה',                     // Display Name
        'change_name' => 'שינוי שם',                      // Change Name
        'localsettings' => 'הגדרות אזוריות',        // Locale
        'change_password' => 'שינוי סיסמה',            // Change Password
        'current_password' => 'סיסמה נוכחית',         // Current Password
        'new_password' => 'סיסמה חדשה',                 // New Password
        'confirm_password' => 'אימות סיסמה',           // Confirm Password
        'avatar' => 'אווטאר',                              // Avatar
        'ambiance' => 'תמונת אווירה',                 // Ambiance Image
        'upload_avatar' => 'העלאת אווטאר',            // Upload Avatar
        'upload_ambiance' => 'העלאת אווירה',          // Upload Ambiance
        'max_size' => 'מקסימום 500 KB',                   // Max 500 KB
        'logout' => 'התנתקות',                            // Logout
        'logout_desc' => 'סיום ההפעלה הנוכחית שלכם', // End your current session
        'save' => 'שמירה',                                  // Save
        'saved' => 'נשמר',                                   // Saved
        'error_name_taken' => 'השם כבר תפוס',          // Name already taken
        'error_wrong_password' => 'סיסמה שגויה',       // Wrong password
        'error_file_too_large' => 'הקובץ גדול מדי (מקסימום 500 KB)', // File too large (max 500 KB)
        'error_invalid_file' => 'סוג קובץ לא תקין', // Invalid file type
        'notifications' => 'התראות',                       // Notifications
        'global_mute' => 'השתקה כללית',                // Global Mute
        'notification_types' => 'סוגי התראות',         // Notification Types
        'friend_requests' => 'בקשות חברות',            // Friend Requests
        'muting_settings' => 'הגדרות השתקה',          // Muting Settings
        'friend_mute' => 'השתקת התראות בקשות חברות', // Friend request notification mute
        'friend_change_mute' => 'השתקת התראות שינויי חברים', // Friend change notification mute
        'message_mute' => 'השתקת התראות הודעות', // Message notification mute
        'call_mute' => 'השתקת התראות שיחות',     // Call notification mute
        'friend_changes' => 'חבר אושר או הוסר',     // Friend accepted or removed
        'direct_messages' => 'הודעות ישירות',        // Direct Messages
        'server_mentions' => 'אזכורים',                   // Mentions
        'mention_mute_prompt' => 'השתקת התראות אזכורים', // Mention notification mute
        'account_settings' => 'הגדרות חשבון',         // ACCOUNT SETTINGS
        'current_email' => 'דואר אלקטרוני נוכחי', // Current Electronic Mail
        'friend_request_filtering' => 'סינון בקשות חברות', // Friend Request Filtering
        'filter_everyone' => 'כולם',                         // Everyone
        'filter_fof' => 'רק חברים של חברים',       // Only friends of friends
        'dm_permissions' => 'הרשאות הודעות ישירות', // Direct Message Permissions
        'dm_server_members' => 'לאפשר הודעות ישירות מחברי שרת', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'לאפשר הודעות ישירות מדוברי תיאטרון', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'לאפשר הודעות ישירות ממאזיני תיאטרון', // Allow DMs from Theatre listeners
        'dm_groups' => 'לאפשר הודעות ישירות מקבוצות', // Allow DMs from groups
        'dm_strangers' => 'לאפשר הודעות ישירות מזרים', // Allow DMs from strangers
        'can_be_callen_by' => 'הרשאות שיחה קולית', // Voice Chat Permissions
        'vc_server_members' => 'לאפשר שיחות קוליות מחברי שרת', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'לאפשר שיחות קוליות מדוברי תיאטרון', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'לאפשר שיחות קוליות ממאזיני תיאטרון', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'לאפשר שיחות קוליות מקבוצות', // Allow Voice Chats from groups
        'vc_strangers' => 'לאפשר שיחות קוליות מזרים', // Allow Voice Chats from strangers
        'chat_settings' => 'הגדרות צ׳אט',              // Chat Settings
        'split_text_prompt' => 'פיצול הודעות ארוכות', // Split long messages
        'setting_apperance' => 'הצגת כל ההגדרות בדף אחד', // Show all settings on one page
        'junicode_show_prompt' => 'שימוש בגרסת האתר עם סריפים', // Use the serif version of the website
        'maru_marks' => 'שימוש בגרסאות מארו (עיגול)', // Use the maru versions
        'off_set' => 'הפרש זמן',                          // Time offset
        'day_time_saving' => 'שעון קיץ',                  // Daylight saving time
        'session_management' => 'ניהול הפעלות',       // Session Management
        'log_all_out' => 'התנתקות מהכול [ סיום כל ההפעלות ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'מכשירים',                   // Devices
        'this_device' => 'המכשיר הזה',                  // This device
        'log_out_device' => 'התנתקות',                    // Log out
        'devices_empty' => 'אין מכשירים פעילים', // No active devices
        'view_people' => 'הצגת חברים',                  // Show members
        'delete_account' => 'מחיקת חשבון',             // Delete account
        'delete_account_confirm' => 'להפוך את החשבון הזה ליתום? שמכם, הדואר והתמונות שלכם יימחקו ולא ניתן יהיה לשחזרם. ההודעות שלכם יישארו, מיוחסות ליתום אלמוני. בטוחים?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'קבוצות',                   // Groups
        'count' => 'קבוצות ({count})',         // Groups ({count})
        'empty' => 'אין קבוצות עדיין', // No groups yet
        'group_of' => 'קבוצה של: {names}',    // Group of : {names}
        'create' => 'הזינו שם לקבוצה',  // Enter a name for the group
    ],

    'status' => [
        'online' => 'מקוון',                // Online
        'away' => 'לא נמצא',               // Away
        'dnd' => 'נא לא להפריע',       // Do Not Disturb
        'offline' => 'לא מקוון',          // Offline
        'set_status' => 'הגדרת סטטוס', // Set Status
    ],

    'notifications' => [
        'title' => 'התראות',                               // Notifications
        'empty' => 'אין התראות',                        // No notifications
        'friend_request' => '{name} שלח לכם בקשת חברות', // {name} sent you a friend request
        'friend_accept' => 'אתם עכשיו חברים של {name}', // You are now friends with {name}
        'friend_remove' => '{name} הסיר אתכם מרשימת החברים', // {name} removed you as a friend
        'mention' => '{name} הזכיר אתכם',               // {name} mentioned you
        'server_invite' => '{name} הזמין אתכם אל {server}', // {name} invited you to {server}
        'mark_read' => 'סימון כנקרא',                  // Mark as read
        'clear_all' => 'ניקוי הכול',                    // Clear all
        'as_of' => 'נכון ל־{date}',                        // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',                        // username#1234
        'button' => 'הוספה',                                // Add
        'success' => 'בקשת החברות נשלחה',         // Friend request sent
        'error_not_found' => 'המשתמש לא נמצא',       // User not found
        'error_invalid_format' => 'השתמשו בתבנית: username#1234', // Use format: username#1234
        'error_self' => 'אי אפשר להוסיף את עצמכם', // Cannot add yourself
        'error_already_friends' => 'כבר חברים',          // Already friends
    ],

    'hover_profile' => [
        'settings' => 'הגדרות',                // Settings
        'set_status' => 'הגדרת סטטוס',     // Set Status
        'view_profile' => 'הצגת הפרופיל', // View Profile
    ],

    'recent' => [
        'title' => 'שיחות אחרונות',    // Recent Conversations
        'empty' => 'אין שיחות עדיין', // No conversations yet
    ],

    'people' => [
        'title' => 'אנשים ושרתים', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'פתיחת הפרופיל',           // Open profile
        'read_all' => 'סימון הכול כנקרא',          // Read all
        'silence' => 'השתקה',                               // Silence
        'unsilence' => 'ביטול השתקה',                  // Unsilence
        'close' => 'סגירה',                                 // Close
        'remove_friend' => 'הסרת חבר',                    // Remove Friend
        'leave_group' => 'עזיבת הקבוצה',              // Leave group
        'remove_from_group' => 'הסרה מהקבוצה',        // Remove from group
        'set_owner' => 'הפיכה לבעלים',                // Make owner
        'set_owner_confirm' => 'להפוך את האדם הזה לבעלים? תעבירו אליו את זכויות הבעלים שלכם.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'להסיר את האדם הזה מהקבוצה?', // Remove this person from the group?
        'block_confirm' => 'לחסום את המשתמש הזה? לא תראו זה את זה יותר.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} הוסיף את {target}',      // {actor} added {target}
        'member_remove' => '{actor} הסיר את {target}',     // {actor} removed {target}
        'member_leave' => '{actor} עזב',                      // {actor} left
        'member_join' => '{actor} הצטרף',                   // {actor} joined
        'call' => '{actor} התחיל שיחה שנמשכה {duration}', // {actor} started a call that lasted {duration}
        'call_missed' => 'פספסתם שיחה מ־{actor}',    // You missed a call from {actor}
        'group_rename' => '{actor} קרא לקבוצה « {name} »', // {actor} named the group « {name} »
        'group_icon' => '{actor} שינה את סמל הקבוצה', // {actor} changed the group icon
        'group_create' => '{actor} יצר את הקבוצה',    // {actor} created the group
        'owner_change' => '{target} הוא עכשיו הבעלים', // {target} is now the owner
        'friend' => '{actor} ו{target} הם עכשיו חברים', // {actor} and {target} are now friends
        'like' => '{actor} סימן {n} הודעות בלייק, {x} פעמים בסך הכול', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'חיפוש אימוג׳ים…',      // SEARCH EMOJIS...
        'not_found' => 'לא נמצאו אימוג׳ים', // NO EMOJIS FOUND
        'recents' => 'אימוג׳ים אחרונים',    // RECENT EMOJIS
        'smileys' => 'סמיילים ורגשות',        // SMILEYS AND EMOTION
        'people' => 'אנשים וגוף',                 // PEOPLE AND BODY
        'animals' => 'בעלי חיים וטבע',         // ANIMALS AND NATURE
        'food' => 'אוכל ושתייה',                 // FOOD AND DRINK
        'activities' => 'פעילויות',                // ACTIVITIES
        'travel' => 'טיולים ומקומות',         // TRAVEL & PLACES
        'objects' => 'חפצים',                         // OBJECTS
        'symbols' => 'סמלים',                         // SYMBOLS
        'flags' => 'דגלים',                           // FLAGS
        'custom' => 'מותאמים אישית',           // CUSTOM
        'user' => 'האימוג׳ים שלכם',           // YOUR EMOJIS
        'tabs_emojis' => 'אימוג׳ים',               // EMOJIS
        'tabs_gifs' => 'GIF',                              // GIFS
    ],

    'gif' => [
        'tab_history' => 'היסטוריה',            // HISTORY
        'tab_liked' => 'אהובים',                  // LIKED
        'tab_tenor' => 'GIF',                           // GIFS
        'search' => 'חיפוש GIF…',                // SEARCH GIFS...
        'loading' => 'טוען…',                     // Loading...
        'error' => 'לא ניתן לטעון GIF',      // Could not load GIFs
        'empty' => 'אין כאן כלום עדיין', // Nothing here yet
        'powered_by' => 'מופעל על ידי KLIPY', // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'התאמת התמונה',                    // Adjust image
        'apply' => 'החלה',                                   // Apply
        'cancel' => 'ביטול',                                // Cancel
        'zoom' => 'זום',                                      // Zoom
        'trim' => 'חיתוך',                                  // Trim
        'processing' => 'מעבד…',                           // Processing…
        'drag_hint' => 'גררו למיקום מחדש · גללו לזום', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'סגירה',                    // Close
        'download' => 'הורדה',                 // Download
        'open_original' => 'פתיחת המקור', // Open original
    ],

    'image' => [
        'change' => 'שינוי',     // Change
        'view' => 'הצגה',         // View
        'revert' => 'שחזור',     // Revert
        'uploading' => 'מעלה…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'אין הרשאה',            // Unauthorized
        'invalid_pin' => 'PIN לא תקין',             // Invalid PIN
        'user_not_found' => 'המשתמש לא נמצא', // User not found
        'talk_not_found' => 'השיחה לא נמצאה', // Talk not found
        'invalid_talk' => 'שיחה לא תקינה',     // Invalid talk
        'access_denied' => 'הגישה נדחתה',       // Access denied
    ],
];
