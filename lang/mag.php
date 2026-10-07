<?php

$S = [
    'app' => [
        'name' => 'Prono', // Prono
    ],

    'nav' => [
        'home' => 'Kezdőlap',               // Home
        'dms' => 'Privát üzenetek',        // Direct Messages
        'groups' => 'Csoportok',             // Groups
        'servers' => 'Szerverek',            // Servers
        'theatres' => 'Színházak',         // Theatres
        'telegram' => 'Táviratok',          // Telegrams
        'settings' => 'Beállítások',      // Settings
        'notifications' => 'Értesítések', // Notifications
    ],

    'auth' => [
        'login_title' => 'BEJELENTKEZÉS',                       // LOG-IN
        'enlist_title' => 'REGISZTRÁCIÓ',                      // EN-LIST
        'email_placeholder' => 'E-mail-cím',                    // Electronic Mail
        'password_placeholder' => 'Jelszó',                     // Password
        'password_confirm_placeholder' => 'Jelszó megerősítése', // Confirm Password
        'name_placeholder' => 'Megjelenített név',             // Display Name
        'login_button' => 'Belépés',                           // Enter
        'enlist_button' => 'Fiók létrehozása',                // Create Account
        'link_to_enlist' => 'Fiók létrehozása',               // Create account
        'link_to_login' => 'Már van fiókom',                   // Already have account
        'error_fill_fields' => 'Töltsd ki az összes mezőt',   // Fill all fields
        'error_invalid_credentials' => 'Érvénytelen belépési adatok', // Invalid credentials
        'error_too_many' => 'Túl sok próbálkozás. Várj néhány percet, és próbáld újra.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'A névnek 2–32 karakter hosszúnak kell lennie', // Name must be 2-32 characters
        'error_invalid_email' => 'Érvénytelen e-mail-formátum', // Invalid email format
        'error_password_length' => 'A jelszónak legalább 8 karakter hosszúnak kell lennie', // Password must be at least 8 characters
        'error_password_mismatch' => 'A jelszavak nem egyeznek', // Passwords do not match
        'error_email_exists' => 'Ez az e-mail-cím már regisztrálva van', // Email already registered
        'error_email_banned' => 'Ez az e-mail-cím tiltva van.', // This mail is banned.
        'link_to_forgot' => 'Elfelejtettem a jelszavam',         // I forgot my password
        'download_client' => 'A Prono kliens letöltése Windowsra', // Download Prono client for Windows
        'open_in_client' => 'Megnyitás a kliensben',            // Open in client
        'forgot_title' => 'VISSZAÁLLÍTÁS',                    // RE-SET
        'forgot_instruction' => 'Add meg az e-mail-címed. Ha regisztrálva van, egy visszaállító hivatkozás indul el hozzá.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Visszaállító hivatkozás küldése', // Send resetting link
        'forgot_sent' => 'Ha az az e-mail-cím regisztrálva van, a visszaállító hivatkozás úton van. Nézd meg a postaládád.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'A levél most nem tudott elindulni. Próbáld újra később.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Vissza a bejelentkezéshez',         // Back to log-in
        'reset_title' => 'ÚJ JELSZÓ',                          // NEW PASS-WORD
        'reset_button' => 'Mentés és bejelentkezés',          // Save & Log-in
        'reset_invalid' => 'Ez a visszaállító hivatkozás érvénytelen vagy lejárt.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — jelszó-visszaállítás', // Prono — pass-word reset
        'reset_mail_intro' => 'Valaki kérte ennek a Prono-fióknak a jelszó-visszaállítását.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Új jelszó beállítása',         // Set a new pass-word
        'reset_mail_ignore' => 'Ha nem te voltál, ne törődj vele. Ne válaszolj erre a levélre.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'E-mail-cím vagy P.I.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Még nem léptél be először. Nyisd meg a neked küldött levelet.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Ez a fiók zárolva van.',    // This account is locked.
        'enlist_check_mail' => 'A fiók elkészült. Egy levél indult hozzád, benne a P.I.-№-ddel és egy egyszer használatos belépési kóddal. Nyisd meg, hogy először belépj.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'ELSŐ BELÉPÉS',                     // FIRST ENTRY
        'verify_instruction' => 'Pontosan add meg a P.I.-№-det és a levélben szereplő négybetűs kódot.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-№',                  // P.I.-№
        'verify_code_placeholder' => 'Négybetűs kód',         // Four-letter code
        'verify_button' => 'Belépés',                          // Enter
        'verify_invalid_link' => 'Ez a belépési hivatkozás érvénytelen vagy lejárt.', // This entry link is void or has expired.
        'verify_burnt' => 'Kitiltva.',                           // Banned.
        'verify_mail_subject' => 'Prono — a P.I.-№-d és a belépési kódod', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Üdv! Itt vannak az új Prono-fiókod kulcsai.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'A P.I.-№-d',               // Your P.I.-№
        'verify_mail_code_label' => 'Az egyszer használatos belépési kódod', // Your one-time entry code
        'verify_mail_cta' => 'Első belépés',                  // Enter for the first time
        'verify_mail_warn' => 'Mindkettőt pontosan add meg a belépési oldalon. Egyetlen rossz vonás elégeti a fiókot, és zárolja az e-mail-címet. Ne válaszolj erre a levélre.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Üdv, {name}!',                           // Welcome, {name}
        'subtitle' => 'Válassz egy beszélgetést az oldalsávból, vagy kezdj egy újat.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Barátok',                                   // Friends
        'count' => 'Barátok ({count})',                         // Friends ({count})
        'empty' => 'Még nincsenek barátok',                    // No friends yet
        'add_button' => 'Barát hozzáadása',                   // Add Friend
        'status_friends' => 'Barátok',                          // Friends
        'status_pending' => 'Függőben',                        // Pending
        'status_declined' => 'Elutasítva',                      // Declined
        'status_blocked' => 'Letiltva',                          // Blocked
        'request_pending' => 'A kérés függőben',             // Request Pending
        'accept' => 'Elfogadás',                                // Accept
        'decline' => 'Elutasítás',                             // Decline
        'retract' => 'Visszavonás',                             // Retract
        'retract_confirm' => 'Visszavonod ezt a barátkérést? Vissza lesz vonva.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Privát üzenetek',                          // Direct Messages
        'empty' => 'Adj hozzá barátokat az üzenetváltáshoz', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Szerverek',                                  // Servers
        'count' => 'Szerverek ({count})',                        // Servers ({count})
        'empty' => 'Csatlakozz egy szerverhez, vagy hozz létre egyet', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Színházak',                                // Theatres
        'count' => 'Színházak ({count})',                      // Theatres ({count})
        'empty' => 'Nincsenek színházak',                      // No theatres
        'role_speaker' => 'SZÓNOK',                             // SPEAKER
        'role_listener' => 'HALLGATÓ',                          // LISTENER
        'create' => 'Színház létrehozása',                   // Create Theatre
        'name_placeholder' => 'A színház neve',                // Theatre name
        'add' => 'Hallgató hozzáadása',                       // Add listener
        'settings' => 'Színház beállításai',                // Theatre settings
        'leave' => 'Kilépés a színházból',                  // Leave theatre
        'leave_confirm' => 'Kilépsz ebből a színházból?',   // Leave this theatre?
        'rename_prompt' => 'A színház új neve',               // New theatre name
        'broadcast_placeholder' => 'Közvetítés a színházba…', // Broadcast to the theatre...
        'send' => 'Adás',                                       // Transmit
        'no_friends_to_add' => 'Nincs hozzáadható barát',     // No friends to add
        'promote' => 'SZÓNOKKÁ tétel',                        // Make SPEAKER
        'demote' => 'HALLGATÓVÁ tétel',                       // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Mégse',          // Cancel
        'yes' => 'Igen',               // Yes
        'no' => 'Nem',                 // No
        'confirm' => 'Megerősítés', // Confirm
    ],

    'call' => [
        'start' => 'Hívás',                                    // Call
        'incoming' => 'Hívás tőle: {name}',                   // Call from {name}
        'accept' => 'Felvétel',                                 // Accept
        'decline' => 'Elutasítás',                             // Decline
        'calling' => 'Hívás…',                               // Calling…
        'connecting' => 'Csatlakozás…',                       // Connecting…
        'failed' => 'Nem sikerült csatlakozni (továbbítás)', // Could not connect (relay)
        'in_call' => 'Hívásban',                               // In call
        'mute' => 'Némítás',                                  // Mute
        'unmute' => 'Némítás feloldása',                     // Unmute
        'hang_up' => 'Letevés',                                 // Hang up
        'unavailable' => 'A felhasználó offline',              // User is offline
        'busy' => 'A felhasználó foglalt',                     // User is busy
        'declined' => 'A hívás elutasítva',                   // Call declined
        'ended' => 'A hívás véget ért',                      // Call ended
        'mic_denied' => 'A mikrofonhoz való hozzáférés megtagadva', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Most aktív',    // Now active
        'elapsed' => 'eltelt',         // elapsed
        'left' => 'maradt',            // left
        'paused' => 'Szüneteltetve.', // Paused.
        'playing' => 'Játszik',       // Playing
        'streaming' => 'Streamel',     // Streaming
        'listening' => 'Hallgat',      // Listening
        'watching' => 'Néz',          // Watching
        'competing' => 'Versenyez',    // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Írj egy üzenetet…',          // Type a message...
        'filelarge' => 'A(z) {n}. fájl túl nagy, nem tölthető fel.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Feltöltés {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'Te HALLGATÓ vagy',                // You are a LISTENER
        'edited' => '(szerkesztve)',                             // (edited)
        'untrusten_media' => 'Nem megbízható média — kattints a betöltéshez', // Untrusted media — click to load
        'untrusten_media_confirm' => 'Biztos vagy benne? Ez közvetlenül a forrásából tölti be a médiát, és a forrás látni fogja az IP-címedet.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'ír…',                                 // is typing...
        'are_typing' => 'írnak…',                             // are typing...
        'replying_to' => 'Válasz neki:',                        // Replying to
        'like' => 'Kedvelés',                                   // Like
        'paste_too_long_as_file' => 'Ez az üzenet túl hosszú a csevegéshez. Fájlként küldöd el helyette?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Válasz',                                    // Reply
        'edit' => 'Szerkesztés',                                // Edit
        'delete' => 'Törlés',                                  // Delete
        'copy' => 'Másolás',                                   // Copy
        'copy_raw' => 'Nyers másolása',                        // Copy raw
        'copied' => 'Másolva',                                  // Copied
        'morethan10items' => 'Legfeljebb 10 fájlt ágyazhatsz be!', // You can not embed more than 10 files !
        'overlayupload' => 'Hagyd abba a húzást a fájl beágyazásához', // Stop dragging to embed the file
        'unknown' => 'Ismeretlen',                               // Unknown
        'said' => 'azt mondta',                                  // said
        'reply_said' => '{actor} azt mondta:',                   // {actor} said :
        'reply_media' => '{actor} által {time} időpontban küldött {kind}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => '{actor} által {time} időpontban küldött melléklet', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Az eredeti üzenet nem érhető el', // Original message unavailable
        'reply_far' => 'Túl messze van a csevegésben. Kattints, hogy odamenj.', // Too far up the chat. Click to go there.
        'media_image' => 'kép',                                 // image
        'media_video' => 'videó',                               // video
        'media_audio' => 'hang',                                 // audio
        'media_file' => 'fájl',                                 // file
        'download' => 'Kattints a feltöltött fájl letöltéséhez', // Click to Down-load the Up-loaded file
        'create_group' => 'Csoport létrehozása',               // Create Group
        'add_to_group' => 'Hozzáadás csoporthoz',              // Add to Group
        'likes' => 'Kedvelések',                                // Likes
        'new_message_scroll_klick' => '{n} új üzenet',         // {n} new message( s )
        'liked_attachment' => 'Melléklet @ {time}',             // Attachment @ {time}
        'no_likes' => 'Nincsenek kedvelt üzenetek',             // No liked messages
        'group_settings' => 'Csoport beállításai',            // Group Settings
        'leave_group' => 'Kilépés a csoportból',              // Leave Group
        'leave_confirm' => 'Kilépsz ebből a csoportból?',     // Leave this group?
        'go_to_latest' => 'Kattints a legutóbbi csevegéshez való visszatéréshez', // Click to go back to Latest chat
        'empty' => 'Még nincsenek üzenetek. Mondj valamit a kezdéshez.', // No messages yet. Say something to get started.
        'load_failed' => 'Nem sikerült betölteni az üzeneteket. Kattints az újrapróbáláshoz.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Táviratok',                 // Telegrams
        'received_title' => 'Kapott táviratok', // Received Telegrams
        'empty' => 'Nincsenek táviratok',       // No telegrams
        'priority_routine' => 'RENDES',          // ROUTINE
        'priority_priority' => 'SÜRGŐS',       // PRIORITY
        'priority_emergency' => 'VÉSZHELYZET',  // EMERGENCY
    ],

    'profile' => [
        'details' => 'Profil részletei',                        // Profile details
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
        'message_button' => 'Üzenet',                           // Message
        'block_button' => 'Letiltás',                           // Block
        'unblock_button' => 'Tiltás feloldása',                // Unblock
        'block_confirm' => 'Letiltod ezt a felhasználót?',     // Block this user?
        'shared_friends' => 'Közös barátok',                  // Shared Friends
        'shared_servers' => 'Közös szerverek',                 // Shared Servers
        'shared_theatres' => 'Közös színházak',              // Shared Theatres
        'no_shared_friends' => 'Nincsenek közös barátok',     // No shared friends
        'no_shared_servers' => 'Nincsenek közös szerverek',    // No shared servers
        'no_shared_theatres' => 'Nincsenek közös színházak', // No shared theatres
    ],

    'settings' => [
        'title' => 'Beállítások',                             // Settings
        'account_section' => 'Fiók és biztonság',             // Account & Security
        'session_section' => 'Munkamenet',                       // Session
        'images_section' => 'Képek',                            // Images
        'profile_section' => 'Profil',                           // Profile
        'description' => 'Leírás',                             // Description
        'description_placeholder' => 'Írj valamit magadról…', // Write something about yourself…
        'description_preview' => 'Előnézet',                   // Preview
        'preview_profile' => 'Profil',                           // Profile
        'preview_friend' => 'Barátlista',                       // Friend list
        'preview_speaker' => 'Színházi szónok',               // Theatre speaker
        'preview_chat' => 'Csevegőüzenet',                     // Chat message
        'language' => 'Nyelv',                                   // Language
        'lang_auto' => 'Automatikus',                            // Automatic
        'dm' => 'Sötét mód',                                  // Dark Mode
        'appearance' => 'Megjelenés',                           // Appearance
        'rich_presence' => 'Engedélyezed a részletes jelenlétet?', // Allow rich presence?
        'close' => 'Bezárás',                                  // Close
        'your_pin' => 'A PIN-ed',                                // Your PIN
        'your_pin_warn' => 'A PIN-ed személyes azonosító. Csak megbízható forrásokkal oszd meg.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Megjelenített név',                 // Display Name
        'change_name' => 'Név módosítása',                   // Change Name
        'localsettings' => 'Területi beállítások',           // Locale
        'change_password' => 'Jelszó módosítása',            // Change Password
        'current_password' => 'Jelenlegi jelszó',               // Current Password
        'new_password' => 'Új jelszó',                         // New Password
        'confirm_password' => 'Jelszó megerősítése',         // Confirm Password
        'avatar' => 'Profilkép',                                // Avatar
        'ambiance' => 'Hangulatkép',                            // Ambiance Image
        'upload_avatar' => 'Profilkép feltöltése',            // Upload Avatar
        'upload_ambiance' => 'Hangulatkép feltöltése',        // Upload Ambiance
        'max_size' => 'Legfeljebb 500 KB',                       // Max 500 KB
        'logout' => 'Kijelentkezés',                            // Logout
        'logout_desc' => 'A jelenlegi munkamenet befejezése',   // End your current session
        'save' => 'Mentés',                                     // Save
        'saved' => 'Mentve',                                     // Saved
        'error_name_taken' => 'A név már foglalt',             // Name already taken
        'error_wrong_password' => 'Hibás jelszó',              // Wrong password
        'error_file_too_large' => 'A fájl túl nagy (legfeljebb 500 KB)', // File too large (max 500 KB)
        'error_invalid_file' => 'Érvénytelen fájltípus',     // Invalid file type
        'notifications' => 'Értesítések',                     // Notifications
        'global_mute' => 'Általános némítás',               // Global Mute
        'notification_types' => 'Értesítéstípusok',          // Notification Types
        'friend_requests' => 'Barátkérések',                  // Friend Requests
        'muting_settings' => 'Némítási beállítások',       // Muting Settings
        'friend_mute' => 'Barátkérés-értesítések némítása', // Friend request notification mute
        'friend_change_mute' => 'Baráti változások értesítéseinek némítása', // Friend change notification mute
        'message_mute' => 'Üzenetértesítések némítása',   // Message notification mute
        'call_mute' => 'Hívásértesítések némítása',      // Call notification mute
        'friend_changes' => 'Barát elfogadva vagy eltávolítva', // Friend accepted or removed
        'direct_messages' => 'Privát üzenetek',                // Direct Messages
        'server_mentions' => 'Említések',                      // Mentions
        'mention_mute_prompt' => 'Említésértesítések némítása', // Mention notification mute
        'account_settings' => 'FIÓKBEÁLLÍTÁSOK',             // ACCOUNT SETTINGS
        'current_email' => 'Jelenlegi e-mail-cím',              // Current Electronic Mail
        'friend_request_filtering' => 'Barátkérések szűrése', // Friend Request Filtering
        'filter_everyone' => 'Mindenki',                         // Everyone
        'filter_fof' => 'Csak barátok barátai',                // Only friends of friends
        'dm_permissions' => 'Privát üzenetek engedélyei',     // Direct Message Permissions
        'dm_server_members' => 'Privát üzenetek engedélyezése szervertagoktól', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Privát üzenetek engedélyezése színházi szónokoktól', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Privát üzenetek engedélyezése színházi hallgatóktól', // Allow DMs from Theatre listeners
        'dm_groups' => 'Privát üzenetek engedélyezése csoportoktól', // Allow DMs from groups
        'dm_strangers' => 'Privát üzenetek engedélyezése idegenektől', // Allow DMs from strangers
        'can_be_callen_by' => 'Hangcsevegés engedélyei',       // Voice Chat Permissions
        'vc_server_members' => 'Hangcsevegés engedélyezése szervertagoktól', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Hangcsevegés engedélyezése színházi szónokoktól', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Hangcsevegés engedélyezése színházi hallgatóktól', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Hangcsevegés engedélyezése csoportoktól', // Allow Voice Chats from groups
        'vc_strangers' => 'Hangcsevegés engedélyezése idegenektől', // Allow Voice Chats from strangers
        'chat_settings' => 'Csevegés beállításai',           // Chat Settings
        'split_text_prompt' => 'Hosszú üzenetek felosztása',  // Split long messages
        'setting_apperance' => 'Az összes beállítás megjelenítése egy oldalon', // Show all settings on one page
        'junicode_show_prompt' => 'A weboldal talpas változatának használata', // Use the serif version of the website
        'maru_marks' => 'A maru (karika) változatok használata', // Use the maru versions
        'off_set' => 'Időeltolódás',                          // Time offset
        'day_time_saving' => 'Nyári időszámítás',           // Daylight saving time
        'session_management' => 'Munkamenetek kezelése',        // Session Management
        'log_all_out' => 'KIJELENTKEZÉS MINDENHONNAN [ MINDEN MUNKAMENET BEFEJEZÉSE ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Eszközök',                       // Devices
        'this_device' => 'Ez az eszköz',                        // This device
        'log_out_device' => 'Kijelentkezés',                    // Log out
        'devices_empty' => 'Nincsenek aktív eszközök',        // No active devices
        'view_people' => 'Tagok megjelenítése',                // Show members
        'delete_account' => 'Fiók törlése',                   // Delete account
        'delete_account_confirm' => 'Árvává teszed ezt a fiókot? A neved, az e-mail-címed és a képeid törlődnek, és nem állíthatók vissza. Az üzeneteid megmaradnak, egy névtelen árvának tulajdonítva. Biztos vagy benne?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Csoportok',                  // Groups
        'count' => 'Csoportok ({count})',        // Groups ({count})
        'empty' => 'Még nincsenek csoportok',   // No groups yet
        'group_of' => 'Csoport tagjai: {names}', // Group of : {names}
        'create' => 'Add meg a csoport nevét',  // Enter a name for the group
    ],

    'status' => [
        'online' => 'Online',                     // Online
        'away' => 'Távol',                       // Away
        'dnd' => 'Ne zavarj',                     // Do Not Disturb
        'offline' => 'Offline',                   // Offline
        'set_status' => 'Állapot beállítása', // Set Status
    ],

    'notifications' => [
        'title' => 'Értesítések',                             // Notifications
        'empty' => 'Nincsenek értesítések',                   // No notifications
        'friend_request' => '{name} barátkérést küldött neked', // {name} sent you a friend request
        'friend_accept' => 'Mostantól barátok vagytok vele: {name}', // You are now friends with {name}
        'friend_remove' => '{name} eltávolított a barátai közül', // {name} removed you as a friend
        'mention' => '{name} megemlített',                      // {name} mentioned you
        'server_invite' => '{name} meghívott ide: {server}',    // {name} invited you to {server}
        'mark_read' => 'Megjelölés olvasottként',             // Mark as read
        'clear_all' => 'Összes törlése',                      // Clear all
        'as_of' => '{date} szerint',                             // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',                        // username#1234
        'button' => 'Hozzáadás',                               // Add
        'success' => 'Barátkérés elküldve',                  // Friend request sent
        'error_not_found' => 'A felhasználó nem található',  // User not found
        'error_invalid_format' => 'Használd ezt a formátumot: username#1234', // Use format: username#1234
        'error_self' => 'Magadat nem adhatod hozzá',            // Cannot add yourself
        'error_already_friends' => 'Már barátok vagytok',      // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Beállítások',           // Settings
        'set_status' => 'Állapot beállítása', // Set Status
        'view_profile' => 'Profil megtekintése', // View Profile
    ],

    'recent' => [
        'title' => 'Legutóbbi beszélgetések',     // Recent Conversations
        'empty' => 'Még nincsenek beszélgetések', // No conversations yet
    ],

    'people' => [
        'title' => 'Emberek és szerverek', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Profil megnyitása',                  // Open profile
        'read_all' => 'Összes olvasottnak jelölése',          // Read all
        'silence' => 'Némítás',                               // Silence
        'unsilence' => 'Némítás feloldása',                  // Unsilence
        'close' => 'Bezárás',                                  // Close
        'remove_friend' => 'Barát eltávolítása',             // Remove Friend
        'leave_group' => 'Kilépés a csoportból',              // Leave group
        'remove_from_group' => 'Eltávolítás a csoportból',   // Remove from group
        'set_owner' => 'Tulajdonossá tétel',                   // Make owner
        'set_owner_confirm' => 'Tulajdonossá teszed ezt a személyt? Átadod a tulajdonosi jogaidat.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Eltávolítod ezt a személyt a csoportból?', // Remove this person from the group?
        'block_confirm' => 'Letiltod ezt a felhasználót? Többé nem fogjátok látni egymást.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} hozzáadta: {target}',          // {actor} added {target}
        'member_remove' => '{actor} eltávolította: {target}',  // {actor} removed {target}
        'member_leave' => '{actor} kilépett',                   // {actor} left
        'member_join' => '{actor} csatlakozott',                 // {actor} joined
        'call' => '{actor} hívást indított, amely {duration} ideig tartott', // {actor} started a call that lasted {duration}
        'call_missed' => 'Nem fogadtál hívást tőle: {actor}', // You missed a call from {actor}
        'group_rename' => '{actor} elnevezte a csoportot: „{name}”', // {actor} named the group « {name} »
        'group_icon' => '{actor} megváltoztatta a csoport ikonját', // {actor} changed the group icon
        'group_create' => '{actor} létrehozta a csoportot',     // {actor} created the group
        'owner_change' => '{target} lett az új tulajdonos',     // {target} is now the owner
        'friend' => '{actor} és {target} mostantól barátok',  // {actor} and {target} are now friends
        'like' => '{actor} {n} üzenetet kedvelt, összesen {x} alkalommal', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'EMODZSIK KERESÉSE…',      // SEARCH EMOJIS...
        'not_found' => 'NEM TALÁLHATÓ EMODZSI', // NO EMOJIS FOUND
        'recents' => 'LEGUTÓBBI EMODZSIK',       // RECENT EMOJIS
        'smileys' => 'SMILEYK ÉS ÉRZELMEK',     // SMILEYS AND EMOTION
        'people' => 'EMBEREK ÉS TEST',           // PEOPLE AND BODY
        'animals' => 'ÁLLATOK ÉS TERMÉSZET',   // ANIMALS AND NATURE
        'food' => 'ÉTEL ÉS ITAL',               // FOOD AND DRINK
        'activities' => 'TEVÉKENYSÉGEK',        // ACTIVITIES
        'travel' => 'UTAZÁS ÉS HELYEK',         // TRAVEL & PLACES
        'objects' => 'TÁRGYAK',                  // OBJECTS
        'symbols' => 'SZIMBÓLUMOK',              // SYMBOLS
        'flags' => 'ZÁSZLÓK',                   // FLAGS
        'custom' => 'EGYÉNI',                    // CUSTOM
        'user' => 'AZ EMODZSIID',                 // YOUR EMOJIS
        'tabs_emojis' => 'EMODZSIK',              // EMOJIS
        'tabs_gifs' => 'GIF-EK',                  // GIFS
    ],

    'gif' => [
        'tab_history' => 'ELŐZMÉNYEK',                  // HISTORY
        'tab_liked' => 'KEDVELT',                         // LIKED
        'tab_tenor' => 'GIF-EK',                          // GIFS
        'search' => 'GIF-EK KERESÉSE…',                // SEARCH GIFS...
        'loading' => 'Betöltés…',                     // Loading...
        'error' => 'Nem sikerült betölteni a GIF-eket', // Could not load GIFs
        'empty' => 'Még nincs itt semmi',                // Nothing here yet
        'powered_by' => 'A KLIPY szolgáltatása',        // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Kép igazítása',                           // Adjust image
        'apply' => 'Alkalmaz',                                   // Apply
        'cancel' => 'Mégse',                                    // Cancel
        'zoom' => 'Nagyítás',                                  // Zoom
        'trim' => 'Vágás',                                     // Trim
        'processing' => 'Feldolgozás…',                       // Processing…
        'drag_hint' => 'Húzd az áthelyezéshez · görgess a nagyításhoz', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Bezárás',                   // Close
        'download' => 'Letöltés',               // Download
        'open_original' => 'Eredeti megnyitása', // Open original
    ],

    'image' => [
        'change' => 'Módosítás',      // Change
        'view' => 'Megtekintés',        // View
        'revert' => 'Visszaállítás',  // Revert
        'uploading' => 'Feltöltés…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'Nincs jogosultság',                // Unauthorized
        'invalid_pin' => 'Érvénytelen PIN',                  // Invalid PIN
        'user_not_found' => 'A felhasználó nem található', // User not found
        'talk_not_found' => 'A beszélgetés nem található', // Talk not found
        'invalid_talk' => 'Érvénytelen beszélgetés',       // Invalid talk
        'access_denied' => 'A hozzáférés megtagadva',       // Access denied
    ],
];
