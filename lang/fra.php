<?php

$S = [
    'app' => [
        'name' => 'Prono', // Prono
    ],

    'nav' => [
        'home' => 'Accueil',                // Home
        'dms' => 'Messages directs',        // Direct Messages
        'groups' => 'Groupes',              // Groups
        'servers' => 'Serveurs',            // Servers
        'theatres' => 'Théâtres',         // Theatres
        'telegram' => 'Télégrammes',      // Telegrams
        'settings' => 'Paramètres',        // Settings
        'notifications' => 'Notifications', // Notifications
    ],

    'auth' => [
        'login_title' => 'CONNEXION',                            // LOG-IN
        'enlist_title' => 'INSCRIPTION',                         // EN-LIST
        'email_placeholder' => 'Adresse électronique',          // Electronic Mail
        'password_placeholder' => 'Mot de passe',                // Password
        'password_confirm_placeholder' => 'Confirmer le mot de passe', // Confirm Password
        'name_placeholder' => 'Nom affiché',                    // Display Name
        'login_button' => 'Entrer',                              // Enter
        'enlist_button' => 'Créer un compte',                   // Create Account
        'link_to_enlist' => 'Créer un compte',                  // Create account
        'link_to_login' => 'Déjà un compte',                   // Already have account
        'error_fill_fields' => 'Remplissez tous les champs',     // Fill all fields
        'error_invalid_credentials' => 'Identifiants invalides', // Invalid credentials
        'error_too_many' => 'Trop de tentatives. Veuillez patienter quelques minutes et réessayer.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'Le nom doit contenir entre 2 et 32 caractères', // Name must be 2-32 characters
        'error_invalid_email' => 'Format d’email invalide',    // Invalid email format
        'error_password_length' => 'Le mot de passe doit contenir au moins 8 caractères', // Password must be at least 8 characters
        'error_password_mismatch' => 'Les mots de passe ne correspondent pas', // Passwords do not match
        'error_email_exists' => 'Email déjà enregistré',      // Email already registered
        'error_email_banned' => 'Cet email est banni.',          // This mail is banned.
        'link_to_forgot' => 'J’ai oublié mon mot de passe',   // I forgot my password
        'download_client' => 'Télécharger le client Prono pour Windows', // Download Prono client for Windows
        'open_in_client' => 'Ouvrir dans le client',             // Open in client
        'forgot_title' => 'RÉINITIALISATION',                   // RE-SET
        'forgot_instruction' => 'Indiquez votre adresse électronique. Si elle est inscrite, un lien de réinitialisation lui sera envoyé.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Envoyer le lien de réinitialisation', // Send resetting link
        'forgot_sent' => 'Si cet email est inscrit, un lien de réinitialisation est en chemin. Consultez votre boîte de réception.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'La lettre n’a pas pu partir pour l’instant. Réessayez plus tard.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Retour à la connexion',             // Back to log-in
        'reset_title' => 'NOUVEAU MOT DE PASSE',                 // NEW PASS-WORD
        'reset_button' => 'Enregistrer et se connecter',         // Save & Log-in
        'reset_invalid' => 'Ce lien de réinitialisation est nul ou a expiré.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — réinitialisation du mot de passe', // Prono — pass-word reset
        'reset_mail_intro' => 'Quelqu’un a demandé à réinitialiser le mot de passe de ce compte Prono.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Définir un nouveau mot de passe',  // Set a new pass-word
        'reset_mail_ignore' => 'Si ce n’était pas vous, n’y prêtez pas attention. Ne répondez pas à cette lettre.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'Adresse électronique ou N°-I.P.', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Vous n’êtes pas encore entré la première fois. Ouvrez la lettre que nous vous avons envoyée.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Ce compte est verrouillé.',  // This account is locked.
        'enlist_check_mail' => 'Compte créé. Une lettre contenant votre N°-I.P. et un code d’entrée à usage unique est en chemin. Ouvrez-la pour entrer la première fois.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'PREMIÈRE ENTRÉE',                   // FIRST ENTRY
        'verify_instruction' => 'Reproduisez votre N°-I.P. et le code à quatre lettres figurant dans la lettre.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'N°-I.P.',                  // P.I.-№
        'verify_code_placeholder' => 'Code à quatre lettres',   // Four-letter code
        'verify_button' => 'Entrer',                             // Enter
        'verify_invalid_link' => 'Ce lien d’entrée est nul ou a expiré.', // This entry link is void or has expired.
        'verify_burnt' => 'Banni.',                              // Banned.
        'verify_mail_subject' => 'Prono — votre N°-I.P. et votre code d’entrée', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Bienvenue. Voici les clés de votre nouveau compte Prono.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'Votre N°-I.P.',             // Your P.I.-№
        'verify_mail_code_label' => 'Votre code d’entrée à usage unique', // Your one-time entry code
        'verify_mail_cta' => 'Entrer pour la première fois',    // Enter for the first time
        'verify_mail_warn' => 'Reproduisez les deux exactement sur la page d’entrée. Une seule erreur brûle le compte et verrouille l’email. Ne répondez pas à cette lettre.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Bienvenue, {name}',                       // Welcome, {name}
        'subtitle' => 'Sélectionnez une conversation dans la barre latérale ou commencez-en une nouvelle.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN : {pin}',                            // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Amis',                                       // Friends
        'count' => 'Amis ({count})',                             // Friends ({count})
        'empty' => 'Aucun ami pour le moment',                   // No friends yet
        'add_button' => 'Ajouter un ami',                        // Add Friend
        'status_friends' => 'Amis',                              // Friends
        'status_pending' => 'En attente',                        // Pending
        'status_declined' => 'Refusé',                          // Declined
        'status_blocked' => 'Bloqué',                           // Blocked
        'request_pending' => 'Demande en attente',               // Request Pending
        'accept' => 'Accepter',                                  // Accept
        'decline' => 'Refuser',                                  // Decline
        'retract' => 'Retirer',                                  // Retract
        'retract_confirm' => 'Retirer cette demande d’ami ? Elle sera annulée.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Messages directs',                           // Direct Messages
        'empty' => 'Ajoutez des amis pour commencer à discuter', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Serveurs',                       // Servers
        'count' => 'Serveurs ({count})',             // Servers ({count})
        'empty' => 'Rejoignez ou créez un serveur', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Théâtres',                               // Theatres
        'count' => 'Théâtres ({count})',                     // Theatres ({count})
        'empty' => 'Aucun théâtre',                          // No theatres
        'role_speaker' => 'INTERVENANT',                       // SPEAKER
        'role_listener' => 'AUDITEUR',                         // LISTENER
        'create' => 'Créer un théâtre',                     // Create Theatre
        'name_placeholder' => 'Nom du théâtre',              // Theatre name
        'add' => 'Ajouter un auditeur',                        // Add listener
        'settings' => 'Paramètres du théâtre',              // Theatre settings
        'leave' => 'Quitter le théâtre',                     // Leave theatre
        'leave_confirm' => 'Quitter ce théâtre ?',           // Leave this theatre?
        'rename_prompt' => 'Nouveau nom du théâtre',         // New theatre name
        'broadcast_placeholder' => 'Diffuser au théâtre...', // Broadcast to the theatre...
        'send' => 'Transmettre',                               // Transmit
        'no_friends_to_add' => 'Aucun ami à ajouter',         // No friends to add
        'promote' => 'Nommer INTERVENANT',                     // Make SPEAKER
        'demote' => 'Nommer AUDITEUR',                         // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Annuler',    // Cancel
        'yes' => 'Oui',           // Yes
        'no' => 'Non',            // No
        'confirm' => 'Confirmer', // Confirm
    ],

    'call' => [
        'start' => 'Appeler',                              // Call
        'incoming' => 'Appel de {name}',                   // Call from {name}
        'accept' => 'Accepter',                            // Accept
        'decline' => 'Refuser',                            // Decline
        'calling' => 'Appel en cours…',                  // Calling…
        'connecting' => 'Connexion…',                    // Connecting…
        'failed' => 'Connexion impossible (relais)',       // Could not connect (relay)
        'in_call' => 'En communication',                   // In call
        'mute' => 'Couper le micro',                       // Mute
        'unmute' => 'Activer le micro',                    // Unmute
        'hang_up' => 'Raccrocher',                         // Hang up
        'unavailable' => 'L’utilisateur est hors ligne', // User is offline
        'busy' => 'L’utilisateur est occupé',           // User is busy
        'declined' => 'Appel refusé',                     // Call declined
        'ended' => 'Appel terminé',                       // Call ended
        'mic_denied' => 'Accès au microphone refusé',    // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Actif en ce moment', // Now active
        'elapsed' => 'écoulé',           // elapsed
        'left' => 'restant',               // left
        'paused' => 'En pause.',           // Paused.
        'playing' => 'Joue à',            // Playing
        'streaming' => 'Diffuse',          // Streaming
        'listening' => 'Écoute',          // Listening
        'watching' => 'Regarde',           // Watching
        'competing' => 'Concourt',         // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Écrire un message...',          // Type a message...
        'filelarge' => 'Le fichier n°{n} est trop volumineux et ne peut pas être envoyé.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Téléversement {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'Vous êtes AUDITEUR',              // You are a LISTENER
        'edited' => '(modifié)',                                // (edited)
        'untrusten_media' => 'Média non fiable — cliquer pour charger', // Untrusted media — click to load
        'untrusten_media_confirm' => 'Êtes-vous sûr ? Cela charge le média directement depuis sa source, qui verra votre adresse IP.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'écrit...',                              // is typing...
        'are_typing' => 'écrivent...',                          // are typing...
        'replying_to' => 'Réponse à',                          // Replying to
        'like' => 'Aimer',                                       // Like
        'paste_too_long_as_file' => 'Ce message est trop long pour le chat. Voulez-vous l’envoyer comme fichier ?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Répondre',                                  // Reply
        'edit' => 'Modifier',                                    // Edit
        'delete' => 'Supprimer',                                 // Delete
        'copy' => 'Copier',                                      // Copy
        'copy_raw' => 'Copier le texte brut',                    // Copy raw
        'morethan10items' => 'Vous ne pouvez pas joindre plus de 10 fichiers.', // You can not embed more than 10 files !
        'overlayupload' => 'Relâchez pour intégrer le fichier', // Stop dragging to embed the file
        'unknown' => 'Inconnu',                                  // Unknown
        'said' => 'a dit',                                       // said
        'reply_said' => '{actor} a dit :',               // {actor} said :
        'reply_media' => '{kind} envoyé par {actor} à {time}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => 'Pièce jointe envoyée par {actor} à {time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Message d’origine indisponible', // Original message unavailable
        'media_image' => 'image',                        // image
        'media_video' => 'vidéo',                       // video
        'media_audio' => 'audio',                        // audio
        'media_file' => 'fichier',                       // file
        'download' => 'Cliquer pour télécharger le fichier envoyé', // Click to Down-load the Up-loaded file
        'create_group' => 'Créer un groupe',                    // Create Group
        'add_to_group' => 'Ajouter au groupe',                   // Add to Group
        'likes' => 'Mentions j’aime',                          // Likes
        'new_message_scroll_klick' => '{n} nouveau( x ) message( s )', // {n} new message( s )
        'liked_attachment' => 'Pièce jointe @ {time}',  // Attachment @ {time}
        'no_likes' => 'Aucun message aimé',                     // No liked messages
        'group_settings' => 'Paramètres du groupe',             // Group Settings
        'leave_group' => 'Quitter le groupe',                    // Leave Group
        'leave_confirm' => 'Quitter ce groupe ?',                // Leave this group?
        'go_to_latest' => 'Cliquer pour revenir au dernier message', // Click to go back to Latest chat
        'empty' => 'Aucun message pour le moment. Dites quelque chose pour commencer.', // No messages yet. Say something to get started.
        'load_failed' => 'Impossible de charger les messages. Cliquez pour réessayer.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Télégrammes',                 // Telegrams
        'received_title' => 'Télégrammes reçus', // Received Telegrams
        'empty' => 'Aucun télégramme',            // No telegrams
        'priority_routine' => 'ORDINAIRE',          // ROUTINE
        'priority_priority' => 'PRIORITAIRE',       // PRIORITY
        'priority_emergency' => 'URGENCE',          // EMERGENCY
    ],

    'profile' => [
        'pin_label' => 'PIN : {pin}',                        // PIN: {pin}
        'message_button' => 'Message',                       // Message
        'block_button' => 'Bloquer',                         // Block
        'unblock_button' => 'Débloquer',                    // Unblock
        'block_confirm' => 'Bloquer cet utilisateur ?',      // Block this user?
        'shared_friends' => 'Amis en commun',                // Shared Friends
        'shared_servers' => 'Serveurs en commun',            // Shared Servers
        'shared_theatres' => 'Théâtres en commun',         // Shared Theatres
        'no_shared_friends' => 'Aucun ami en commun',        // No shared friends
        'no_shared_servers' => 'Aucun serveur en commun',    // No shared servers
        'no_shared_theatres' => 'Aucun théâtre en commun', // No shared theatres
    ],

    'settings' => [
        'title' => 'Paramètres',                                // Settings
        'account_section' => 'Compte',                           // Account & Security
        'session_section' => 'Session',                          // Session
        'images_section' => 'Images',                            // Images
        'profile_section' => 'Profil',                           // Profile
        'description' => 'Description',                          // Description
        'description_placeholder' => 'Écrivez quelque chose à votre sujet…', // Write something about yourself…
        'description_preview' => 'Aperçu',                      // Preview
        'preview_profile' => 'Profil',                           // Profile
        'preview_friend' => 'Liste d’amis',                    // Friend list
        'preview_speaker' => 'Intervenant de théâtre',         // Theatre speaker
        'preview_chat' => 'Message de chat',                     // Chat message
        'language' => 'Langue',                                  // Language
        'lang_auto' => 'Automatique',                            // Automatic
        'dm' => 'Mode sombre',                                   // Dark Mode
        'appearance' => 'Apparence',                             // Appearance
        'rich_presence' => 'Autoriser la présence enrichie ?',  // Allow rich presence?
        'close' => 'Fermer',                                     // Close
        'your_pin' => 'Votre PIN',                               // Your PIN
        'your_pin_warn' => 'Votre PIN est un identifiant privé. Partagez-le uniquement avec des personnes de confiance.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Nom affiché',                        // Display Name
        'change_name' => 'Changer le nom',                       // Change Name
        'localsettings' => 'Paramètres régionaux',             // Locale
        'change_password' => 'Changer le mot de passe',          // Change Password
        'current_password' => 'Mot de passe actuel',             // Current Password
        'new_password' => 'Nouveau mot de passe',                // New Password
        'confirm_password' => 'Confirmer le mot de passe',       // Confirm Password
        'avatar' => 'Avatar',                                    // Avatar
        'ambiance' => 'Image d’ambiance',                      // Ambiance Image
        'upload_avatar' => 'Téléverser un avatar',             // Upload Avatar
        'upload_ambiance' => 'Téléverser une ambiance',        // Upload Ambiance
        'max_size' => 'Max 500 Ko',                              // Max 500 KB
        'logout' => 'Déconnexion',                              // Logout
        'logout_desc' => 'Mettre fin à la session en cours',    // End your current session
        'save' => 'Enregistrer',                                 // Save
        'saved' => 'Enregistré',                                // Saved
        'error_name_taken' => 'Nom déjà utilisé',             // Name already taken
        'error_wrong_password' => 'Mot de passe incorrect',      // Wrong password
        'error_file_too_large' => 'Fichier trop volumineux (max 500 Ko)', // File too large (max 500 KB)
        'error_invalid_file' => 'Type de fichier invalide',      // Invalid file type
        'notifications' => 'Notifications',                      // Notifications
        'global_mute' => 'Silence global',                       // Global Mute
        'notification_types' => 'Types de notifications',        // Notification Types
        'friend_requests' => 'Demandes d’amis',                // Friend Requests
        'muting_settings' => 'Paramètres de sourdine',  // Muting Settings
        'friend_mute' => 'Sourdine des notifications de demandes d’ami', // Friend request notification mute
        'friend_change_mute' => 'Sourdine des notifications de changements d’amis', // Friend change notification mute
        'message_mute' => 'Sourdine des notifications de messages', // Message notification mute
        'call_mute' => 'Sourdine des notifications d’appels', // Call notification mute
        'friend_changes' => 'Ami accepté ou supprimé', // Friend accepted or removed
        'direct_messages' => 'Messages directs',                 // Direct Messages
        'server_mentions' => 'Mentions',                 // Mentions
        'mention_mute_prompt' => 'Sourdine des notifications de mentions', // Mention notification mute
        'account_settings' => 'PARAMÈTRES DU COMPTE',           // ACCOUNT SETTINGS
        'current_email' => 'Adresse électronique actuelle',     // Current Electronic Mail
        'friend_request_filtering' => 'Filtrage des demandes d’amis', // Friend Request Filtering
        'filter_everyone' => 'Tout le monde',                    // Everyone
        'filter_fof' => 'Uniquement les amis d’amis',          // Only friends of friends
        'dm_permissions' => 'Permissions des messages directs',  // Direct Message Permissions
        'dm_server_members' => 'Autoriser les MP des membres du serveur', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Autoriser les MP des intervenants', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Autoriser les MP des auditeurs', // Allow DMs from Theatre listeners
        'dm_groups' => 'Autoriser les MP des groupes',           // Allow DMs from groups
        'dm_strangers' => 'Autoriser les messages directs d’inconnus', // Allow DMs from strangers
        'can_be_callen_by' => 'Autorisations de chat vocal', // Voice Chat Permissions
        'vc_server_members' => 'Autoriser les chats vocaux des membres du serveur', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Autoriser les chats vocaux des orateurs du théâtre', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Autoriser les chats vocaux des auditeurs du théâtre', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Autoriser les chats vocaux des groupes', // Allow Voice Chats from groups
        'vc_strangers' => 'Autoriser les chats vocaux d’inconnus', // Allow Voice Chats from strangers
        'chat_settings' => 'Paramètres du chat',        // Chat Settings
        'split_text_prompt' => 'Diviser les longs messages', // Split long messages
        'setting_apperance' => 'Afficher tous les paramètres sur une seule page', // Show all settings on one page
        'junicode_show_prompt' => 'Utiliser la version à empattements du site', // Use the serif version of the website
        'off_set' => 'Décalage horaire',                // Time offset
        'day_time_saving' => 'Heure d’été',          // Daylight saving time
        'session_management' => 'Gestion des sessions',          // Session Management
        'log_all_out' => 'DÉCONNECTER TOUTES LES SESSIONS',     // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Appareils',                        // Devices
        'this_device' => 'Cet appareil',                         // This device
        'log_out_device' => 'Déconnecter',                      // Log out
        'devices_empty' => 'Aucun appareil actif',               // No active devices
        'view_people' => 'Afficher les membres',                 // Show members
        'delete_account' => 'Supprimer le compte',               // Delete account
        'delete_account_confirm' => 'Rendre ce compte orphelin ? Votre nom, votre email et vos images sont effacés et ne peuvent pas être récupérés. Vos messages demeurent, attribués à un orphelin anonyme. Êtes-vous sûr ?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Groupes',                          // Groups
        'count' => 'Groupes ({count})',                // Groups ({count})
        'empty' => 'Aucun groupe pour le moment',      // No groups yet
        'group_of' => 'Groupe de : {names}',           // Group of : {names}
        'create' => 'Saisissez un nom pour le groupe', // Enter a name for the group
    ],

    'status' => [
        'online' => 'En ligne',               // Online
        'away' => 'Absent',                   // Away
        'dnd' => 'Ne pas déranger',          // Do Not Disturb
        'offline' => 'Hors ligne',            // Offline
        'set_status' => 'Définir le statut', // Set Status
    ],

    'notifications' => [
        'title' => 'Notifications',                              // Notifications
        'empty' => 'Aucune notification',                        // No notifications
        'friend_request' => '{name} vous a envoyé une demande d’ami', // {name} sent you a friend request
        'friend_accept' => 'Vous êtes maintenant ami avec {name}', // You are now friends with {name}
        'friend_remove' => '{name} vous a retiré de ses amis', // {name} removed you as a friend
        'mention' => '{name} vous a mentionné',         // {name} mentioned you
        'server_invite' => '{name} vous a invité sur {server}', // {name} invited you to {server}
        'mark_read' => 'Marquer comme lu',                       // Mark as read
        'clear_all' => 'Tout effacer',                           // Clear all
        'as_of' => 'En date du {date}',                          // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'nomutilisateur#1234',                  // username#1234
        'button' => 'Ajouter',                                   // Add
        'success' => 'Demande d’ami envoyée',                 // Friend request sent
        'error_not_found' => 'Utilisateur introuvable',          // User not found
        'error_invalid_format' => 'Utilisez le format : nomutilisateur#1234', // Use format: username#1234
        'error_self' => 'Impossible de vous ajouter vous-même', // Cannot add yourself
        'error_already_friends' => 'Déjà amis',                // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Paramètres',          // Settings
        'set_status' => 'Définir le statut', // Set Status
        'view_profile' => 'Voir le profil',   // View Profile
    ],

    'recent' => [
        'title' => 'Conversations récentes',            // Recent Conversations
        'empty' => 'Aucune conversation pour le moment', // No conversations yet
    ],

    'people' => [
        'title' => 'Personnes et serveurs', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Ouvrir le profil',                    // Open profile
        'read_all' => 'Tout marquer comme lu',                   // Read all
        'silence' => 'Mettre en sourdine',                       // Silence
        'unsilence' => 'Réactiver le son',                      // Unsilence
        'close' => 'Fermer',                                     // Close
        'remove_friend' => 'Supprimer l’ami',                  // Remove Friend
        'leave_group' => 'Quitter le groupe',                    // Leave group
        'remove_from_group' => 'Retirer du groupe',              // Remove from group
        'set_owner' => 'Nommer propriétaire',                   // Make owner
        'set_owner_confirm' => 'Nommer cette personne propriétaire ? Vous lui céderez vos droits de propriétaire.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Retirer cette personne du groupe ?', // Remove this person from the group?
        'block_confirm' => 'Bloquer cet utilisateur ? Vous ne vous verrez plus l’un l’autre.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} a ajouté {target}',            // {actor} added {target}
        'member_remove' => '{actor} a retiré {target}',         // {actor} removed {target}
        'member_leave' => '{actor} est parti',                   // {actor} left
        'member_join' => '{actor} a rejoint',                    // {actor} joined
        'call' => '{actor} a lancé un appel qui a duré {duration}', // {actor} started a call that lasted {duration}
        'call_missed' => 'Vous avez manqué un appel de {actor}', // You missed a call from {actor}
        'group_rename' => '{actor} a nommé le groupe « {name} »', // {actor} named the group « {name} »
        'group_icon' => '{actor} a changé l’icône du groupe', // {actor} changed the group icon
        'group_create' => '{actor} a créé le groupe',          // {actor} created the group
        'owner_change' => '{target} est désormais le propriétaire', // {target} is now the owner
        'friend' => '{actor} et {target} sont désormais amis',  // {actor} and {target} are now friends
        'like' => '{actor} a aimé {n} message( s ), {x} fois au total', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'RECHERCHER DES ÉMOJIS...', // SEARCH EMOJIS...
        'not_found' => 'AUCUN ÉMOJI TROUVÉ',   // NO EMOJIS FOUND
        'recents' => 'ÉMOJIS RÉCENTS',         // RECENT EMOJIS
        'smileys' => 'FRIMOUSSES ET ÉMOTION',   // SMILEYS AND EMOTION
        'people' => 'PERSONNES ET CORPS',        // PEOPLE AND BODY
        'animals' => 'ANIMAUX ET NATURE',        // ANIMALS AND NATURE
        'food' => 'NOURRITURE ET BOISSON',       // FOOD AND DRINK
        'activities' => 'ACTIVITÉS',            // ACTIVITIES
        'travel' => 'VOYAGE ET LIEUX',           // TRAVEL & PLACES
        'objects' => 'OBJETS',                   // OBJECTS
        'symbols' => 'SYMBOLES',                 // SYMBOLS
        'flags' => 'DRAPEAUX',                   // FLAGS
        'custom' => 'PERSONNALISÉS',            // CUSTOM
        'user' => 'VOS ÉMOJIS',                 // YOUR EMOJIS
        'tabs_emojis' => 'ÉMOJIS',              // EMOJIS
        'tabs_gifs' => 'GIFS',                   // GIFS
    ],

    'gif' => [
        'tab_history' => 'HISTORIQUE',               // HISTORY
        'tab_liked' => 'AIMÉS',                     // LIKED
        'tab_tenor' => 'GIFS',                       // GIFS
        'search' => 'RECHERCHER DES GIFS...',        // SEARCH GIFS...
        'loading' => 'Chargement...',                // Loading...
        'error' => 'Impossible de charger les GIFs', // Could not load GIFs
        'empty' => 'Rien ici pour le moment',        // Nothing here yet
        'powered_by' => 'Propulsé par KLIPY',       // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Ajuster l’image',                          // Adjust image
        'apply' => 'Appliquer',                                  // Apply
        'cancel' => 'Annuler',                                   // Cancel
        'zoom' => 'Zoom',                                        // Zoom
        'trim' => 'Rogner',                                      // Trim
        'processing' => 'Traitement…',                         // Processing…
        'drag_hint' => 'Glisser pour repositionner · molette pour zoomer', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Fermer',                      // Close
        'download' => 'Télécharger',            // Download
        'open_original' => 'Ouvrir l’original', // Open original
    ],

    'image' => [
        'change' => 'Changer',               // Change
        'view' => 'Voir',                    // View
        'revert' => 'Rétablir',             // Revert
        'uploading' => 'Téléversement…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'Non autorisé',              // Unauthorized
        'invalid_pin' => 'PIN invalide',                // Invalid PIN
        'user_not_found' => 'Utilisateur introuvable',  // User not found
        'talk_not_found' => 'Conversation introuvable', // Talk not found
        'invalid_talk' => 'Conversation invalide',      // Invalid talk
        'access_denied' => 'Accès refusé',            // Access denied
    ],
];
