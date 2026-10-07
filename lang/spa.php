<?php

$S = [
    'app' => [
        'name' => 'Prono', // Prono
    ],

    'nav' => [
        'home' => 'Inicio',                  // Home
        'dms' => 'Mensajes directos',        // Direct Messages
        'groups' => 'Grupos',                // Groups
        'servers' => 'Servidores',           // Servers
        'theatres' => 'Teatros',             // Theatres
        'telegram' => 'Telegramas',          // Telegrams
        'settings' => 'Configuración',      // Settings
        'notifications' => 'Notificaciones', // Notifications
    ],

    'auth' => [
        'login_title' => 'INICIAR SESIÓN',                      // LOG-IN
        'enlist_title' => 'REGISTRARSE',                         // EN-LIST
        'email_placeholder' => 'Correo electrónico',            // Electronic Mail
        'password_placeholder' => 'Contraseña',                 // Password
        'password_confirm_placeholder' => 'Confirmar contraseña', // Confirm Password
        'name_placeholder' => 'Nombre visible',                  // Display Name
        'login_button' => 'Entrar',                              // Enter
        'enlist_button' => 'Crear cuenta',                       // Create Account
        'link_to_enlist' => 'Crear cuenta',                      // Create account
        'link_to_login' => 'Ya tengo una cuenta',                // Already have account
        'error_fill_fields' => 'Rellena todos los campos',       // Fill all fields
        'error_invalid_credentials' => 'Credenciales no válidas', // Invalid credentials
        'error_too_many' => 'Demasiados intentos. Espera unos minutos e inténtalo de nuevo.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'El nombre debe tener entre 2 y 32 caracteres', // Name must be 2-32 characters
        'error_invalid_email' => 'Formato de correo no válido', // Invalid email format
        'error_password_length' => 'La contraseña debe tener al menos 8 caracteres', // Password must be at least 8 characters
        'error_password_mismatch' => 'Las contraseñas no coinciden', // Passwords do not match
        'error_email_exists' => 'Este correo ya está registrado', // Email already registered
        'error_email_banned' => 'Este correo está prohibido.',  // This mail is banned.
        'link_to_forgot' => 'Olvidé mi contraseña',            // I forgot my password
        'download_client' => 'Descargar el cliente de Prono para Windows', // Download Prono client for Windows
        'open_in_client' => 'Abrir en el cliente',               // Open in client
        'forgot_title' => 'RESTABLECER',                         // RE-SET
        'forgot_instruction' => 'Escribe tu correo electrónico. Si está registrado, un enlace de restablecimiento viaja hacia él.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Enviar enlace de restablecimiento',  // Send resetting link
        'forgot_sent' => 'Si ese correo está registrado, un enlace de restablecimiento va en camino. Revisa tu bandeja de entrada.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'La carta no pudo salir ahora. Inténtalo de nuevo más tarde.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Volver a iniciar sesión',           // Back to log-in
        'reset_title' => 'NUEVA CONTRASEÑA',                    // NEW PASS-WORD
        'reset_button' => 'Guardar e iniciar sesión',           // Save & Log-in
        'reset_invalid' => 'Este enlace de restablecimiento es nulo o ha caducado.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Prono — restablecimiento de contraseña', // Prono — pass-word reset
        'reset_mail_intro' => 'Alguien pidió restablecer la contraseña de esta cuenta de Prono.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Establecer una contraseña nueva',  // Set a new pass-word
        'reset_mail_ignore' => 'Si no fuiste tú, no le des importancia. No respondas a esta carta.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'Correo electrónico o P.I.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Todavía no has entrado por primera vez. Abre la carta que te enviamos.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Esta cuenta está bloqueada.', // This account is locked.
        'enlist_check_mail' => 'Cuenta creada. Una carta con tu P.I.-№ y un código de entrada de un solo uso va en camino. Ábrela para entrar por primera vez.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'PRIMERA ENTRADA',                     // FIRST ENTRY
        'verify_instruction' => 'Reproduce tu P.I.-№ y el código de cuatro letras de la carta.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'P.I.-№',                  // P.I.-№
        'verify_code_placeholder' => 'Código de cuatro letras', // Four-letter code
        'verify_button' => 'Entrar',                             // Enter
        'verify_invalid_link' => 'Este enlace de entrada es nulo o ha caducado.', // This entry link is void or has expired.
        'verify_burnt' => 'Prohibido.',                          // Banned.
        'verify_mail_subject' => 'Prono — tu P.I.-№ y tu código de entrada', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Te damos la bienvenida. Aquí tienes las llaves de tu nueva cuenta de Prono.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'Tu P.I.-№',                // Your P.I.-№
        'verify_mail_code_label' => 'Tu código de entrada de un solo uso', // Your one-time entry code
        'verify_mail_cta' => 'Entrar por primera vez',           // Enter for the first time
        'verify_mail_warn' => 'Reproduce ambos exactamente en la página de entrada. Un solo trazo equivocado quema la cuenta y bloquea el correo. No respondas a esta carta.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Te damos la bienvenida, {name}',          // Welcome, {name}
        'subtitle' => 'Elige una conversación en la barra lateral o empieza una nueva.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Amigos',                                     // Friends
        'count' => 'Amigos ({count})',                           // Friends ({count})
        'empty' => 'Aún no hay amigos',                         // No friends yet
        'add_button' => 'Añadir amigo',                         // Add Friend
        'status_friends' => 'Amigos',                            // Friends
        'status_pending' => 'Pendiente',                         // Pending
        'status_declined' => 'Rechazada',                        // Declined
        'status_blocked' => 'Bloqueado',                         // Blocked
        'request_pending' => 'Solicitud pendiente',              // Request Pending
        'accept' => 'Aceptar',                                   // Accept
        'decline' => 'Rechazar',                                 // Decline
        'retract' => 'Retirar',                                  // Retract
        'retract_confirm' => '¿Retirar esta solicitud de amistad? Será retirada.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Mensajes directos',                    // Direct Messages
        'empty' => 'Añade amigos para empezar a chatear', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Servidores',                      // Servers
        'count' => 'Servidores ({count})',            // Servers ({count})
        'empty' => 'Únete a un servidor o crea uno', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Teatros',                                 // Theatres
        'count' => 'Teatros ({count})',                       // Theatres ({count})
        'empty' => 'No hay teatros',                          // No theatres
        'role_speaker' => 'ORADOR',                           // SPEAKER
        'role_listener' => 'OYENTE',                          // LISTENER
        'create' => 'Crear teatro',                           // Create Theatre
        'name_placeholder' => 'Nombre del teatro',            // Theatre name
        'add' => 'Añadir oyente',                            // Add listener
        'settings' => 'Configuración del teatro',            // Theatre settings
        'leave' => 'Salir del teatro',                        // Leave theatre
        'leave_confirm' => '¿Salir de este teatro?',         // Leave this theatre?
        'rename_prompt' => 'Nuevo nombre del teatro',         // New theatre name
        'broadcast_placeholder' => 'Transmitir al teatro…', // Broadcast to the theatre...
        'send' => 'Transmitir',                               // Transmit
        'no_friends_to_add' => 'No hay amigos que añadir',   // No friends to add
        'promote' => 'Hacer ORADOR',                          // Make SPEAKER
        'demote' => 'Hacer OYENTE',                           // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Cancelar',   // Cancel
        'yes' => 'Sí',           // Yes
        'no' => 'No',             // No
        'confirm' => 'Confirmar', // Confirm
    ],

    'call' => [
        'start' => 'Llamar',                              // Call
        'incoming' => 'Llamada de {name}',                // Call from {name}
        'accept' => 'Aceptar',                            // Accept
        'decline' => 'Rechazar',                          // Decline
        'calling' => 'Llamando…',                       // Calling…
        'connecting' => 'Conectando…',                  // Connecting…
        'failed' => 'No se pudo conectar (relé)',        // Could not connect (relay)
        'in_call' => 'En llamada',                        // In call
        'mute' => 'Silenciar',                            // Mute
        'unmute' => 'Dejar de silenciar',                 // Unmute
        'hang_up' => 'Colgar',                            // Hang up
        'unavailable' => 'El usuario está desconectado', // User is offline
        'busy' => 'El usuario está ocupado',             // User is busy
        'declined' => 'Llamada rechazada',                // Call declined
        'ended' => 'Llamada finalizada',                  // Call ended
        'mic_denied' => 'Acceso al micrófono denegado',  // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Activo ahora',    // Now active
        'elapsed' => 'transcurrido',    // elapsed
        'left' => 'restante',           // left
        'paused' => 'En pausa.',        // Paused.
        'playing' => 'Jugando',         // Playing
        'streaming' => 'Transmitiendo', // Streaming
        'listening' => 'Escuchando',    // Listening
        'watching' => 'Viendo',         // Watching
        'competing' => 'Compitiendo',   // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Escribe un mensaje…',          // Type a message...
        'filelarge' => 'El archivo n.º {n} es demasiado grande, no se puede subir.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Subiendo {percentage} %',  // Up-loading {percentage} %
        'listener_notice' => 'Eres OYENTE',                      // You are a LISTENER
        'edited' => '(editado)',                                 // (edited)
        'untrusten_media' => 'Contenido multimedia no confiable — haz clic para cargarlo', // Untrusted media — click to load
        'untrusten_media_confirm' => '¿Seguro? Esto carga el contenido directamente desde su origen, que verá tu dirección IP.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'está escribiendo…',                   // is typing...
        'are_typing' => 'están escribiendo…',                 // are typing...
        'replying_to' => 'Respondiendo a',                       // Replying to
        'like' => 'Me gusta',                                    // Like
        'paste_too_long_as_file' => 'Este mensaje es demasiado largo para el chat. ¿Prefieres enviarlo como archivo?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Responder',                                  // Reply
        'edit' => 'Editar',                                      // Edit
        'delete' => 'Eliminar',                                  // Delete
        'copy' => 'Copiar',                                      // Copy
        'copy_raw' => 'Copiar texto sin formato',                // Copy raw
        'copied' => 'Copiado',                                   // Copied
        'morethan10items' => '¡No puedes incrustar más de 10 archivos!', // You can not embed more than 10 files !
        'overlayupload' => 'Deja de arrastrar para incrustar el archivo', // Stop dragging to embed the file
        'unknown' => 'Desconocido',                              // Unknown
        'said' => 'dijo',                                        // said
        'reply_said' => '{actor} dijo:',                         // {actor} said :
        'reply_media' => '{kind} enviado por {actor} a las {time}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => 'Adjunto enviado por {actor} a las {time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'El mensaje original no está disponible', // Original message unavailable
        'reply_far' => 'Demasiado arriba en el chat. Haz clic para ir allí.', // Too far up the chat. Click to go there.
        'media_image' => 'imagen',                               // image
        'media_video' => 'vídeo',                               // video
        'media_audio' => 'audio',                                // audio
        'media_file' => 'archivo',                               // file
        'download' => 'Haz clic para descargar el archivo subido', // Click to Down-load the Up-loaded file
        'create_group' => 'Crear grupo',                         // Create Group
        'add_to_group' => 'Añadir al grupo',                    // Add to Group
        'likes' => 'Me gusta',                                   // Likes
        'new_message_scroll_klick' => '{n} mensajes nuevos',     // {n} new message( s )
        'liked_attachment' => 'Adjunto @ {time}',                // Attachment @ {time}
        'no_likes' => 'No hay mensajes que te gusten',           // No liked messages
        'group_settings' => 'Configuración del grupo',          // Group Settings
        'leave_group' => 'Salir del grupo',                      // Leave Group
        'leave_confirm' => '¿Salir de este grupo?',             // Leave this group?
        'go_to_latest' => 'Haz clic para volver al chat más reciente', // Click to go back to Latest chat
        'empty' => 'Aún no hay mensajes. Di algo para empezar.', // No messages yet. Say something to get started.
        'load_failed' => 'No se pudieron cargar los mensajes. Haz clic para reintentar.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Telegramas',                    // Telegrams
        'received_title' => 'Telegramas recibidos', // Received Telegrams
        'empty' => 'No hay telegramas',             // No telegrams
        'priority_routine' => 'ORDINARIO',          // ROUTINE
        'priority_priority' => 'PRIORITARIO',       // PRIORITY
        'priority_emergency' => 'EMERGENCIA',       // EMERGENCY
    ],

    'profile' => [
        'details' => 'Detalles del perfil',                   // Profile details
        'pin_label' => 'PIN: {pin}',                          // PIN: {pin}
        'message_button' => 'Mensaje',                        // Message
        'block_button' => 'Bloquear',                         // Block
        'unblock_button' => 'Desbloquear',                    // Unblock
        'block_confirm' => '¿Bloquear a este usuario?',      // Block this user?
        'shared_friends' => 'Amigos en común',               // Shared Friends
        'shared_servers' => 'Servidores en común',           // Shared Servers
        'shared_theatres' => 'Teatros en común',             // Shared Theatres
        'no_shared_friends' => 'No hay amigos en común',     // No shared friends
        'no_shared_servers' => 'No hay servidores en común', // No shared servers
        'no_shared_theatres' => 'No hay teatros en común',   // No shared theatres
    ],

    'settings' => [
        'title' => 'Configuración',                             // Settings
        'account_section' => 'Cuenta y seguridad',               // Account & Security
        'session_section' => 'Sesión',                          // Session
        'images_section' => 'Imágenes',                         // Images
        'profile_section' => 'Perfil',                           // Profile
        'description' => 'Descripción',                         // Description
        'description_placeholder' => 'Escribe algo sobre ti…', // Write something about yourself…
        'description_preview' => 'Vista previa',                 // Preview
        'preview_profile' => 'Perfil',                           // Profile
        'preview_friend' => 'Lista de amigos',                   // Friend list
        'preview_speaker' => 'Orador del teatro',                // Theatre speaker
        'preview_chat' => 'Mensaje de chat',                     // Chat message
        'language' => 'Idioma',                                  // Language
        'lang_auto' => 'Automático',                            // Automatic
        'dm' => 'Modo oscuro',                                   // Dark Mode
        'appearance' => 'Apariencia',                            // Appearance
        'rich_presence' => '¿Permitir presencia enriquecida?',  // Allow rich presence?
        'close' => 'Cerrar',                                     // Close
        'your_pin' => 'Tu PIN',                                  // Your PIN
        'your_pin_warn' => 'Tu PIN es un identificador privado. Compártelo solo con fuentes de confianza.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Nombre visible',                      // Display Name
        'change_name' => 'Cambiar nombre',                       // Change Name
        'localsettings' => 'Configuración regional',            // Locale
        'change_password' => 'Cambiar contraseña',              // Change Password
        'current_password' => 'Contraseña actual',              // Current Password
        'new_password' => 'Contraseña nueva',                   // New Password
        'confirm_password' => 'Confirmar contraseña',           // Confirm Password
        'avatar' => 'Avatar',                                    // Avatar
        'ambiance' => 'Imagen de ambiente',                      // Ambiance Image
        'upload_avatar' => 'Subir avatar',                       // Upload Avatar
        'upload_ambiance' => 'Subir ambiente',                   // Upload Ambiance
        'max_size' => 'Máx. 500 KB',                            // Max 500 KB
        'logout' => 'Cerrar sesión',                            // Logout
        'logout_desc' => 'Finaliza tu sesión actual',           // End your current session
        'save' => 'Guardar',                                     // Save
        'saved' => 'Guardado',                                   // Saved
        'error_name_taken' => 'El nombre ya está en uso',       // Name already taken
        'error_wrong_password' => 'Contraseña incorrecta',      // Wrong password
        'error_file_too_large' => 'Archivo demasiado grande (máx. 500 KB)', // File too large (max 500 KB)
        'error_invalid_file' => 'Tipo de archivo no válido',    // Invalid file type
        'notifications' => 'Notificaciones',                     // Notifications
        'global_mute' => 'Silencio global',                      // Global Mute
        'notification_types' => 'Tipos de notificación',        // Notification Types
        'friend_requests' => 'Solicitudes de amistad',           // Friend Requests
        'muting_settings' => 'Configuración de silencio',       // Muting Settings
        'friend_mute' => 'Silenciar notificaciones de solicitudes de amistad', // Friend request notification mute
        'friend_change_mute' => 'Silenciar notificaciones de cambios de amigos', // Friend change notification mute
        'message_mute' => 'Silenciar notificaciones de mensajes', // Message notification mute
        'call_mute' => 'Silenciar notificaciones de llamadas',   // Call notification mute
        'friend_changes' => 'Amigo aceptado o eliminado',        // Friend accepted or removed
        'direct_messages' => 'Mensajes directos',                // Direct Messages
        'server_mentions' => 'Menciones',                        // Mentions
        'mention_mute_prompt' => 'Silenciar notificaciones de menciones', // Mention notification mute
        'account_settings' => 'CONFIGURACIÓN DE LA CUENTA',     // ACCOUNT SETTINGS
        'current_email' => 'Correo electrónico actual',         // Current Electronic Mail
        'friend_request_filtering' => 'Filtro de solicitudes de amistad', // Friend Request Filtering
        'filter_everyone' => 'Todos',                            // Everyone
        'filter_fof' => 'Solo amigos de amigos',                 // Only friends of friends
        'dm_permissions' => 'Permisos de mensajes directos',     // Direct Message Permissions
        'dm_server_members' => 'Permitir mensajes directos de miembros del servidor', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Permitir mensajes directos de oradores del teatro', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Permitir mensajes directos de oyentes del teatro', // Allow DMs from Theatre listeners
        'dm_groups' => 'Permitir mensajes directos de grupos',   // Allow DMs from groups
        'dm_strangers' => 'Permitir mensajes directos de desconocidos', // Allow DMs from strangers
        'can_be_callen_by' => 'Permisos de chat de voz',         // Voice Chat Permissions
        'vc_server_members' => 'Permitir chats de voz de miembros del servidor', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Permitir chats de voz de oradores del teatro', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Permitir chats de voz de oyentes del teatro', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Permitir chats de voz de grupos',        // Allow Voice Chats from groups
        'vc_strangers' => 'Permitir chats de voz de desconocidos', // Allow Voice Chats from strangers
        'chat_settings' => 'Configuración del chat',            // Chat Settings
        'split_text_prompt' => 'Dividir mensajes largos',        // Split long messages
        'setting_apperance' => 'Mostrar toda la configuración en una página', // Show all settings on one page
        'junicode_show_prompt' => 'Usar la versión con serifa del sitio web', // Use the serif version of the website
        'maru_marks' => 'Usar las versiones maru (círculo)',    // Use the maru versions
        'off_set' => 'Desfase horario',                          // Time offset
        'day_time_saving' => 'Horario de verano',                // Daylight saving time
        'session_management' => 'Gestión de sesiones',          // Session Management
        'log_all_out' => 'CERRAR TODAS LAS SESIONES [ FINALIZAR TODAS LAS SESIONES ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Dispositivos',                     // Devices
        'this_device' => 'Este dispositivo',                     // This device
        'log_out_device' => 'Cerrar sesión',                    // Log out
        'devices_empty' => 'No hay dispositivos activos',        // No active devices
        'view_people' => 'Mostrar miembros',                     // Show members
        'delete_account' => 'Eliminar cuenta',                   // Delete account
        'delete_account_confirm' => '¿Dejar esta cuenta huérfana? Tu nombre, correo e imágenes se borran y no se pueden recuperar. Tus mensajes permanecen, atribuidos a un huérfano anónimo. ¿Seguro?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Grupos',                           // Groups
        'count' => 'Grupos ({count})',                 // Groups ({count})
        'empty' => 'Aún no hay grupos',               // No groups yet
        'group_of' => 'Grupo de: {names}',             // Group of : {names}
        'create' => 'Escribe un nombre para el grupo', // Enter a name for the group
    ],

    'status' => [
        'online' => 'En línea',             // Online
        'away' => 'Ausente',                 // Away
        'dnd' => 'No molestar',              // Do Not Disturb
        'offline' => 'Desconectado',         // Offline
        'set_status' => 'Establecer estado', // Set Status
    ],

    'notifications' => [
        'title' => 'Notificaciones',                             // Notifications
        'empty' => 'No hay notificaciones',                      // No notifications
        'friend_request' => '{name} te envió una solicitud de amistad', // {name} sent you a friend request
        'friend_accept' => 'Ahora eres amigo de {name}',         // You are now friends with {name}
        'friend_remove' => '{name} te eliminó de sus amigos',   // {name} removed you as a friend
        'mention' => '{name} te mencionó',                      // {name} mentioned you
        'server_invite' => '{name} te invitó a {server}',       // {name} invited you to {server}
        'mark_read' => 'Marcar como leído',                     // Mark as read
        'clear_all' => 'Borrar todo',                            // Clear all
        'as_of' => 'A fecha de {date}',                          // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'username#1234',                        // username#1234
        'button' => 'Añadir',                                   // Add
        'success' => 'Solicitud de amistad enviada',             // Friend request sent
        'error_not_found' => 'Usuario no encontrado',            // User not found
        'error_invalid_format' => 'Usa el formato: username#1234', // Use format: username#1234
        'error_self' => 'No puedes añadirte a ti mismo',        // Cannot add yourself
        'error_already_friends' => 'Ya son amigos',              // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Configuración',      // Settings
        'set_status' => 'Establecer estado', // Set Status
        'view_profile' => 'Ver perfil',      // View Profile
    ],

    'recent' => [
        'title' => 'Conversaciones recientes',   // Recent Conversations
        'empty' => 'Aún no hay conversaciones', // No conversations yet
    ],

    'people' => [
        'title' => 'Personas y servidores', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Abrir perfil',                        // Open profile
        'read_all' => 'Marcar todo como leído',                 // Read all
        'silence' => 'Silenciar',                                // Silence
        'unsilence' => 'Dejar de silenciar',                     // Unsilence
        'close' => 'Cerrar',                                     // Close
        'remove_friend' => 'Eliminar amigo',                     // Remove Friend
        'leave_group' => 'Salir del grupo',                      // Leave group
        'remove_from_group' => 'Quitar del grupo',               // Remove from group
        'set_owner' => 'Hacer propietario',                      // Make owner
        'set_owner_confirm' => '¿Hacer propietaria a esta persona? Cederás tus derechos de propietario.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => '¿Quitar a esta persona del grupo?', // Remove this person from the group?
        'block_confirm' => '¿Bloquear a este usuario? Ya no se verán mutuamente.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} añadió a {target}',           // {actor} added {target}
        'member_remove' => '{actor} quitó a {target}',          // {actor} removed {target}
        'member_leave' => '{actor} salió',                      // {actor} left
        'member_join' => '{actor} se unió',                     // {actor} joined
        'call' => '{actor} inició una llamada que duró {duration}', // {actor} started a call that lasted {duration}
        'call_missed' => 'Perdiste una llamada de {actor}',      // You missed a call from {actor}
        'group_rename' => '{actor} nombró al grupo « {name} »', // {actor} named the group « {name} »
        'group_icon' => '{actor} cambió el icono del grupo',    // {actor} changed the group icon
        'group_create' => '{actor} creó el grupo',              // {actor} created the group
        'owner_change' => '{target} es ahora propietario',       // {target} is now the owner
        'friend' => '{actor} y {target} ahora son amigos',       // {actor} and {target} are now friends
        'like' => 'A {actor} le gustaron {n} mensajes, {x} veces en total', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'BUSCAR EMOJIS…',            // SEARCH EMOJIS...
        'not_found' => 'NO SE ENCONTRARON EMOJIS', // NO EMOJIS FOUND
        'recents' => 'EMOJIS RECIENTES',           // RECENT EMOJIS
        'smileys' => 'CARAS Y EMOCIONES',          // SMILEYS AND EMOTION
        'people' => 'PERSONAS Y CUERPO',           // PEOPLE AND BODY
        'animals' => 'ANIMALES Y NATURALEZA',      // ANIMALS AND NATURE
        'food' => 'COMIDA Y BEBIDA',               // FOOD AND DRINK
        'activities' => 'ACTIVIDADES',             // ACTIVITIES
        'travel' => 'VIAJES Y LUGARES',            // TRAVEL & PLACES
        'objects' => 'OBJETOS',                    // OBJECTS
        'symbols' => 'SÍMBOLOS',                  // SYMBOLS
        'flags' => 'BANDERAS',                     // FLAGS
        'custom' => 'PERSONALIZADOS',              // CUSTOM
        'user' => 'TUS EMOJIS',                    // YOUR EMOJIS
        'tabs_emojis' => 'EMOJIS',                 // EMOJIS
        'tabs_gifs' => 'GIFS',                     // GIFS
    ],

    'gif' => [
        'tab_history' => 'HISTORIAL',                // HISTORY
        'tab_liked' => 'ME GUSTAN',                  // LIKED
        'tab_tenor' => 'GIFS',                       // GIFS
        'search' => 'BUSCAR GIFS…',                // SEARCH GIFS...
        'loading' => 'Cargando…',                  // Loading...
        'error' => 'No se pudieron cargar los GIFs', // Could not load GIFs
        'empty' => 'Aún no hay nada aquí',         // Nothing here yet
        'powered_by' => 'Con tecnología de KLIPY',  // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Ajustar imagen',                             // Adjust image
        'apply' => 'Aplicar',                                    // Apply
        'cancel' => 'Cancelar',                                  // Cancel
        'zoom' => 'Zoom',                                        // Zoom
        'trim' => 'Recortar',                                    // Trim
        'processing' => 'Procesando…',                         // Processing…
        'drag_hint' => 'Arrastra para reposicionar · desplaza para ampliar', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Cerrar',                 // Close
        'download' => 'Descargar',           // Download
        'open_original' => 'Abrir original', // Open original
    ],

    'image' => [
        'change' => 'Cambiar',        // Change
        'view' => 'Ver',              // View
        'revert' => 'Revertir',       // Revert
        'uploading' => 'Subiendo…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'No autorizado',                 // Unauthorized
        'invalid_pin' => 'PIN no válido',                 // Invalid PIN
        'user_not_found' => 'Usuario no encontrado',       // User not found
        'talk_not_found' => 'Conversación no encontrada', // Talk not found
        'invalid_talk' => 'Conversación no válida',      // Invalid talk
        'access_denied' => 'Acceso denegado',              // Access denied
    ],
];
