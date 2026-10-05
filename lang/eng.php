<?php

$S = [
    'app' => [
        'name' => 'Prono.', // Prono
    ],

    'nav' => [
        'home' => '‘ome.',                 // Home
        'dms' => 'Direct meßages.',        // Direct Messages
        'groups' => 'Fellowships.',          // Groups
        'servers' => 'Servers.',             // Servers
        'theatres' => 'Þeatres.',           // Theatres
        'telegram' => 'Tele‑grams.',       // Telegrams
        'settings' => 'Settings.',           // Settings
        'notifications' => 'Notifikations.', // Notifications
    ],

    'auth' => [
        'login_title' => 'LOG-IN.',                              // LOG-IN
        'enlist_title' => 'EN-LIST.',                            // EN-LIST
        'email_placeholder' => 'Electronic‑mail.',             // Electronic Mail
        'password_placeholder' => 'Paß‑word.',               // Password
        'password_confirm_placeholder' => 'Confirm Your Paß‑word.', // Confirm Password
        'name_placeholder' => 'Dys‑play name.',                // Display Name
        'login_button' => 'Enter.',                              // Enter
        'enlist_button' => 'Create akkount.',                    // Create Account
        'link_to_enlist' => 'Create akkount.',                   // Create account
        'link_to_login' => 'You All‑ready ‘ave an akkount.', // Already have account
        'error_fill_fields' => 'Fill All fields.',               // Fill all fields
        'error_invalid_credentials' => 'In‑valid credentials.', // Invalid credentials
        'error_too_many' => '',                                  // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'Name must be betwixt : 2 & 32 char.s.', // Name must be 2-32 characters
        'error_invalid_email' => 'In‑valid format mailes Electronic.', // Invalid email format
        'error_password_length' => 'Paß‑word must be at least 8 char.s.', // Password must be at least 8 characters
        'error_password_mismatch' => 'Paß‑words do not match Each oþer.', // Passwords do not match
        'error_email_exists' => 'All‑ready registered.',       // Email already registered
        'error_email_banned' => 'Þis Elektronikal adreß is bannen.', // This mail is banned.
        'link_to_forgot' => 'You forgot Þy Paß‑word',       // I forgot my password
        'download_client' => 'Klick ‘iþer fo to get þͤ applikation Desk‑topes for windows.', // Download Prono client for Windows
        'open_in_client' => 'Open in þͤ applikation',         // Open in client
        'forgot_title' => 'Re‑set',                            // RE-SET
        'forgot_instruction' => 'Write Þy Elektronikal adreß , should It be finden :‍— an link reskuͤes will be senden.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Send Re‑setting link.',            // Send resetting link
        'forgot_sent' => 'Should It be finden :‍— Reskuͤ link shall be on It’s way , check if addreß Given is right.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'Systems error , couldn’t be senden.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Re‑turn to log in.',               // Back to log-in
        'reset_title' => 'New‑Paß‑word.',                  // NEW PASS-WORD
        'reset_button' => 'Save & log in.',                    // Save & Log-in
        'reset_invalid' => 'Þis ‘yper‑link for Re‑setting Forgotten Paß‑word is In‑valid.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — Paß‑word Re‑set.', // Prono — pass-word reset
        'reset_mail_intro' => 'An request was senden for to Re‑set Paß‑word konnekten to akkount Þis‑adreßes.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Set a New Paß‑word.',           // Set a new pass-word
        'reset_mail_ignore' => 'If þͤ Intenden‑requestee was not Þee :‍— ignore Þis letter‑Senden. NO ACK NO ACK NO ACK NO ACK NO ACK NO ACK.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'Mail Elektronikal or P.I.‑№.', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Þe addreß needs Furðer verifikation as‑so please ref. to Our letter.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => '',                            // This account is locked.
        'enlist_check_mail' => 'An akkount is createn , an letter karryng Þy Private Platformwise‑Identifikation‑№ ‘as been senden wið an 1‑time‑use‑Temporary‑Paß‑word as‑þus use Þem to open þͤ akkount.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => '1ˢᵗ entrie.',                      // FIRST ENTRY
        'verify_instruction' => 'Write Þy P.I.‑№ above as‑wið þͤ Temporary‑Paß‑word.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.‑№',                // P.I.-№
        'verify_code_placeholder' => 'Temporary‑Paß‑word',  // Four-letter code
        'verify_button' => 'Enter',                              // Enter
        'verify_invalid_link' => 'Þis ‘yper‑link for 1ˢᵗ‑time entrie is In‑valid.', // This entry link is void or has expired.
        'verify_burnt' => 'Bannen.',                             // Banned.
        'verify_mail_subject' => 'Prono — Þy P.I.-№ wiþ þͤ kode entriees', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Greetings ; be‑low Þy information for entrance is given.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'Þy P.I.‑№.',            // Your P.I.-№
        'verify_mail_code_label' => 'Þy Temporary‑Paß‑word.', // Your one-time entry code
        'verify_mail_cta' => 'Enter for þͤ 1ˢᵗ time.',     // Enter for the first time
        'verify_mail_warn' => 'Enter þͤ Given information as is wiþout changals to Þem , as ; Oney change will be cause banes for Þis adreß þence‑up‑on. NO ACK NO ACK NO ACK NO ACK NO ACK NO ACK.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
        'error_akkount_locked' => 'Þis akkount is locken.', // (not in base English)
    ],

    'welcome' => [
        'greeting' => 'Well‑come , {name}.',                  // Welcome, {name}
        'subtitle' => 'Select a conversation from þe Side‑bar or start a New one.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'P.I.‑№ : {pin}.',                   // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Friends.',                                   // Friends
        'count' => 'Friends ( {count} ).',                     // Friends ({count})
        'empty' => 'No friends yet.',                            // No friends yet
        'add_button' => 'Add a friend.',                         // Add Friend
        'status_friends' => 'Friends.',                          // Friends
        'status_pending' => 'Pending.',                          // Pending
        'status_declined' => 'Declinen.',                        // Declined
        'status_blocked' => 'Blocken.',                          // Blocked
        'request_pending' => 'Request pending.',                 // Request Pending
        'accept' => 'Aksept.',                                   // Accept
        'decline' => 'Decline.',                                 // Decline
        'retract' => 'Retract.',                                 // Retract
        'retract_confirm' => 'Retract Þis request friendshipes ? ‘twill be wið‑drawn.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Direct meßages.',                 // Direct Messages
        'empty' => 'Add friends to start meßaging.', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Servers.',                 // Servers
        'count' => 'Servers ( {count} ).',   // Servers ({count})
        'empty' => 'Join or create a server.', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Þeatres.',                                  // Theatres
        'count' => 'Þeatres ({count}).',                        // Theatres ({count})
        'empty' => 'No þeatres.',                               // No theatres
        'role_speaker' => 'Speaker.',                            // SPEAKER
        'role_listener' => 'Listener.',                          // LISTENER
        'create' => 'Kreate þeatre.',                           // Create Theatre
        'name_placeholder' => 'Þeatre name.',                   // Theatre name
        'add' => 'Add an listener.',                             // Add listener
        'settings' => 'Settings of þͤ þeatre.',              // Theatre settings
        'leave' => 'Leave þͤ þeatre.',                       // Leave theatre
        'leave_confirm' => 'Leave þͤ þeatre ?',             // Leave this theatre?
        'rename_prompt' => 'New name of þͤ þeatre.',         // New theatre name
        'broadcast_placeholder' => 'Speakal for þͤ listeners.', // Broadcast to the theatre...
        'send' => 'Send.',                                       // Transmit
        'no_friends_to_add' => 'No persons to add.',             // No friends to add
        'promote' => 'Promote to speaker.',                      // Make SPEAKER
        'demote' => 'Demote to listener.',                       // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Cancel.', // Cancel
        'yes' => 'Yay.',       // Yes
        'no' => 'Nay.',        // No
        'confirm' => '',       // Confirm
    ],

    'call' => [
        'start' => 'Kall.',                             // Call
        'incoming' => 'Kall from {name}.',              // Call from {name}
        'accept' => 'Aksept.',                          // Accept
        'decline' => 'Decline.',                        // Decline
        'calling' => 'Kalling…',                      // Calling…
        'connecting' => 'Konnekting…',                // Connecting…
        'failed' => 'ERR on konnekt.',                  // Could not connect (relay)
        'in_call' => 'In kall.',                        // In call
        'mute' => 'Mute.',                              // Mute
        'unmute' => 'Un‑mute.',                       // Unmute
        'hang_up' => 'Drop þͤ line.',                // Hang up
        'unavailable' => 'Off‑line callee.',          // User is offline
        'busy' => 'User is busy.',                      // User is busy
        'declined' => 'Call was declinen.',             // Call declined
        'ended' => 'Call was enden.',                   // Call ended
        'mic_denied' => 'Micro‑fone akseß denien.', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Aktiv',       // Now active
        'elapsed' => 'elapsen',     // elapsed
        'left' => 'leven',          // left
        'paused' => 'Pausen.',      // Paused.
        'playing' => 'Playing',     // Playing
        'streaming' => 'Streaming', // Streaming
        'listening' => 'Listening', // Listening
        'watching' => 'Watching',   // Watching
        'competing' => 'Kompeting', // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Write what one wants to tell to þe oþer( s ) down…', // Type a message...
        'filelarge' => 'Þe file þat is aßignt to № {n} is Too big , ergo ; We can not Up‑load It.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Up-loading {percentage} %.', // Up-loading {percentage} %
        'listener_notice' => 'You are a LISTENER.',              // You are a LISTENER
        'edited' => '( changen ).',                            // (edited)
        'untrusten_media' => '',                                 // Untrusted media — click to load
        'untrusten_media_confirm' => '',                         // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'is typing…',                           // is typing...
        'are_typing' => 'are typing…',                         // are typing...
        'replying_to' => 'Replying to',                          // Replying to
        'like' => 'Like.',                                       // Like
        'paste_too_long_as_file' => '‘ere‑in-known meßage is Too long for to be sent. Would one like to format It as a file Digital in‑stead ?.', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Replie.',                                    // Reply
        'edit' => 'Edit.',                                       // Edit
        'delete' => 'Delete.',                                   // Delete
        'copy' => 'Kopie.',                                      // Copy
        'copy_raw' => 'Kopie original.',                         // Copy raw
        'morethan10items' => 'One can not embed more þen 10 files.', // You can not embed more than 10 files !
        'overlayupload' => 'Stop dragging files ‘iþer for to embed þe file.', // Stop dragging to embed the file
        'unknown' => '不明.',                                  // Unknown
        'said' => 'said',                                        // said
        'reply_said' => '{actor} said :',                       // {actor} said :
        'reply_media' => '{actor}’s {kind} senden at {time}.', // {actor}’s sent {kind} at {time}
        'reply_attachment' => '{actor}’s attachment senden at {time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Original meßage is not available.', // Original message unavailable
        'media_image' => 'image',                                // image
        'media_video' => 'video',                                // video
        'media_audio' => 'audio',                                // audio
        'media_file' => 'file',                                  // file
        'download' => 'Click Me to Down-load þe Up-loaded file.', // Click to Down-load the Up-loaded file
        'create_group' => 'Create fellowship.',                  // Create Group
        'add_to_group' => 'Add to fellowship.',                  // Add to Group
        'likes' => 'Likes.',                                     // Likes
        'new_message_scroll_klick' => '{n} New meßage( s )',                        // {n} new message( s )
        'liked_attachment' => 'Attachment @ {time}.',                                // Attachment @ {time}
        'no_likes' => 'No liken meßages.',                      // No liked messages
        'group_settings' => 'Fellowship settings.',              // Group Settings
        'leave_group' => 'Leave fellowship.',                    // Leave Group
        'leave_confirm' => 'Leave Þis fellowship ?',           // Leave this group?
        'go_to_latest' => 'Click ‘iðer for to be akkompanied back to þe Latest situation.', // Click to go back to Latest chat
        'empty' => 'Þis channel lacks Prior konversations.',    // No messages yet. Say something to get started.
        'load_failed' => 'Loading of meßages fole , Re‑trie.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Tele‑grams.',                    // Telegrams
        'received_title' => 'Received Tele‑graphs.', // Received Telegrams
        'empty' => 'No Tele‑graphs.',                // No telegrams
        'priority_routine' => 'ROUTINE.',              // ROUTINE
        'priority_priority' => 'PRIORITY.',            // PRIORITY
        'priority_emergency' => 'EMERGENCY.',          // EMERGENCY
    ],

    'profile' => [
        'pin_label' => 'P.I.‑№ : {pin}.',           // PIN: {pin}
        'message_button' => 'Meßage.',                  // Message
        'block_button' => 'Block.',                      // Block
        'unblock_button' => 'Un‑block.',               // Unblock
        'block_confirm' => 'Block Þis user ?',         // Block this user?
        'shared_friends' => 'Sharen friends.',           // Shared Friends
        'shared_servers' => 'Sharen servers.',           // Shared Servers
        'shared_theatres' => 'Sharen þeatres.',         // Shared Theatres
        'no_shared_friends' => 'No Sharen‑friends.',   // No shared friends
        'no_shared_servers' => 'No Sharen‑servers.',   // No shared servers
        'no_shared_theatres' => 'No Sharen‑þeatres.', // No shared theatres
    ],

    'settings' => [
        'title' => 'Settings.',                                  // Settings
        'account_section' => 'Account & Security',               // Account & Security
        'session_section' => 'Seßion.',                        // Session
        'images_section' => 'Images.',                           // Images
        'profile_section' => 'Profile.',                         // Profile
        'description' => 'Deskription.',                         // Description
        'description_placeholder' => 'Add Some‑þing for Þy deskription…', // Write something about yourself…
        'description_preview' => 'Pre‑view.',                  // Preview
        'preview_profile' => 'As User‑profile.',               // Profile
        'preview_friend' => 'In Friends‑list.',                // Friend list
        'preview_speaker' => 'As Þeatre speaker.',              // Theatre speaker
        'preview_chat' => 'In chat.',                            // Chat message
        'language' => 'Language.',                               // Language
        'lang_auto' => 'Automatik.',                             // Automatic
        'dm' => 'Dark mode.',                                    // Dark Mode
        'appearance' => 'Appearance.',                           // Appearance
        'rich_presence' => 'Allow Rich‑presence ?',           // Allow rich presence?
        'close' => 'Close.',                                     // Close
        'your_pin' => 'Your P.I.‑№.',                        // Your PIN
        'your_pin_warn' => 'Þe Platformwise‑Identification‑№ aßignen to Þee is an identifier Private. One ought for to share It only wiþ Trusten people.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'User‑name.',                        // Display Name
        'change_name' => 'Change User‑name.',                  // Change Name
        'localsettings' => 'Locale.',                            // Locale
        'change_password' => 'Change Paß‑word.',              // Change Password
        'current_password' => 'Current Paß‑word.',            // Current Password
        'new_password' => 'New Paß‑word.',                    // New Password
        'confirm_password' => 'Confirm New Paß‑word.',       // Confirm Password
        'avatar' => 'Avatar.',                                   // Avatar
        'ambiance' => 'Ambiance image.',                         // Ambiance Image
        'upload_avatar' => 'Up‑load Avatar.',                  // Upload Avatar
        'upload_ambiance' => 'Up‑load Ambiance.',              // Upload Ambiance
        'max_size' => 'Max. 500 KB.',                            // Max 500 KB
        'logout' => 'Log‑out.',                                // Logout
        'logout_desc' => 'End Þy Current‑seßion.',          // End your current session
        'save' => 'Save.',                                       // Save
        'saved' => 'Saven.',                                     // Saved
        'error_name_taken' => 'User‑name All‑ready taken.',  // Name already taken
        'error_wrong_password' => 'Wrong Paß‑word.',         // Wrong password
        'error_file_too_large' => 'File too large ( max. of 500 K.‑b. ).', // File too large (max 500 KB)
        'error_invalid_file' => 'In‑valid type files.',        // Invalid file type
        'notifications' => 'Notifikations.',                     // Notifications
        'global_mute' => 'Global mute.',                         // Global Mute
        'notification_types' => 'Notification types.',           // Notification Types
        'friend_requests' => 'Friend requests.',                 // Friend Requests
        'muting_settings' => 'Settings for muting.',                                 // Muting Settings
        'friend_mute' => 'Friend‑request‑notifikation mute.',                                     // Friend request notification mute
        'friend_change_mute' => 'Friend‑change‑notifikation mute.',                              // Friend change notification mute
        'message_mute' => 'Meßage‑notifikation mute.',                                    // Message notification mute
        'call_mute' => 'Kall‑notifikation mute.',                                       // Call notification mute
        'friend_changes' => 'Friendship : ⸄ aksepten or Re‑moven ⸅.',                                  // Friend accepted or removed
        'direct_messages' => 'Direkt meßages.',                // Direct Messages
        'server_mentions' => 'Server mentions.',                 // Mentions
        'mention_mute_prompt' => 'Mention‑notifikation mute.',                             // Mention notification mute
        'account_settings' => 'Account settings.',                                // ACCOUNT SETTINGS
        'current_email' => 'Current Electronic‑mail.',         // Current Electronic Mail
        'friend_request_filtering' => 'Friend‑request filtering.', // Friend Request Filtering
        'filter_everyone' => 'Aye‑persons.',                   // Everyone
        'filter_fof' => 'Onely friends of My friends.',          // Only friends of friends
        'dm_permissions' => 'Direct‑meßage permißions.',    // Direct Message Permissions
        'dm_server_members' => 'Allow Direct‑meßages from members serveres.', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Allow Direct‑meßages from Þeatre speakers.', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Allow Direct‑meßages from Þeatre listeners.', // Allow DMs from Theatre listeners
        'dm_groups' => 'Allow Direct‑meßages from fellowships.', // Allow DMs from groups
        'dm_strangers' => 'Allow Direct‑meßages from strangers.',                                    // Allow DMs from strangers
        'can_be_callen_by' => 'Kan be kallen by whom ?',                                // Voice Chat Permissions
        'vc_server_members' => 'Server members.',                               // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Þeatre speakers.',                             // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Þeatre listeners.',                            // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Fellowships.',                                       // Allow Voice Chats from groups
        'vc_strangers' => 'Strangers.',                                    // Allow Voice Chats from strangers
        'chat_settings' => 'Chat settings.',                                   // Chat Settings
        'split_text_prompt' => 'Split Long meßages.',                               // Split long messages
        'setting_apperance' => 'Singel‑Settings‑page mode shall be on ?',                               // Show all settings on one page
        'junicode_show_prompt' => 'Use an Serif font ?',                            // Use the serif version of the website
        'off_set' => 'Time‑Off‑set.',                                         // Time offset
        'day_time_saving' => 'DST',                                 // Daylight saving time
        'session_management' => 'Seßion management.',          // Session Management
        'log_all_out' => 'Clear seßion.',                       // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Apparrats.',                       // Devices
        'this_device' => 'Þis apparrat.',                       // This device
        'log_out_device' => 'Log out.',                          // Log out
        'devices_empty' => 'No Aktiv‑apparat.',                // No active devices
        'view_people' => 'Show members.',                        // Show members
        'delete_account' => 'Delete þͤ akkount',              // Delete account
        'delete_account_confirm' => 'Orfan Þis akkount ? Þy : ⸄ name , mail , & piktures ⸅ will be erasen and‑þen be not rekoverable — Þy meßage will remain :‍— þough attributen to an Orfanen‑akkount , so ; Are You sure ?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
        'akkount_section' => 'akkount & sekuritie.', // (not in base English)
        'akkount_settings' => 'akkount SETTINGS.', // (not in base English)
        'delete_akkount' => 'Orfan þͤ akkount.', // (not in base English)
        'delete_akkount_confirm' => 'Readie to orfan þͤ akkount ? ⸄ name , addreß , & piktures ⸅ Þis‑akkountes will be changen to þat of an orfan as‑so alike þͤ meßages’ remainal kontinuͤ under þͤ Orfan‑name You will not be able to recover þis. Are You sure ?  ', // (not in base English)
    ],

    'groups' => [
        'title' => 'Fellowships.',                         // Groups
        'count' => 'Fellowships ( {count} )',            // Groups ({count})
        'empty' => 'No fellowships yet.',                  // No groups yet
        'group_of' => 'Fellowship of : {names}.',          // Group of : {names}
        'create' => 'Enter an name for þͤ fellowship.', // Enter a name for the group
    ],

    'status' => [
        'online' => 'On‑line.',      // Online
        'away' => 'Away.',             // Away
        'dnd' => 'Shan’t disturb.',  // Do Not Disturb
        'offline' => 'Off‑line.',    // Offline
        'set_status' => 'Set status.', // Set Status
    ],

    'notifications' => [
        'title' => 'Notifications.',                             // Notifications
        'empty' => 'No notifications.',                          // No notifications
        'friend_request' => '{name} sent Þee a request Friendship.', // {name} sent you a friend request
        'friend_accept' => 'You are now friends wiþ {name}.',   // You are now friends with {name}
        'friend_remove' => '',                                   // {name} removed you as a friend
        'mention' => '',                                         // {name} mentioned you
        'server_invite' => '{name} invited You to {server}.',    // {name} invited you to {server}
        'mark_read' => 'Mark as „ read „.',                // Mark as read
        'clear_all' => 'Clear all.',                             // Clear all
        'as_of' => 'As of {date}.',                              // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'name#1234.',                           // username#1234
        'button' => 'Add.',                                      // Add
        'success' => 'Friendship request sent.',                 // Friend request sent
        'error_not_found' => 'User not found.',                  // User not found
        'error_invalid_format' => 'Use format þe Following format : name#1234.', // Use format: username#1234
        'error_self' => 'One refrain from adding Þem‑selves.', // Cannot add yourself
        'error_already_friends' => 'All‑ready friends.',                           // Already friends
        'error_All‑ready_friends' => 'All‑ready friends.', // (not in base English)
    ],

    'hover_profile' => [
        'settings' => 'Settings.',         // Settings
        'set_status' => 'Set status.',     // Set Status
        'view_profile' => 'View profile.', // View Profile
    ],

    'recent' => [
        'title' => 'Recent conversations.', // Recent Conversations
        'empty' => 'No conversations yet.', // No conversations yet
    ],

    'people' => [
        'title' => 'People & servers.', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Open profile.',                       // Open profile
        'read_all' => 'Read all.',                               // Read all
        'silence' => 'Silence.',                                 // Silence
        'unsilence' => 'Un‑silence.',                          // Unsilence
        'close' => 'Klose.',                                     // Close
        'remove_friend' => 'Re‑move friend.',                  // Remove Friend
        'leave_group' => 'Leave þͤ group',                    // Leave group
        'remove_from_group' => 'Re‑move from group.',          // Remove from group
        'set_owner' => 'Make owner.',                            // Make owner
        'set_owner_confirm' => 'Make Þis person þͤ owner ? You will be ‘anding Þyne Owner‑rights to Þem over.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Re‑move Þis person from þͤ group ?', // Remove this person from the group?
        'block_confirm' => 'Shall be blocken ? You will not see Each oþer.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} odd {target}.',                 // {actor} added {target}
        'member_remove' => '{actor} Re‑meve {target}.',        // {actor} removed {target}
        'member_leave' => '{actor} leve.',                       // {actor} left
        'member_join' => '{actor} jen.',                         // {actor} joined
        'call' => '{actor} stert an kall who for {duration} lest.',                       // {actor} started a call that lasted {duration}
        'call_missed' => 'You moß an call from {actor}.',           // You missed a call from {actor}
        'group_rename' => '{actor} nome þͤ group „ {name} „.', // {actor} named the group « {name} »
        'group_icon' => '{actor} choonge þͤ ikon groupes.',   // {actor} changed the group icon
        'group_create' => '{actor} croote þͤ group.',         // {actor} created the group
        'owner_change' => '{target} is now þͤ owner.',        // {target} is now the owner
        'friend' => '{actor} & {target} are now friends.',     // {actor} and {target} are now friends
        'like' => '{actor} loke {n} meßage( s ) {x} time( s ).', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'SEARCH EMOJIS...',    // SEARCH EMOJIS...
        'not_found' => 'NO EMOJIS FINDEN', // NO EMOJIS FOUND
        'recents' => 'RECENT EMOJIS',      // RECENT EMOJIS
        'smileys' => 'SMILEYS ET EMOTION', // SMILEYS AND EMOTION
        'people' => 'PEOPLE ET BODY',      // PEOPLE AND BODY
        'animals' => 'ANIMALS ET NATURE',  // ANIMALS AND NATURE
        'food' => 'FOOD ET DRINK',         // FOOD AND DRINK
        'activities' => 'ACTIVITIES',      // ACTIVITIES
        'travel' => 'TRAVEL ET PLACES',    // TRAVEL & PLACES
        'objects' => 'OBJECTS',            // OBJECTS
        'symbols' => 'SYMBOLS',            // SYMBOLS
        'flags' => 'FLAGS',                // FLAGS
        'custom' => 'KUSTOM',              // CUSTOM
        'user' => 'ÞYNE EMOJIS',          // YOUR EMOJIS
        'tabs_emojis' => 'EMOJIS',         // EMOJIS
        'tabs_gifs' => 'GIFS',             // GIFS
    ],

    'gif' => [
        'tab_history' => '‘ISTORIE',      // HISTORY
        'tab_liked' => 'LIKENS',            // LIKED
        'tab_tenor' => 'GIFS',              // GIFS
        'search' => 'SEARCH GIFS',          // SEARCH GIFS...
        'loading' => 'Loading…',          // Loading...
        'error' => 'Failure of loading.',   // Could not load GIFs
        'empty' => 'Empty yet.',            // Nothing here yet
        'powered_by' => 'Serven by KLIPY.', // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Adjust þͤ image.',                        // Adjust image
        'apply' => 'Applie.',                                    // Apply
        'cancel' => 'Kancel.',                                   // Cancel
        'zoom' => 'Zoom.',                                       // Zoom
        'trim' => 'Trim.',                                       // Trim
        'processing' => 'Proceßing…',                         // Processing…
        'drag_hint' => '⸄ Re‑positioning & skrolling ⸅ by : ⸄ dragging & skrolling ⸅.', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Klose.',                 // Close
        'download' => 'V',                   // Download
        'open_original' => 'Open original.', // Open original
    ],

    'image' => [
        'change' => 'Change.',            // Change
        'view' => 'View.',                // View
        'revert' => 'Revert.',            // Revert
        'uploading' => 'Up‑loading…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'Un‑auþorisen.',             // Unauthorized
        'invalid_pin' => 'In‑valid P.I.‑№.',        // Invalid PIN
        'user_not_found' => 'User couldn’t be finden.', // User not found
        'talk_not_found' => 'Talk couldn’t be finden.', // Talk not found
        'invalid_talk' => 'In‑valid talk.',             // Invalid talk
        'access_denied' => 'Acceß denien.',              // Access denied
    ],
];
