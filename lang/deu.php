<?php

$S = [
    'app' => [
        'name' => 'Prono', // Prono
    ],

    'nav' => [
        'home' => 'Start',                       // Home
        'dms' => 'Direktnachrichten',            // Direct Messages
        'groups' => 'Gruppen',                   // Groups
        'servers' => 'Server',                   // Servers
        'theatres' => 'Theater',                 // Theatres
        'telegram' => 'Telegramme',              // Telegrams
        'settings' => 'Einstellungen',           // Settings
        'notifications' => 'Benachrichtigungen', // Notifications
    ],

    'auth' => [
        'login_title' => 'ANMELDEN',                             // LOG-IN
        'enlist_title' => 'REGISTRIEREN',                        // EN-LIST
        'email_placeholder' => 'E-Mail',                         // Electronic Mail
        'password_placeholder' => 'Passwort',                    // Password
        'password_confirm_placeholder' => 'Passwort bestätigen', // Confirm Password
        'name_placeholder' => 'Anzeigename',                     // Display Name
        'login_button' => 'Eintreten',                           // Enter
        'enlist_button' => 'Konto erstellen',                    // Create Account
        'link_to_enlist' => 'Konto erstellen',                   // Create account
        'link_to_login' => 'Bereits ein Konto vorhanden',        // Already have account
        'error_fill_fields' => 'Bitte alle Felder ausfüllen',   // Fill all fields
        'error_invalid_credentials' => 'Ungültige Zugangsdaten', // Invalid credentials
        'error_too_many' => 'Zu viele Versuche. Bitte warten Sie einige Minuten und versuchen Sie es erneut.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'Der Name muss 2-32 Zeichen lang sein', // Name must be 2-32 characters
        'error_invalid_email' => 'Ungültiges E-Mail-Format',    // Invalid email format
        'error_password_length' => 'Das Passwort muss mindestens 8 Zeichen lang sein', // Password must be at least 8 characters
        'error_password_mismatch' => 'Die Passwörter stimmen nicht überein', // Passwords do not match
        'error_email_exists' => 'E-Mail bereits registriert',    // Email already registered
        'error_email_banned' => 'Diese E-Mail ist gesperrt.',    // This mail is banned.
        'link_to_forgot' => 'Ich habe mein Passwort vergessen',  // I forgot my password
        'download_client' => 'Pronoclient für Windows herunterladen', // Download Prono client for Windows
        'open_in_client' => 'Im Client öffnen',                 // Open in client
        'forgot_title' => 'ZURÜCKSETZEN',                       // RE-SET
        'forgot_instruction' => 'Geben Sie Ihre E-Mail an. Wenn sie registriert ist, wird ein Link zum Zurücksetzen an sie versendet.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Link zum Zurücksetzen senden',      // Send resetting link
        'forgot_sent' => 'Wenn diese E-Mail registriert ist, ist ein Link zum Zurücksetzen unterwegs. Sehen Sie in Ihrem Posteingang nach.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'Die Nachricht konnte gerade nicht versendet werden. Versuchen Sie es später erneut.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Zurück zur Anmeldung',              // Back to log-in
        'reset_title' => 'NEUES PASSWORT',                       // NEW PASS-WORD
        'reset_button' => 'Speichern & anmelden',                // Save & Log-in
        'reset_invalid' => 'Dieser Link zum Zurücksetzen ist ungültig oder abgelaufen.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — Passwort zurücksetzen', // Prono — pass-word reset
        'reset_mail_intro' => 'Jemand hat das Zurücksetzen des Passworts für dieses Pronokonto angefordert.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Neues Passwort festlegen',          // Set a new pass-word
        'reset_mail_ignore' => 'Wenn Sie das nicht waren, ignorieren Sie diese Nachricht. Antworten Sie nicht auf diese Nachricht.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'E-Mail oder P.I.-Nr.',      // Electronic Mail or P.I.-№
        'error_not_verified' => 'Sie haben sich noch nicht zum ersten Mal angemeldet. Öffnen Sie die Nachricht, die wir Ihnen gesendet haben.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Dieses Konto ist gesperrt.',  // This account is locked.
        'enlist_check_mail' => 'Konto erstellt. Eine Nachricht mit Ihrer P.I.-Nr. und einem einmaligen Zugangscode ist unterwegs. Öffnen Sie sie, um sich zum ersten Mal anzumelden.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'ERSTE ANMELDUNG',                     // FIRST ENTRY
        'verify_instruction' => 'Geben Sie Ihre P.I.-Nr. und den vierstelligen Code aus der Nachricht ein.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-Nr.',                  // P.I.-№
        'verify_code_placeholder' => 'Vierstelliger Code',       // Four-letter code
        'verify_button' => 'Eintreten',                          // Enter
        'verify_invalid_link' => 'Dieser Anmeldelink ist ungültig oder abgelaufen.', // This entry link is void or has expired.
        'verify_burnt' => 'Gesperrt.',                           // Banned.
        'verify_mail_subject' => 'Prono — Ihre P.I.-Nr. und Ihr Zugangscode', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Willkommen. Hier sind die Schlüssel zu Ihrem neuen Pronokonto.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'Ihre P.I.-Nr.',              // Your P.I.-№
        'verify_mail_code_label' => 'Ihr einmaliger Zugangscode', // Your one-time entry code
        'verify_mail_cta' => 'Zum ersten Mal anmelden',          // Enter for the first time
        'verify_mail_warn' => 'Geben Sie beide auf der Anmeldeseite genau wieder. Ein falscher Anschlag zerstört das Konto und sperrt die E-Mail. Antworten Sie nicht auf diese Nachricht.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Willkommen, {name}',                      // Welcome, {name}
        'subtitle' => 'Wählen Sie ein Gespräch in der Seitenleiste aus oder beginnen Sie ein neues.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Freunde',                                    // Friends
        'count' => 'Freunde ({count})',                          // Friends ({count})
        'empty' => 'Noch keine Freunde',                         // No friends yet
        'add_button' => 'Freund hinzufügen',                    // Add Friend
        'status_friends' => 'Freunde',                           // Friends
        'status_pending' => 'Ausstehend',                        // Pending
        'status_declined' => 'Abgelehnt',                        // Declined
        'status_blocked' => 'Blockiert',                         // Blocked
        'request_pending' => 'Anfrage ausstehend',               // Request Pending
        'accept' => 'Annehmen',                                  // Accept
        'decline' => 'Ablehnen',                                 // Decline
        'retract' => 'Zurückziehen',                            // Retract
        'retract_confirm' => 'Diese Freundschaftsanfrage zurückziehen? Sie wird widerrufen.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Direktnachrichten',                         // Direct Messages
        'empty' => 'Fügen Sie Freunde hinzu, um zu schreiben', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Server',                                     // Servers
        'count' => 'Server ({count})',                           // Servers ({count})
        'empty' => 'Treten Sie einem Server bei oder erstellen Sie einen', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Theater',                                   // Theatres
        'count' => 'Theater ({count})',                         // Theatres ({count})
        'empty' => 'Keine Theater',                             // No theatres
        'role_speaker' => 'SPRECHER',                           // SPEAKER
        'role_listener' => 'ZUHÖRER',                          // LISTENER
        'create' => 'Theater erstellen',                        // Create Theatre
        'name_placeholder' => 'Theatername',                    // Theatre name
        'add' => 'Zuhörer hinzufügen',                        // Add listener
        'settings' => 'Theatereinstellungen',                   // Theatre settings
        'leave' => 'Theater verlassen',                         // Leave theatre
        'leave_confirm' => 'Dieses Theater verlassen?',         // Leave this theatre?
        'rename_prompt' => 'Neuer Theatername',                 // New theatre name
        'broadcast_placeholder' => 'An das Theater senden...',  // Broadcast to the theatre...
        'send' => 'Übertragen',                                // Transmit
        'no_friends_to_add' => 'Keine Freunde zum Hinzufügen', // No friends to add
        'promote' => 'Zum SPRECHER machen',                     // Make SPEAKER
        'demote' => 'Zum ZUHÖRER machen',                      // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Abbrechen',    // Cancel
        'yes' => 'Ja',              // Yes
        'no' => 'Nein',             // No
        'confirm' => 'Bestätigen', // Confirm
    ],

    'call' => [
        'start' => 'Anrufen',                             // Call
        'incoming' => 'Anruf von {name}',                 // Call from {name}
        'accept' => 'Annehmen',                           // Accept
        'decline' => 'Ablehnen',                          // Decline
        'calling' => 'Wird angerufen…',                 // Calling…
        'connecting' => 'Verbindung wird hergestellt…', // Connecting…
        'failed' => 'Verbindung fehlgeschlagen (Relay)',  // Could not connect (relay)
        'in_call' => 'Im Gespräch',                      // In call
        'mute' => 'Stummschalten',                        // Mute
        'unmute' => 'Stummschaltung aufheben',            // Unmute
        'hang_up' => 'Auflegen',                          // Hang up
        'unavailable' => 'Benutzer ist offline',          // User is offline
        'busy' => 'Benutzer ist beschäftigt',            // User is busy
        'declined' => 'Anruf abgelehnt',                  // Call declined
        'ended' => 'Anruf beendet',                       // Call ended
        'mic_denied' => 'Mikrofonzugriff verweigert',     // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Jetzt aktiv', // Now active
        'elapsed' => 'vergangen',   // elapsed
        'left' => 'übrig',         // left
        'paused' => 'Pausiert.',    // Paused.
        'playing' => 'Spielt',      // Playing
        'streaming' => 'Streamt',   // Streaming
        'listening' => 'Hört',     // Listening
        'watching' => 'Schaut',     // Watching
        'competing' => 'Tritt an',  // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Nachricht schreiben...',         // Type a message...
        'filelarge' => 'Datei Nr. {n} ist zu groß und kann nicht hochgeladen werden.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Wird hochgeladen {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'Sie sind ZUHÖRER',                // You are a LISTENER
        'edited' => '(bearbeitet)',                              // (edited)
        'untrusten_media' => 'Nicht vertrauenswürdige Medien — zum Laden klicken', // Untrusted media — click to load
        'untrusten_media_confirm' => 'Sind Sie sicher? Dadurch werden die Medien direkt von der Quelle geladen, die Ihre IP-Adresse sehen wird.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'schreibt...',                            // is typing...
        'are_typing' => 'schreiben...',                          // are typing...
        'replying_to' => 'Antwort an',                           // Replying to
        'like' => 'Gefällt mir',                                // Like
        'paste_too_long_as_file' => 'Diese Nachricht ist zu lang für den Chat. Möchten Sie sie stattdessen als Datei senden?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Antworten',                                  // Reply
        'edit' => 'Bearbeiten',                                  // Edit
        'delete' => 'Löschen',                                  // Delete
        'copy' => 'Kopieren',                                    // Copy
        'copy_raw' => 'Rohtext kopieren',                        // Copy raw
        'morethan10items' => 'Sie können nicht mehr als 10 Dateien einbetten!', // You can not embed more than 10 files !
        'overlayupload' => 'Lassen Sie los, um die Datei einzubetten', // Stop dragging to embed the file
        'unknown' => 'Unbekannt',                                // Unknown
        'said' => 'sagte',                                       // said
        'reply_said' => '{actor} sagte :',               // {actor} said :
        'reply_media' => '{kind} von {actor} gesendet um {time}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => 'Anhang von {actor} gesendet um {time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Originalnachricht nicht verfügbar', // Original message unavailable
        'media_image' => 'Bild',                         // image
        'media_video' => 'Video',                        // video
        'media_audio' => 'Audio',                        // audio
        'media_file' => 'Datei',                         // file
        'download' => 'Klicken Sie, um die hochgeladene Datei herunterzuladen', // Click to Down-load the Up-loaded file
        'create_group' => 'Gruppe erstellen',                    // Create Group
        'add_to_group' => 'Zur Gruppe hinzufügen',              // Add to Group
        'likes' => 'Gefällt-mir-Angaben',                       // Likes
        'new_message_scroll_klick' => '{n} neue Nachricht( en )', // {n} new message( s )
        'liked_attachment' => 'Anhang @ {time}',         // Attachment @ {time}
        'no_likes' => 'Keine mit „Gefällt mir“ markierten Nachrichten', // No liked messages
        'group_settings' => 'Gruppeneinstellungen',              // Group Settings
        'leave_group' => 'Gruppe verlassen',                     // Leave Group
        'leave_confirm' => 'Diese Gruppe verlassen?',            // Leave this group?
        'go_to_latest' => 'Klicken, um zum neuesten Chat zurückzukehren', // Click to go back to Latest chat
        'empty' => 'Noch keine Nachrichten. Schreiben Sie etwas, um zu beginnen.', // No messages yet. Say something to get started.
        'load_failed' => 'Nachrichten konnten nicht geladen werden. Klicken Sie, um es erneut zu versuchen.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Telegramme',                     // Telegrams
        'received_title' => 'Empfangene Telegramme', // Received Telegrams
        'empty' => 'Keine Telegramme',               // No telegrams
        'priority_routine' => 'ROUTINE',             // ROUTINE
        'priority_priority' => 'PRIORITÄT',         // PRIORITY
        'priority_emergency' => 'NOTFALL',           // EMERGENCY
    ],

    'profile' => [
        'pin_label' => 'PIN: {pin}',                         // PIN: {pin}
        'message_button' => 'Nachricht',                     // Message
        'block_button' => 'Blockieren',                      // Block
        'unblock_button' => 'Blockierung aufheben',          // Unblock
        'block_confirm' => 'Diesen Benutzer blockieren?',    // Block this user?
        'shared_friends' => 'Gemeinsame Freunde',            // Shared Friends
        'shared_servers' => 'Gemeinsame Server',             // Shared Servers
        'shared_theatres' => 'Gemeinsame Theater',           // Shared Theatres
        'no_shared_friends' => 'Keine gemeinsamen Freunde',  // No shared friends
        'no_shared_servers' => 'Keine gemeinsamen Server',   // No shared servers
        'no_shared_theatres' => 'Keine gemeinsamen Theater', // No shared theatres
    ],

    'settings' => [
        'title' => 'Einstellungen',                              // Settings
        'account_section' => 'Konto & Sicherheit',               // Account & Security
        'session_section' => 'Sitzung',                          // Session
        'images_section' => 'Bilder',                            // Images
        'profile_section' => 'Profil',                           // Profile
        'description' => 'Beschreibung',                         // Description
        'description_placeholder' => 'Schreiben Sie etwas über sich…', // Write something about yourself…
        'description_preview' => 'Vorschau',                     // Preview
        'preview_profile' => 'Profil',                           // Profile
        'preview_friend' => 'Freundesliste',                     // Friend list
        'preview_speaker' => 'Theatersprecher',                  // Theatre speaker
        'preview_chat' => 'Chatnachricht',                       // Chat message
        'language' => 'Sprache',                                 // Language
        'lang_auto' => 'Automatisch',                            // Automatic
        'dm' => 'Dunkelmodus',                                   // Dark Mode
        'appearance' => 'Darstellung',                           // Appearance
        'rich_presence' => 'Rich Presence erlauben?',            // Allow rich presence?
        'close' => 'Schließen',                                 // Close
        'your_pin' => 'Ihr PIN',                                 // Your PIN
        'your_pin_warn' => 'Ihr PIN ist eine private Kennung. Teilen Sie ihn nur mit vertrauenswürdigen Quellen.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Anzeigename',                         // Display Name
        'change_name' => 'Namen ändern',                        // Change Name
        'localsettings' => 'Gebietsschema',                      // Locale
        'change_password' => 'Passwort ändern',                 // Change Password
        'current_password' => 'Aktuelles Passwort',              // Current Password
        'new_password' => 'Neues Passwort',                      // New Password
        'confirm_password' => 'Passwort bestätigen',            // Confirm Password
        'avatar' => 'Avatar',                                    // Avatar
        'ambiance' => 'Hintergrundbild',                         // Ambiance Image
        'upload_avatar' => 'Avatar hochladen',                   // Upload Avatar
        'upload_ambiance' => 'Hintergrundbild hochladen',        // Upload Ambiance
        'max_size' => 'Max. 500 KB',                             // Max 500 KB
        'logout' => 'Abmelden',                                  // Logout
        'logout_desc' => 'Ihre aktuelle Sitzung beenden',        // End your current session
        'save' => 'Speichern',                                   // Save
        'saved' => 'Gespeichert',                                // Saved
        'error_name_taken' => 'Name bereits vergeben',           // Name already taken
        'error_wrong_password' => 'Falsches Passwort',           // Wrong password
        'error_file_too_large' => 'Datei zu groß (max. 500 KB)', // File too large (max 500 KB)
        'error_invalid_file' => 'Ungültiger Dateityp',          // Invalid file type
        'notifications' => 'Benachrichtigungen',                 // Notifications
        'global_mute' => 'Alles stummschalten',                  // Global Mute
        'notification_types' => 'Benachrichtigungsarten',        // Notification Types
        'friend_requests' => 'Freundschaftsanfragen',            // Friend Requests
        'muting_settings' => 'Stummschaltung',           // Muting Settings
        'friend_mute' => 'Benachrichtigungen über Freundschaftsanfragen stummschalten', // Friend request notification mute
        'friend_change_mute' => 'Benachrichtigungen über Freundschaftsänderungen stummschalten', // Friend change notification mute
        'message_mute' => 'Nachrichtenbenachrichtigungen stummschalten', // Message notification mute
        'call_mute' => 'Anrufbenachrichtigungen stummschalten', // Call notification mute
        'friend_changes' => 'Freund angenommen oder entfernt', // Friend accepted or removed
        'direct_messages' => 'Direktnachrichten',                // Direct Messages
        'server_mentions' => 'Erwähnungen',             // Mentions
        'mention_mute_prompt' => 'Erwähnungsbenachrichtigungen stummschalten', // Mention notification mute
        'account_settings' => 'KONTOEINSTELLUNGEN',              // ACCOUNT SETTINGS
        'current_email' => 'Aktuelle E-Mail',                    // Current Electronic Mail
        'friend_request_filtering' => 'Filterung von Freundschaftsanfragen', // Friend Request Filtering
        'filter_everyone' => 'Alle',                             // Everyone
        'filter_fof' => 'Nur Freunde von Freunden',              // Only friends of friends
        'dm_permissions' => 'Berechtigungen für Direktnachrichten', // Direct Message Permissions
        'dm_server_members' => 'DMs von Servermitgliedern erlauben', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'DMs von Theatersprechern erlauben', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'DMs von Theaterzuhörern erlauben', // Allow DMs from Theatre listeners
        'dm_groups' => 'DMs von Gruppen erlauben',               // Allow DMs from groups
        'dm_strangers' => 'Direktnachrichten von Fremden zulassen', // Allow DMs from strangers
        'can_be_callen_by' => 'Berechtigungen für Sprachchats', // Voice Chat Permissions
        'vc_server_members' => 'Sprachchats von Servermitgliedern zulassen', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Sprachchats von Theater-Sprechern zulassen', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Sprachchats von Theater-Zuhörern zulassen', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Sprachchats von Gruppen zulassen', // Allow Voice Chats from groups
        'vc_strangers' => 'Sprachchats von Fremden zulassen', // Allow Voice Chats from strangers
        'chat_settings' => 'Chat-Einstellungen',         // Chat Settings
        'split_text_prompt' => 'Lange Nachrichten aufteilen', // Split long messages
        'setting_apperance' => 'Alle Einstellungen auf einer Seite anzeigen', // Show all settings on one page
        'junicode_show_prompt' => 'Serifenversion der Website verwenden', // Use the serif version of the website
        'off_set' => 'Zeitversatz',                      // Time offset
        'day_time_saving' => 'Sommerzeit',               // Daylight saving time
        'session_management' => 'Sitzungsverwaltung',            // Session Management
        'log_all_out' => 'ALLE ABMELDEN [ ALLE SITZUNGEN BEENDEN ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Geräte',                          // Devices
        'this_device' => 'Dieses Gerät',                        // This device
        'log_out_device' => 'Abmelden',                          // Log out
        'devices_empty' => 'Keine aktiven Geräte',              // No active devices
        'view_people' => 'Mitglieder anzeigen',                  // Show members
        'delete_account' => 'Konto löschen',                    // Delete account
        'delete_account_confirm' => 'Dieses Konto verwaisen lassen? Ihr Name, Ihre E-Mail und Ihre Bilder werden gelöscht und können nicht wiederhergestellt werden. Ihre Nachrichten bleiben erhalten, einem anonymen Waisen zugeordnet. Sind Sie sicher?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Gruppen',                                    // Groups
        'count' => 'Gruppen ({count})',                          // Groups ({count})
        'empty' => 'Noch keine Gruppen',                         // No groups yet
        'group_of' => 'Gruppe von: {names}',                     // Group of : {names}
        'create' => 'Geben Sie einen Namen für die Gruppe ein', // Enter a name for the group
    ],

    'status' => [
        'online' => 'Online',               // Online
        'away' => 'Abwesend',               // Away
        'dnd' => 'Nicht stören',           // Do Not Disturb
        'offline' => 'Offline',             // Offline
        'set_status' => 'Status festlegen', // Set Status
    ],

    'notifications' => [
        'title' => 'Benachrichtigungen',                         // Notifications
        'empty' => 'Keine Benachrichtigungen',                   // No notifications
        'friend_request' => '{name} hat Ihnen eine Freundschaftsanfrage gesendet', // {name} sent you a friend request
        'friend_accept' => 'Sie sind jetzt mit {name} befreundet', // You are now friends with {name}
        'friend_remove' => '{name} hat Sie als Freund entfernt', // {name} removed you as a friend
        'mention' => '{name} hat Sie erwähnt',          // {name} mentioned you
        'server_invite' => '{name} hat Sie zu {server} eingeladen', // {name} invited you to {server}
        'mark_read' => 'Als gelesen markieren',                  // Mark as read
        'clear_all' => 'Alle löschen',                          // Clear all
        'as_of' => 'Stand {date}',                               // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'benutzername#1234',                    // username#1234
        'button' => 'Hinzufügen',                               // Add
        'success' => 'Freundschaftsanfrage gesendet',            // Friend request sent
        'error_not_found' => 'Benutzer nicht gefunden',          // User not found
        'error_invalid_format' => 'Format verwenden: benutzername#1234', // Use format: username#1234
        'error_self' => 'Sie können sich nicht selbst hinzufügen', // Cannot add yourself
        'error_already_friends' => 'Bereits befreundet',         // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Einstellungen',       // Settings
        'set_status' => 'Status festlegen',  // Set Status
        'view_profile' => 'Profil anzeigen', // View Profile
    ],

    'recent' => [
        'title' => 'Letzte Gespräche',     // Recent Conversations
        'empty' => 'Noch keine Gespräche', // No conversations yet
    ],

    'people' => [
        'title' => 'Personen & Server', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Profil öffnen',                      // Open profile
        'read_all' => 'Alle lesen',                              // Read all
        'silence' => 'Stummschalten',                            // Silence
        'unsilence' => 'Stummschaltung aufheben',                // Unsilence
        'close' => 'Schließen',                                 // Close
        'remove_friend' => 'Freund entfernen',                   // Remove Friend
        'leave_group' => 'Gruppe verlassen',                     // Leave group
        'remove_from_group' => 'Aus Gruppe entfernen',           // Remove from group
        'set_owner' => 'Zum Eigentümer machen',                 // Make owner
        'set_owner_confirm' => 'Diese Person zum Eigentümer machen? Sie geben Ihre Eigentümerrechte ab.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Diese Person aus der Gruppe entfernen?', // Remove this person from the group?
        'block_confirm' => 'Diesen Benutzer blockieren? Sie sehen sich gegenseitig nicht mehr.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} hat {target} hinzugefügt',     // {actor} added {target}
        'member_remove' => '{actor} hat {target} entfernt',      // {actor} removed {target}
        'member_leave' => '{actor} hat die Gruppe verlassen',    // {actor} left
        'member_join' => '{actor} ist beigetreten',              // {actor} joined
        'call' => '{actor} hat einen Anruf gestartet, der {duration} dauerte', // {actor} started a call that lasted {duration}
        'call_missed' => 'Sie haben einen Anruf von {actor} verpasst', // You missed a call from {actor}
        'group_rename' => '{actor} hat die Gruppe « {name} » genannt', // {actor} named the group « {name} »
        'group_icon' => '{actor} hat das Gruppensymbol geändert', // {actor} changed the group icon
        'group_create' => '{actor} hat die Gruppe erstellt',     // {actor} created the group
        'owner_change' => '{target} ist jetzt der Eigentümer',  // {target} is now the owner
        'friend' => '{actor} und {target} sind jetzt befreundet', // {actor} and {target} are now friends
        'like' => '{actor} hat {n} Nachricht( en ) insgesamt {x} Mal mit „Gefällt mir“ markiert', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'EMOJIS SUCHEN...',           // SEARCH EMOJIS...
        'not_found' => 'KEINE EMOJIS GEFUNDEN',   // NO EMOJIS FOUND
        'recents' => 'ZULETZT VERWENDETE EMOJIS', // RECENT EMOJIS
        'smileys' => 'SMILEYS UND EMOTIONEN',     // SMILEYS AND EMOTION
        'people' => 'MENSCHEN UND KÖRPER',       // PEOPLE AND BODY
        'animals' => 'TIERE UND NATUR',           // ANIMALS AND NATURE
        'food' => 'ESSEN UND TRINKEN',            // FOOD AND DRINK
        'activities' => 'AKTIVITÄTEN',           // ACTIVITIES
        'travel' => 'REISEN & ORTE',              // TRAVEL & PLACES
        'objects' => 'OBJEKTE',                   // OBJECTS
        'symbols' => 'SYMBOLE',                   // SYMBOLS
        'flags' => 'FLAGGEN',                     // FLAGS
        'custom' => 'BENUTZERDEFINIERT',          // CUSTOM
        'user' => 'IHRE EMOJIS',                  // YOUR EMOJIS
        'tabs_emojis' => 'EMOJIS',                // EMOJIS
        'tabs_gifs' => 'GIFS',                    // GIFS
    ],

    'gif' => [
        'tab_history' => 'VERLAUF',                     // HISTORY
        'tab_liked' => 'GEFÄLLT MIR',                  // LIKED
        'tab_tenor' => 'GIFS',                          // GIFS
        'search' => 'GIFS SUCHEN...',                   // SEARCH GIFS...
        'loading' => 'Wird geladen...',                 // Loading...
        'error' => 'GIFs konnten nicht geladen werden', // Could not load GIFs
        'empty' => 'Hier ist noch nichts',              // Nothing here yet
        'powered_by' => 'Bereitgestellt von KLIPY',     // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Bild anpassen',                              // Adjust image
        'apply' => 'Anwenden',                                   // Apply
        'cancel' => 'Abbrechen',                                 // Cancel
        'zoom' => 'Zoom',                                        // Zoom
        'trim' => 'Zuschneiden',                                 // Trim
        'processing' => 'Wird verarbeitet…',                   // Processing…
        'drag_hint' => 'Ziehen zum Verschieben · Scrollen zum Zoomen', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Schließen',               // Close
        'download' => 'Herunterladen',         // Download
        'open_original' => 'Original öffnen', // Open original
    ],

    'image' => [
        'change' => 'Ändern',                // Change
        'view' => 'Ansehen',                  // View
        'revert' => 'Zurücksetzen',          // Revert
        'uploading' => 'Wird hochgeladen…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'Nicht autorisiert',          // Unauthorized
        'invalid_pin' => 'Ungültiger PIN',             // Invalid PIN
        'user_not_found' => 'Benutzer nicht gefunden',  // User not found
        'talk_not_found' => 'Gespräch nicht gefunden', // Talk not found
        'invalid_talk' => 'Ungültiges Gespräch',      // Invalid talk
        'access_denied' => 'Zugriff verweigert',        // Access denied
    ],
];
