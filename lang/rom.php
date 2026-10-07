<?php

$S = [
    'app' => [
        'name' => 'Prono', // Prono
    ],

    'nav' => [
        'home' => 'Acasă',               // Home
        'dms' => 'Mesaje directe',        // Direct Messages
        'groups' => 'Grupuri',            // Groups
        'servers' => 'Servere',           // Servers
        'theatres' => 'Teatre',           // Theatres
        'telegram' => 'Telegrame',        // Telegrams
        'settings' => 'Setări',          // Settings
        'notifications' => 'Notificări', // Notifications
    ],

    'auth' => [
        'login_title' => 'AUTENTIFICARE',                        // LOG-IN
        'enlist_title' => 'ÎNREGISTRARE',                       // EN-LIST
        'email_placeholder' => 'Poștă electronică',           // Electronic Mail
        'password_placeholder' => 'Parolă',                     // Password
        'password_confirm_placeholder' => 'Confirmă parola',    // Confirm Password
        'name_placeholder' => 'Nume afișat',                    // Display Name
        'login_button' => 'Intră',                              // Enter
        'enlist_button' => 'Creează cont',                      // Create Account
        'link_to_enlist' => 'Creează cont',                     // Create account
        'link_to_login' => 'Am deja cont',                       // Already have account
        'error_fill_fields' => 'Completează toate câmpurile',  // Fill all fields
        'error_invalid_credentials' => 'Date de autentificare invalide', // Invalid credentials
        'error_too_many' => 'Prea multe încercări. Așteaptă câteva minute și încearcă din nou.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'Numele trebuie să aibă între 2 și 32 de caractere', // Name must be 2-32 characters
        'error_invalid_email' => 'Format de e-mail invalid',     // Invalid email format
        'error_password_length' => 'Parola trebuie să aibă cel puțin 8 caractere', // Password must be at least 8 characters
        'error_password_mismatch' => 'Parolele nu se potrivesc', // Passwords do not match
        'error_email_exists' => 'Adresa de e-mail este deja înregistrată', // Email already registered
        'error_email_banned' => 'Această adresă de e-mail este interzisă.', // This mail is banned.
        'link_to_forgot' => 'Mi-am uitat parola',                // I forgot my password
        'download_client' => 'Descarcă clientul pronal pentru Windows', // Download pronal client for Windows
        'open_in_client' => 'Deschide în client',               // Open in client
        'forgot_title' => 'RESETARE',                            // RE-SET
        'forgot_instruction' => 'Scrie adresa ta de e-mail. Dacă este înregistrată, un link de resetare pornește spre ea.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Trimite linkul de resetare',         // Send resetting link
        'forgot_sent' => 'Dacă adresa este înregistrată, un link de resetare este pe drum. Verifică-ți căsuța de intrare.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'Scrisoarea nu a putut pleca acum. Încearcă din nou mai târziu.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Înapoi la autentificare',           // Back to log-in
        'reset_title' => 'PAROLĂ NOUĂ',                        // NEW PASS-WORD
        'reset_button' => 'Salvează și autentifică-te',       // Save & Log-in
        'reset_invalid' => 'Acest link de resetare este nul sau a expirat.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — resetarea parolei',   // Prono — pass-word reset
        'reset_mail_intro' => 'Cineva a cerut resetarea parolei pentru acest cont pronal.', // Someone asked to reset the pass-word for this pronal account.
        'reset_mail_cta' => 'Setează o parolă nouă',          // Set a new pass-word
        'reset_mail_ignore' => 'Dacă nu ai fost tu, ignoră acest mesaj. Nu răspunde la această scrisoare.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'Poștă electronică sau P.I.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Nu ai intrat încă prima dată. Deschide scrisoarea pe care ți-am trimis-o.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Acest cont este blocat.',     // This account is locked.
        'enlist_check_mail' => 'Contul a fost creat. O scrisoare cu P.I.-№-ul tău și un cod de intrare de unică folosință este pe drum. Deschide-o pentru a intra prima dată.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'PRIMA INTRARE',                       // FIRST ENTRY
        'verify_instruction' => 'Reprodu exact P.I.-№-ul tău și codul de patru litere din scrisoare.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-№',                  // P.I.-№
        'verify_code_placeholder' => 'Cod de patru litere',      // Four-letter code
        'verify_button' => 'Intră',                             // Enter
        'verify_invalid_link' => 'Acest link de intrare este nul sau a expirat.', // This entry link is void or has expired.
        'verify_burnt' => 'Interzis.',                           // Banned.
        'verify_mail_subject' => 'Prono — P.I.-№-ul și codul tău de intrare', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Bun venit. Iată cheile noului tău cont pronal.', // Welcome. Here are the keys to your new pronal account.
        'verify_mail_pin_label' => 'P.I.-№-ul tău',           // Your P.I.-№
        'verify_mail_code_label' => 'Codul tău de intrare de unică folosință', // Your one-time entry code
        'verify_mail_cta' => 'Intră prima dată',               // Enter for the first time
        'verify_mail_warn' => 'Reproduce-le pe amândouă exact pe pagina de intrare. O singură greșeală de scriere arde contul și blochează adresa. Nu răspunde la această scrisoare.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Bun venit, {name}',                       // Welcome, {name}
        'subtitle' => 'Alege o conversație din bara laterală sau începe una nouă.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Prieteni',                                   // Friends
        'count' => 'Prieteni ({count})',                         // Friends ({count})
        'empty' => 'Încă nu ai prieteni',                      // No friends yet
        'add_button' => 'Adaugă prieten',                       // Add Friend
        'status_friends' => 'Prieteni',                          // Friends
        'status_pending' => 'În așteptare',                    // Pending
        'status_declined' => 'Refuzat',                          // Declined
        'status_blocked' => 'Blocat',                            // Blocked
        'request_pending' => 'Cerere în așteptare',            // Request Pending
        'accept' => 'Acceptă',                                  // Accept
        'decline' => 'Refuză',                                  // Decline
        'retract' => 'Retrage',                                  // Retract
        'retract_confirm' => 'Retragi această cerere de prietenie? Va fi retrasă.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Mesaje directe',                             // Direct Messages
        'empty' => 'Adaugă prieteni pentru a începe să schimbi mesaje', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Servere',                                    // Servers
        'count' => 'Servere ({count})',                          // Servers ({count})
        'empty' => 'Alătură-te unui server sau creează unul', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Teatre',                                  // Theatres
        'count' => 'Teatre ({count})',                        // Theatres ({count})
        'empty' => 'Niciun teatru',                           // No theatres
        'role_speaker' => 'VORBITOR',                         // SPEAKER
        'role_listener' => 'ASCULTĂTOR',                     // LISTENER
        'create' => 'Creează teatru',                        // Create Theatre
        'name_placeholder' => 'Numele teatrului',             // Theatre name
        'add' => 'Adaugă ascultător',                       // Add listener
        'settings' => 'Setările teatrului',                  // Theatre settings
        'leave' => 'Părăsește teatrul',                    // Leave theatre
        'leave_confirm' => 'Părăsești acest teatru?',      // Leave this theatre?
        'rename_prompt' => 'Numele nou al teatrului',         // New theatre name
        'broadcast_placeholder' => 'Transmite în teatru…', // Broadcast to the theatre...
        'send' => 'Transmite',                                // Transmit
        'no_friends_to_add' => 'Niciun prieten de adăugat',  // No friends to add
        'promote' => 'Fă-l VORBITOR',                        // Make SPEAKER
        'demote' => 'Fă-l ASCULTĂTOR',                      // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Anulează',  // Cancel
        'yes' => 'Da',            // Yes
        'no' => 'Nu',             // No
        'confirm' => 'Confirmă', // Confirm
    ],

    'call' => [
        'start' => 'Apel',                                    // Call
        'incoming' => 'Apel de la {name}',                    // Call from {name}
        'accept' => 'Răspunde',                              // Accept
        'decline' => 'Refuză',                               // Decline
        'calling' => 'Se apelează…',                       // Calling…
        'connecting' => 'Se conectează…',                  // Connecting…
        'failed' => 'Nu s-a putut conecta (releu)',           // Could not connect (relay)
        'in_call' => 'În apel',                              // In call
        'mute' => 'Dezactivează sunetul',                    // Mute
        'unmute' => 'Activează sunetul',                     // Unmute
        'hang_up' => 'Închide',                              // Hang up
        'unavailable' => 'Utilizatorul este offline',         // User is offline
        'busy' => 'Utilizatorul este ocupat',                 // User is busy
        'declined' => 'Apel refuzat',                         // Call declined
        'ended' => 'Apel încheiat',                          // Call ended
        'mic_denied' => 'Accesul la microfon a fost refuzat', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Activ acum',       // Now active
        'elapsed' => 'scurs',            // elapsed
        'left' => 'rămas',              // left
        'paused' => 'În pauză.',       // Paused.
        'playing' => 'Joacă',           // Playing
        'streaming' => 'Transmite live', // Streaming
        'listening' => 'Ascultă',       // Listening
        'watching' => 'Se uită',        // Watching
        'competing' => 'Concurează',    // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Scrie un mesaj…',              // Type a message...
        'filelarge' => 'Fișierul nr. {n} este prea mare, nu poate fi încărcat.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Se încarcă {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'Ești ASCULTĂTOR',                // You are a LISTENER
        'edited' => '(editat)',                                  // (edited)
        'untrusten_media' => 'Media nesigură — apasă pentru a încărca', // Untrusted media — click to load
        'untrusten_media_confirm' => 'Ești sigur? Aceasta încarcă media direct de la sursa ei, care îți va vedea adresa IP.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'scrie…',                               // is typing...
        'are_typing' => 'scriu…',                              // are typing...
        'replying_to' => 'Răspuns pentru',                      // Replying to
        'like' => 'Apreciază',                                  // Like
        'paste_too_long_as_file' => 'Acest mesaj este prea lung pentru chat. Vrei să-l trimiți ca fișier?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Răspunde',                                  // Reply
        'edit' => 'Editează',                                   // Edit
        'delete' => 'Șterge',                                   // Delete
        'copy' => 'Copiază',                                    // Copy
        'copy_raw' => 'Copiază textul brut',                    // Copy raw
        'copied' => 'Copiat',                                    // Copied
        'morethan10items' => 'Nu poți încorpora mai mult de 10 fișiere!', // You can not embed more than 10 files !
        'overlayupload' => 'Nu mai trage pentru a încorpora fișierul', // Stop dragging to embed the file
        'unknown' => 'Necunoscut',                               // Unknown
        'said' => 'a spus',                                      // said
        'reply_said' => '{actor} a spus:',                       // {actor} said :
        'reply_media' => '{kind} trimis de {actor} la {time}',   // {actor}’s sent {kind} at {time}
        'reply_attachment' => 'Atașament trimis de {actor} la {time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Mesajul original nu este disponibil', // Original message unavailable
        'reply_far' => 'Prea sus în chat. Apasă pentru a ajunge acolo.', // Too far up the chat. Click to go there.
        'media_image' => 'imagine',                              // image
        'media_video' => 'videoclip',                            // video
        'media_audio' => 'audio',                                // audio
        'media_file' => 'fișier',                               // file
        'download' => 'Apasă pentru a descărca fișierul încărcat', // Click to Down-load the Up-loaded file
        'create_group' => 'Creează grup',                       // Create Group
        'add_to_group' => 'Adaugă în grup',                    // Add to Group
        'likes' => 'Aprecieri',                                  // Likes
        'new_message_scroll_klick' => '{n} mesaje noi',          // {n} new message( s )
        'liked_attachment' => 'Atașament @ {time}',             // Attachment @ {time}
        'no_likes' => 'Niciun mesaj apreciat',                   // No liked messages
        'group_settings' => 'Setările grupului',                // Group Settings
        'leave_group' => 'Părăsește grupul',                  // Leave Group
        'leave_confirm' => 'Părăsești acest grup?',           // Leave this group?
        'go_to_latest' => 'Apasă pentru a reveni la cel mai recent chat', // Click to go back to Latest chat
        'empty' => 'Încă nu există mesaje. Spune ceva ca să începi.', // No messages yet. Say something to get started.
        'load_failed' => 'Mesajele nu au putut fi încărcate. Apasă pentru a reîncerca.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Telegrame',                  // Telegrams
        'received_title' => 'Telegrame primite', // Received Telegrams
        'empty' => 'Nicio telegramă',           // No telegrams
        'priority_routine' => 'OBIȘNUIT',       // ROUTINE
        'priority_priority' => 'PRIORITAR',      // PRIORITY
        'priority_emergency' => 'URGENȚĂ',     // EMERGENCY
    ],

    'profile' => [
        'details' => 'Detaliile profilului',             // Profile details
        'pin_label' => 'PIN: {pin}',                     // PIN: {pin}
        'message_button' => 'Mesaj',                     // Message
        'block_button' => 'Blochează',                  // Block
        'unblock_button' => 'Deblochează',              // Unblock
        'block_confirm' => 'Blochezi acest utilizator?', // Block this user?
        'shared_friends' => 'Prieteni comuni',           // Shared Friends
        'shared_servers' => 'Servere comune',            // Shared Servers
        'shared_theatres' => 'Teatre comune',            // Shared Theatres
        'no_shared_friends' => 'Niciun prieten comun',   // No shared friends
        'no_shared_servers' => 'Niciun server comun',    // No shared servers
        'no_shared_theatres' => 'Niciun teatru comun',   // No shared theatres
    ],

    'settings' => [
        'title' => 'Setări',                                    // Settings
        'account_section' => 'Cont și securitate',              // Account & Security
        'session_section' => 'Sesiune',                          // Session
        'images_section' => 'Imagini',                           // Images
        'profile_section' => 'Profil',                           // Profile
        'description' => 'Descriere',                            // Description
        'description_placeholder' => 'Scrie ceva despre tine…', // Write something about yourself…
        'description_preview' => 'Previzualizare',               // Preview
        'preview_profile' => 'Profil',                           // Profile
        'preview_friend' => 'Lista de prieteni',                 // Friend list
        'preview_speaker' => 'Vorbitor din teatru',              // Theatre speaker
        'preview_chat' => 'Mesaj din chat',                      // Chat message
        'language' => 'Limbă',                                  // Language
        'lang_auto' => 'Automat',                                // Automatic
        'dm' => 'Mod întunecat',                                // Dark Mode
        'appearance' => 'Aspect',                                // Appearance
        'rich_presence' => 'Permiți prezența extinsă?',       // Allow rich presence?
        'close' => 'Închide',                                   // Close
        'your_pin' => 'PIN-ul tău',                             // Your PIN
        'your_pin_warn' => 'PIN-ul tău este un identificator privat. Împărtășește-l doar cu surse de încredere.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Nume afișat',                        // Display Name
        'change_name' => 'Schimbă numele',                      // Change Name
        'localsettings' => 'Setări regionale',                  // Locale
        'change_password' => 'Schimbă parola',                  // Change Password
        'current_password' => 'Parola curentă',                 // Current Password
        'new_password' => 'Parola nouă',                        // New Password
        'confirm_password' => 'Confirmă parola',                // Confirm Password
        'avatar' => 'Avatar',                                    // Avatar
        'ambiance' => 'Imagine de ambianță',                   // Ambiance Image
        'upload_avatar' => 'Încarcă avatar',                   // Upload Avatar
        'upload_ambiance' => 'Încarcă ambianța',              // Upload Ambiance
        'max_size' => 'Maximum 500 KB',                          // Max 500 KB
        'logout' => 'Deconectare',                               // Logout
        'logout_desc' => 'Încheie sesiunea curentă',           // End your current session
        'save' => 'Salvează',                                   // Save
        'saved' => 'Salvat',                                     // Saved
        'error_name_taken' => 'Numele este deja luat',           // Name already taken
        'error_wrong_password' => 'Parolă greșită',           // Wrong password
        'error_file_too_large' => 'Fișier prea mare (maximum 500 KB)', // File too large (max 500 KB)
        'error_invalid_file' => 'Tip de fișier invalid',        // Invalid file type
        'notifications' => 'Notificări',                        // Notifications
        'global_mute' => 'Dezactivare generală a sunetului',    // Global Mute
        'notification_types' => 'Tipuri de notificări',         // Notification Types
        'friend_requests' => 'Cereri de prietenie',              // Friend Requests
        'muting_settings' => 'Setări de dezactivare a sunetului', // Muting Settings
        'friend_mute' => 'Dezactivează sunetul notificărilor de cereri de prietenie', // Friend request notification mute
        'friend_change_mute' => 'Dezactivează sunetul notificărilor de schimbări la prieteni', // Friend change notification mute
        'message_mute' => 'Dezactivează sunetul notificărilor de mesaje', // Message notification mute
        'call_mute' => 'Dezactivează sunetul notificărilor de apeluri', // Call notification mute
        'friend_changes' => 'Prieten acceptat sau eliminat',     // Friend accepted or removed
        'direct_messages' => 'Mesaje directe',                   // Direct Messages
        'server_mentions' => 'Mențiuni',                        // Mentions
        'mention_mute_prompt' => 'Dezactivează sunetul notificărilor de mențiuni', // Mention notification mute
        'account_settings' => 'SETĂRILE CONTULUI',              // ACCOUNT SETTINGS
        'current_email' => 'Poșta electronică curentă',       // Current Electronic Mail
        'friend_request_filtering' => 'Filtrarea cererilor de prietenie', // Friend Request Filtering
        'filter_everyone' => 'Toată lumea',                     // Everyone
        'filter_fof' => 'Doar prietenii prietenilor',            // Only friends of friends
        'dm_permissions' => 'Permisiuni pentru mesaje directe',  // Direct Message Permissions
        'dm_server_members' => 'Permite mesaje directe de la membrii serverului', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Permite mesaje directe de la vorbitorii din teatru', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Permite mesaje directe de la ascultătorii din teatru', // Allow DMs from Theatre listeners
        'dm_groups' => 'Permite mesaje directe de la grupuri',   // Allow DMs from groups
        'dm_strangers' => 'Permite mesaje directe de la necunoscuți', // Allow DMs from strangers
        'can_be_callen_by' => 'Permisiuni pentru chat vocal',    // Voice Chat Permissions
        'vc_server_members' => 'Permite chat vocal de la membrii serverului', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Permite chat vocal de la vorbitorii din teatru', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Permite chat vocal de la ascultătorii din teatru', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Permite chat vocal de la grupuri',       // Allow Voice Chats from groups
        'vc_strangers' => 'Permite chat vocal de la necunoscuți', // Allow Voice Chats from strangers
        'chat_settings' => 'Setările chatului',                 // Chat Settings
        'split_text_prompt' => 'Împarte mesajele lungi',        // Split long messages
        'setting_apperance' => 'Arată toate setările pe o singură pagină', // Show all settings on one page
        'junicode_show_prompt' => 'Folosește versiunea cu serife a site-ului', // Use the serif version of the website
        'maru_marks' => 'Folosește versiunile maru (cerc)',     // Use the maru versions
        'off_set' => 'Decalaj orar',                             // Time offset
        'day_time_saving' => 'Ora de vară',                     // Daylight saving time
        'session_management' => 'Gestionarea sesiunilor',        // Session Management
        'log_all_out' => 'DECONECTARE DIN TOT [ ÎNCHEIE TOATE SESIUNILE ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Dispozitive',                      // Devices
        'this_device' => 'Acest dispozitiv',                     // This device
        'log_out_device' => 'Deconectare',                       // Log out
        'devices_empty' => 'Niciun dispozitiv activ',            // No active devices
        'view_people' => 'Arată membrii',                       // Show members
        'delete_account' => 'Șterge contul',                    // Delete account
        'delete_account_confirm' => 'Faci acest cont orfan? Numele, poșta și pozele tale sunt șterse și nu pot fi recuperate. Mesajele tale rămân, atribuite unui orfan anonim. Ești sigur?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Grupuri',                    // Groups
        'count' => 'Grupuri ({count})',          // Groups ({count})
        'empty' => 'Încă nu există grupuri',  // No groups yet
        'group_of' => 'Grup al: {names}',        // Group of : {names}
        'create' => 'Scrie un nume pentru grup', // Enter a name for the group
    ],

    'status' => [
        'online' => 'Online',              // Online
        'away' => 'Plecat',                // Away
        'dnd' => 'Nu deranja',             // Do Not Disturb
        'offline' => 'Offline',            // Offline
        'set_status' => 'Setează starea', // Set Status
    ],

    'notifications' => [
        'title' => 'Notificări',                                // Notifications
        'empty' => 'Nicio notificare',                           // No notifications
        'friend_request' => '{name} ți-a trimis o cerere de prietenie', // {name} sent you a friend request
        'friend_accept' => 'Acum ești prieten cu {name}',       // You are now friends with {name}
        'friend_remove' => '{name} te-a eliminat din prieteni',  // {name} removed you as a friend
        'mention' => '{name} te-a menționat',                   // {name} mentioned you
        'server_invite' => '{name} te-a invitat în {server}',   // {name} invited you to {server}
        'mark_read' => 'Marchează ca citit',                    // Mark as read
        'clear_all' => 'Șterge tot',                            // Clear all
        'as_of' => 'La data de {date}',                          // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',                        // username#1234
        'button' => 'Adaugă',                                   // Add
        'success' => 'Cererea de prietenie a fost trimisă',     // Friend request sent
        'error_not_found' => 'Utilizatorul nu a fost găsit',    // User not found
        'error_invalid_format' => 'Folosește formatul: username#1234', // Use format: username#1234
        'error_self' => 'Nu te poți adăuga pe tine însuți',  // Cannot add yourself
        'error_already_friends' => 'Sunteți deja prieteni',     // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Setări',           // Settings
        'set_status' => 'Setează starea', // Set Status
        'view_profile' => 'Vezi profilul', // View Profile
    ],

    'recent' => [
        'title' => 'Conversații recente',           // Recent Conversations
        'empty' => 'Încă nu există conversații', // No conversations yet
    ],

    'people' => [
        'title' => 'Oameni și servere', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Deschide profilul',                   // Open profile
        'read_all' => 'Marchează tot ca citit',                 // Read all
        'silence' => 'Dezactivează sunetul',                    // Silence
        'unsilence' => 'Activează sunetul',                     // Unsilence
        'close' => 'Închide',                                   // Close
        'remove_friend' => 'Elimină prietenul',                 // Remove Friend
        'leave_group' => 'Părăsește grupul',                  // Leave group
        'remove_from_group' => 'Elimină din grup',              // Remove from group
        'set_owner' => 'Fă-l proprietar',                       // Make owner
        'set_owner_confirm' => 'Faci această persoană proprietar? Îți vei preda drepturile de proprietar.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Elimini această persoană din grup?', // Remove this person from the group?
        'block_confirm' => 'Blochezi acest utilizator? Nu vă veți mai vedea unul pe celălalt.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} a adăugat pe {target}',        // {actor} added {target}
        'member_remove' => '{actor} a eliminat pe {target}',     // {actor} removed {target}
        'member_leave' => '{actor} a plecat',                    // {actor} left
        'member_join' => '{actor} s-a alăturat',                // {actor} joined
        'call' => '{actor} a început un apel care a durat {duration}', // {actor} started a call that lasted {duration}
        'call_missed' => 'Ai ratat un apel de la {actor}',       // You missed a call from {actor}
        'group_rename' => '{actor} a numit grupul „{name}”', // {actor} named the group « {name} »
        'group_icon' => '{actor} a schimbat pictograma grupului', // {actor} changed the group icon
        'group_create' => '{actor} a creat grupul',              // {actor} created the group
        'owner_change' => '{target} este acum proprietar',       // {target} is now the owner
        'friend' => '{actor} și {target} sunt acum prieteni',   // {actor} and {target} are now friends
        'like' => '{actor} a apreciat {n} mesaje, de {x} ori în total', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'CAUTĂ EMOJI…',               // SEARCH EMOJIS...
        'not_found' => 'NU S-A GĂSIT NICIUN EMOJI', // NO EMOJIS FOUND
        'recents' => 'EMOJI RECENTE',                // RECENT EMOJIS
        'smileys' => 'FEȚE ȘI EMOȚII',            // SMILEYS AND EMOTION
        'people' => 'OAMENI ȘI CORP',               // PEOPLE AND BODY
        'animals' => 'ANIMALE ȘI NATURĂ',          // ANIMALS AND NATURE
        'food' => 'MÂNCARE ȘI BĂUTURI',           // FOOD AND DRINK
        'activities' => 'ACTIVITĂȚI',              // ACTIVITIES
        'travel' => 'CĂLĂTORII ȘI LOCURI',        // TRAVEL & PLACES
        'objects' => 'OBIECTE',                      // OBJECTS
        'symbols' => 'SIMBOLURI',                    // SYMBOLS
        'flags' => 'STEAGURI',                       // FLAGS
        'custom' => 'PERSONALIZATE',                 // CUSTOM
        'user' => 'EMOJI-URILE TALE',                // YOUR EMOJIS
        'tabs_emojis' => 'EMOJI',                    // EMOJIS
        'tabs_gifs' => 'GIF-URI',                    // GIFS
    ],

    'gif' => [
        'tab_history' => 'ISTORIC',                        // HISTORY
        'tab_liked' => 'APRECIATE',                        // LIKED
        'tab_tenor' => 'GIF-URI',                          // GIFS
        'search' => 'CAUTĂ GIF-URI…',                   // SEARCH GIFS...
        'loading' => 'Se încarcă…',                    // Loading...
        'error' => 'GIF-urile nu au putut fi încărcate', // Could not load GIFs
        'empty' => 'Încă nu e nimic aici',               // Nothing here yet
        'powered_by' => 'Furnizat de KLIPY',               // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Ajustează imaginea',                        // Adjust image
        'apply' => 'Aplică',                                    // Apply
        'cancel' => 'Anulează',                                 // Cancel
        'zoom' => 'Zoom',                                        // Zoom
        'trim' => 'Decupează',                                  // Trim
        'processing' => 'Se procesează…',                     // Processing…
        'drag_hint' => 'Trage pentru a repoziționa · derulează pentru zoom', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Închide',                    // Close
        'download' => 'Descarcă',                // Download
        'open_original' => 'Deschide originalul', // Open original
    ],

    'image' => [
        'change' => 'Schimbă',           // Change
        'view' => 'Vezi',                 // View
        'revert' => 'Revino',             // Revert
        'uploading' => 'Se încarcă…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'Neautorizat',                       // Unauthorized
        'invalid_pin' => 'PIN invalid',                        // Invalid PIN
        'user_not_found' => 'Utilizatorul nu a fost găsit',   // User not found
        'talk_not_found' => 'Conversația nu a fost găsită', // Talk not found
        'invalid_talk' => 'Conversație invalidă',            // Invalid talk
        'access_denied' => 'Acces refuzat',                    // Access denied
    ],
];
