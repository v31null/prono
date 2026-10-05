<?php

$S = [
    'app' => [
        'name' => 'Проно́', // Prono
    ],

    'nav' => [
        'home' => 'Главная',                  // Home
        'dms' => 'Личные сообщения',  // Direct Messages
        'groups' => 'Группы',                  // Groups
        'servers' => 'Серверы',               // Servers
        'theatres' => 'Театры',                // Theatres
        'telegram' => 'Телеграммы',        // Telegrams
        'settings' => 'Настройки',          // Settings
        'notifications' => 'Уведомления', // Notifications
    ],

    'auth' => [
        'login_title' => 'ВХОД',                             // LOG-IN
        'enlist_title' => 'РЕГИСТРАЦИЯ',              // EN-LIST
        'email_placeholder' => 'Электронная почта', // Electronic Mail
        'password_placeholder' => 'Пароль',                // Password
        'password_confirm_placeholder' => 'Подтвердите пароль', // Confirm Password
        'name_placeholder' => 'Отображаемое имя', // Display Name
        'login_button' => 'Войти',                          // Enter
        'enlist_button' => 'Создать аккаунт',      // Create Account
        'link_to_enlist' => 'Создать аккаунт',     // Create account
        'link_to_login' => 'Уже есть аккаунт',     // Already have account
        'error_fill_fields' => 'Заполните все поля', // Fill all fields
        'error_invalid_credentials' => 'Неверные данные', // Invalid credentials
        'error_too_many' => 'Слишком много попыток. Подождите несколько минут и попробуйте снова.', // Too many attempts. Please wait a few minutes and try again.
        'error_name_length' => 'Имя должно быть от 2 до 32 символов', // Name must be 2-32 characters
        'error_invalid_email' => 'Неверный формат почты', // Invalid email format
        'error_password_length' => 'Пароль должен быть не менее 8 символов', // Password must be at least 8 characters
        'error_password_mismatch' => 'Пароли не совпадают', // Passwords do not match
        'error_email_exists' => 'Почта уже зарегистрирована', // Email already registered
        'error_email_banned' => 'Эта почта заблокирована.', // This mail is banned.
        'link_to_forgot' => 'Я забыл пароль',        // I forgot my password
        'download_client' => 'Скачать клиент Прона́ для Windows', // Download Prono client for Windows
        'open_in_client' => 'Открыть в клиенте',  // Open in client
        'forgot_title' => 'СБРОС',                          // RE-SET
        'forgot_instruction' => 'Укажите вашу электронную почту. Если она зарегистрирована, ссылка для сброса придёт на неё.', // Give your electronic mail. If it is enlisted, a resetting link travels to it.
        'forgot_button' => 'Отправить ссылку для сброса', // Send resetting link
        'forgot_sent' => 'Если эта почта зарегистрирована, ссылка для сброса уже в пути. Проверьте входящие.', // If that mail is enlisted, a resetting link is on its way. Look in your inbox.
        'forgot_send_fail' => 'Письмо не удалось отправить сейчас. Попробуйте позже.', // The letter could not leave just now. Try again later.
        'back_to_login' => 'Назад ко входу',         // Back to log-in
        'reset_title' => 'НОВЫЙ ПАРОЛЬ',              // NEW PASS-WORD
        'reset_button' => 'Сохранить и войти',    // Save & Log-in
        'reset_invalid' => 'Эта ссылка для сброса недействительна или истекла.', // This resetting link is void or has expired.
        'reset_mail_subject' => 'Проно́ — сброс пароля', // Prono — pass-word reset
        'reset_mail_intro' => 'Кто-то запросил сброс пароля для этого аккаунта Прона́.', // Someone asked to reset the pass-word for this Prono account.
        'reset_mail_cta' => 'Задать новый пароль', // Set a new pass-word
        'reset_mail_ignore' => 'Если это были не вы, проигнорируйте письмо. Не отвечайте на него.', // If this was not you, pay it no mind. Do not reply to this letter.
        'identifier_placeholder' => 'Электронная почта или П.И.-№', // Electronic Mail or P.I.-№
        'error_not_verified' => 'Вы ещё не входили в первый раз. Откройте письмо, которое мы отправили.', // You have not entered the first time yet. Open the letter we sent you.
        'error_account_locked' => 'Этот аккаунт заблокирован.', // This account is locked.
        'enlist_check_mail' => 'Аккаунт создан. Письмо с вашим П.И.-№ и одноразовым кодом входа уже в пути. Откройте его, чтобы войти в первый раз.', // Account made. A letter carrying your P.I.-№ and a one-time entry code is on its way. Open it to enter the first time.
        'verify_title' => 'ПЕРВЫЙ ВХОД',               // FIRST ENTRY
        'verify_instruction' => 'Воспроизведите ваш П.И.-№ и четырёхбуквенный код из письма.', // Reproduce your P.I.-№ and the four-letter code from the letter.
        'verify_pin_placeholder' => 'П.И.-№',                // P.I.-№
        'verify_code_placeholder' => 'Четырёхбуквенный код', // Four-letter code
        'verify_button' => 'Войти',                         // Enter
        'verify_invalid_link' => 'Эта ссылка для входа недействительна или истекла.', // This entry link is void or has expired.
        'verify_burnt' => 'Заблокировано.',         // Banned.
        'verify_mail_subject' => 'Проно́ — ваш П.И.-№ и код входа', // Prono — your P.I.-№ and entry code
        'verify_mail_intro' => 'Добро пожаловать. Вот ключи к вашему новому аккаунту Прона́.', // Welcome. Here are the keys to your new Prono account.
        'verify_mail_pin_label' => 'Ваш П.И.-№',          // Your P.I.-№
        'verify_mail_code_label' => 'Ваш одноразовый код входа', // Your one-time entry code
        'verify_mail_cta' => 'Войти в первый раз', // Enter for the first time
        'verify_mail_warn' => 'Воспроизведите оба точно на странице входа. Одна ошибка сжигает аккаунт и блокирует почту. Не отвечайте на это письмо.', // Reproduce both exactly on the entry page. One wrong stroke burns the account and locks the mail. Do not reply to this letter.
    ],

    'welcome' => [
        'greeting' => 'Добро пожаловать, {name}', // Welcome, {name}
        'subtitle' => 'Выберите беседу на боковой панели или начните новую.', // Select a conversation from the sidebar or start a new one.
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
    ],

    'friends' => [
        'title' => 'Друзья',                               // Friends
        'count' => 'Друзья ({count})',                     // Friends ({count})
        'empty' => 'Пока нет друзей',               // No friends yet
        'add_button' => 'Добавить друга',           // Add Friend
        'status_friends' => 'Друзья',                      // Friends
        'status_pending' => 'Ожидает',                    // Pending
        'status_declined' => 'Отклонено',               // Declined
        'status_blocked' => 'Заблокирован',          // Blocked
        'request_pending' => 'Запрос ожидает',      // Request Pending
        'accept' => 'Принять',                            // Accept
        'decline' => 'Отклонить',                       // Decline
        'retract' => 'Отозвать',                         // Retract
        'retract_confirm' => 'Отозвать этот запрос в друзья? Он будет отменён.', // Retract this friend request? It will be withdrawn.
    ],

    'dms' => [
        'title' => 'Личные сообщения',            // Direct Messages
        'empty' => 'Добавьте друзей, чтобы начать общение', // Add friends to start messaging
    ],

    'servers' => [
        'title' => 'Серверы',                             // Servers
        'count' => 'Серверы ({count})',                   // Servers ({count})
        'empty' => 'Присоединитесь к серверу или создайте его', // Join or create a server
    ],

    'theatres' => [
        'title' => 'Театры',                               // Theatres
        'count' => 'Театры ({count})',                     // Theatres ({count})
        'empty' => 'Нет театров',                      // No theatres
        'role_speaker' => 'ГОВОРЯЩИЙ',                  // SPEAKER
        'role_listener' => 'СЛУШАТЕЛЬ',                 // LISTENER
        'create' => 'Создать театр',                 // Create Theatre
        'name_placeholder' => 'Название театра',   // Theatre name
        'add' => 'Добавить слушателя',          // Add listener
        'settings' => 'Настройки театра',         // Theatre settings
        'leave' => 'Покинуть театр',                // Leave theatre
        'leave_confirm' => 'Покинуть этот театр?', // Leave this theatre?
        'rename_prompt' => 'Новое название театра', // New theatre name
        'broadcast_placeholder' => 'Транслировать в театр...', // Broadcast to the theatre...
        'send' => 'Передать',                            // Transmit
        'no_friends_to_add' => 'Нет друзей для добавления', // No friends to add
        'promote' => 'Сделать ГОВОРЯЩИМ',        // Make SPEAKER
        'demote' => 'Сделать СЛУШАТЕЛЕМ',       // Make LISTENER
    ],

    'generic' => [
        'cancel' => 'Отмена',            // Cancel
        'yes' => 'Да',                       // Yes
        'no' => 'Нет',                      // No
        'confirm' => 'Подтвердить', // Confirm
    ],

    'call' => [
        'start' => 'Звонок',                               // Call
        'incoming' => 'Звонок от {name}',                // Call from {name}
        'accept' => 'Принять',                            // Accept
        'decline' => 'Отклонить',                       // Decline
        'calling' => 'Вызов…',                            // Calling…
        'connecting' => 'Соединение…',               // Connecting…
        'failed' => 'Не удалось соединиться (реле)', // Could not connect (relay)
        'in_call' => 'В разговоре',                    // In call
        'mute' => 'Выключить микрофон',         // Mute
        'unmute' => 'Включить микрофон',         // Unmute
        'hang_up' => 'Завершить',                       // Hang up
        'unavailable' => 'Пользователь не в сети', // User is offline
        'busy' => 'Пользователь занят',         // User is busy
        'declined' => 'Звонок отклонён',           // Call declined
        'ended' => 'Звонок завершён',              // Call ended
        'mic_denied' => 'Доступ к микрофону запрещён', // Microphone access denied
    ],

    'activity' => [
        'heading' => 'Сейчас активны', // Now active
        'elapsed' => 'прошло',                // elapsed
        'left' => 'осталось',               // left
        'paused' => 'На паузе.',             // Paused.
        'playing' => 'Играет',                // Playing
        'streaming' => 'Транслирует',    // Streaming
        'listening' => 'Слушает',            // Listening
        'watching' => 'Смотрит',             // Watching
        'competing' => 'Соревнуется',    // Competing
    ],

    'chat' => [
        'input_placeholder' => 'Введите сообщение...', // Type a message...
        'filelarge' => 'Файл № {n} слишком большой, загрузить нельзя.', // File No. {n} is too big, can not up-load.
        'previewuploadattachment' => 'Загрузка {percentage} %', // Up-loading {percentage} %
        'listener_notice' => 'Вы СЛУШАТЕЛЬ',          // You are a LISTENER
        'edited' => '(изменено)',                        // (edited)
        'untrusten_media' => 'Ненадёжные медиа — нажмите, чтобы загрузить', // Untrusted media — click to load
        'untrusten_media_confirm' => 'Вы уверены? Медиа будут загружены напрямую из источника, который увидит ваш IP-адрес.', // Are you sure? This loads the media straight from its source, which will see your IP address.
        'is_typing' => 'печатает...',                    // is typing...
        'are_typing' => 'печатают...',                   // are typing...
        'replying_to' => 'Ответ на',                      // Replying to
        'like' => 'Нравится',                            // Like
        'paste_too_long_as_file' => 'Это сообщение слишком длинное для чата. Отправить его как файл?', // This message is too long for chat. Would you like to send it as a file instead ?
        'reply' => 'Ответить',                           // Reply
        'edit' => 'Изменить',                            // Edit
        'delete' => 'Удалить',                            // Delete
        'copy' => 'Копировать',                        // Copy
        'copy_raw' => 'Копировать исходник',   // Copy raw
        'morethan10items' => 'Нельзя вложить более 10 файлов!', // You can not embed more than 10 files !
        'overlayupload' => 'Отпустите, чтобы вложить файл', // Stop dragging to embed the file
        'unknown' => 'Неизвестно',                     // Unknown
        'said' => 'сказал',                                // said
        'reply_said' => '{actor} сказал(а) :',    // {actor} said :
        'reply_media' => '{kind}, отправленное {actor} в {time}', // {actor}’s sent {kind} at {time}
        'reply_attachment' => 'Вложение, отправленное {actor} в {time}', // {actor}’s sent attachment at {time}
        'reply_unavailable' => 'Исходное сообщение недоступно', // Original message unavailable
        'media_image' => 'изображение',       // image
        'media_video' => 'видео',                   // video
        'media_audio' => 'аудио',                   // audio
        'media_file' => 'файл',                      // file
        'download' => 'Нажмите, чтобы скачать загруженный файл', // Click to Down-load the Up-loaded file
        'create_group' => 'Создать группу',         // Create Group
        'add_to_group' => 'Добавить в группу',    // Add to Group
        'likes' => 'Оценки',                               // Likes
        'new_message_scroll_klick' => '{n} нов( ое / ых ) сообщени( е / я / й )', // {n} new message( s )
        'liked_attachment' => 'Вложение @ {time}', // Attachment @ {time}
        'no_likes' => 'Нет оценённых сообщений', // No liked messages
        'group_settings' => 'Настройки группы',   // Group Settings
        'leave_group' => 'Покинуть группу',        // Leave Group
        'leave_confirm' => 'Покинуть эту группу?', // Leave this group?
        'go_to_latest' => 'Нажмите, чтобы вернуться к последним сообщениям', // Click to go back to Latest chat
        'empty' => 'Сообщений пока нет. Напишите что-нибудь, чтобы начать.', // No messages yet. Say something to get started.
        'load_failed' => 'Не удалось загрузить сообщения. Нажмите, чтобы повторить.', // Could not load messages. Click to retry.
    ],

    'telegram' => [
        'title' => 'Телеграммы',                       // Telegrams
        'received_title' => 'Полученные телеграммы', // Received Telegrams
        'empty' => 'Нет телеграмм',                  // No telegrams
        'priority_routine' => 'ОБЫЧНАЯ',                  // ROUTINE
        'priority_priority' => 'ПРИОРИТЕТНАЯ',       // PRIORITY
        'priority_emergency' => 'ЭКСТРЕННАЯ',          // EMERGENCY
    ],

    'profile' => [
        'pin_label' => 'PIN: {pin}',                             // PIN: {pin}
        'message_button' => 'Сообщение',                // Message
        'block_button' => 'Заблокировать',          // Block
        'unblock_button' => 'Разблокировать',      // Unblock
        'block_confirm' => 'Заблокировать этого пользователя?', // Block this user?
        'shared_friends' => 'Общие друзья',           // Shared Friends
        'shared_servers' => 'Общие серверы',         // Shared Servers
        'shared_theatres' => 'Общие театры',          // Shared Theatres
        'no_shared_friends' => 'Нет общих друзей', // No shared friends
        'no_shared_servers' => 'Нет общих серверов', // No shared servers
        'no_shared_theatres' => 'Нет общих театров', // No shared theatres
    ],

    'settings' => [
        'title' => 'Настройки',                         // Settings
        'account_section' => 'Аккаунт',                   // Account & Security
        'session_section' => 'Сессия',                     // Session
        'images_section' => 'Изображения',            // Images
        'profile_section' => 'Профиль',                   // Profile
        'description' => 'Описание',                     // Description
        'description_placeholder' => 'Напишите что-нибудь о себе…', // Write something about yourself…
        'description_preview' => 'Предпросмотр',     // Preview
        'preview_profile' => 'Профиль',                   // Profile
        'preview_friend' => 'Список друзей',         // Friend list
        'preview_speaker' => 'Говорящий в театре', // Theatre speaker
        'preview_chat' => 'Сообщение в чате',      // Chat message
        'language' => 'Язык',                                // Language
        'lang_auto' => 'Автоматически',             // Automatic
        'dm' => 'Тёмная тема',                         // Dark Mode
        'appearance' => 'Внешний вид',                 // Appearance
        'rich_presence' => 'Разрешить отображение активности?', // Allow rich presence?
        'close' => 'Закрыть',                             // Close
        'your_pin' => 'Ваш PIN',                              // Your PIN
        'your_pin_warn' => 'Ваш PIN — это личный идентификатор. Делитесь им только с доверенными источниками.', // Your PIN is a private identifier. Share only with trusted sources.
        'display_name' => 'Отображаемое имя',     // Display Name
        'change_name' => 'Изменить имя',              // Change Name
        'localsettings' => 'Локаль',                       // Locale
        'change_password' => 'Изменить пароль',    // Change Password
        'current_password' => 'Текущий пароль',     // Current Password
        'new_password' => 'Новый пароль',             // New Password
        'confirm_password' => 'Подтвердите пароль', // Confirm Password
        'avatar' => 'Аватар',                              // Avatar
        'ambiance' => 'Фоновое изображение',   // Ambiance Image
        'upload_avatar' => 'Загрузить аватар',    // Upload Avatar
        'upload_ambiance' => 'Загрузить фон',        // Upload Ambiance
        'max_size' => 'Макс. 500 КБ',                      // Max 500 KB
        'logout' => 'Выйти',                                // Logout
        'logout_desc' => 'Завершить текущую сессию', // End your current session
        'save' => 'Сохранить',                          // Save
        'saved' => 'Сохранено',                         // Saved
        'error_name_taken' => 'Имя уже занято',      // Name already taken
        'error_wrong_password' => 'Неверный пароль', // Wrong password
        'error_file_too_large' => 'Файл слишком большой (макс. 500 КБ)', // File too large (max 500 KB)
        'error_invalid_file' => 'Недопустимый тип файла', // Invalid file type
        'notifications' => 'УВЕДОМЛЕНИЯ',             // Notifications
        'global_mute' => 'Отключить все звуки', // Global Mute
        'notification_types' => 'Типы уведомлений', // Notification Types
        'friend_requests' => 'Запросы в друзья',   // Friend Requests
        'muting_settings' => 'Настройки отключения звука', // Muting Settings
        'friend_mute' => 'Отключить уведомления о заявках в друзья', // Friend request notification mute
        'friend_change_mute' => 'Отключить уведомления об изменениях в друзьях', // Friend change notification mute
        'message_mute' => 'Отключить уведомления о сообщениях', // Message notification mute
        'call_mute' => 'Отключить уведомления о звонках', // Call notification mute
        'friend_changes' => 'Друг принят или удалён', // Friend accepted or removed
        'direct_messages' => 'Личные сообщения',  // Direct Messages
        'server_mentions' => 'Упоминания',     // Mentions
        'mention_mute_prompt' => 'Отключить уведомления об упоминаниях', // Mention notification mute
        'account_settings' => 'НАСТРОЙКИ АККАУНТА', // ACCOUNT SETTINGS
        'current_email' => 'Текущая электронная почта', // Current Electronic Mail
        'friend_request_filtering' => 'Фильтрация запросов в друзья', // Friend Request Filtering
        'filter_everyone' => 'Все',                           // Everyone
        'filter_fof' => 'Только друзья друзей', // Only friends of friends
        'dm_permissions' => 'Разрешения личных сообщений', // Direct Message Permissions
        'dm_server_members' => 'Разрешить ЛС от участников сервера', // Allow DMs from Server Members
        'dm_theatre_speakers' => 'Разрешить ЛС от говорящих в театре', // Allow DMs from Theatre speakers
        'dm_theatre_listeners' => 'Разрешить ЛС от слушателей театра', // Allow DMs from Theatre listeners
        'dm_groups' => 'Разрешить ЛС из групп', // Allow DMs from groups
        'dm_strangers' => 'Разрешить личные сообщения от незнакомцев', // Allow DMs from strangers
        'can_be_callen_by' => 'Разрешения голосового чата', // Voice Chat Permissions
        'vc_server_members' => 'Разрешить голосовые чаты от участников сервера', // Allow Voice Chats from Server Members
        'vc_theatre_speakers' => 'Разрешить голосовые чаты от ораторов театра', // Allow Voice Chats from Theatre speakers
        'vc_theatre_listeners' => 'Разрешить голосовые чаты от слушателей театра', // Allow Voice Chats from Theatre listeners
        'vc_groups' => 'Разрешить голосовые чаты от групп', // Allow Voice Chats from groups
        'vc_strangers' => 'Разрешить голосовые чаты от незнакомцев', // Allow Voice Chats from strangers
        'chat_settings' => 'Настройки чата', // Chat Settings
        'split_text_prompt' => 'Разделять длинные сообщения', // Split long messages
        'setting_apperance' => 'Показывать все настройки на одной странице', // Show all settings on one page
        'junicode_show_prompt' => 'Использовать версию сайта с засечками', // Use the serif version of the website
        'off_set' => 'Смещение времени',  // Time offset
        'day_time_saving' => 'Летнее время',  // Daylight saving time
        'session_management' => 'Управление сессиями', // Session Management
        'log_all_out' => 'ВЫЙТИ ВЕЗДЕ [ ЗАВЕРШИТЬ ВСЕ СЕССИИ ]', // LOG ALL OUT [ END ALL SESSIONS ]
        'devices_section' => 'Устройства',             // Devices
        'this_device' => 'это устройство',          // This device
        'log_out_device' => 'Выйти',                        // Log out
        'devices_empty' => 'Нет активных устройств', // No active devices
        'view_people' => 'Показать участников', // Show members
        'delete_account' => 'Удалить аккаунт',     // Delete account
        'delete_account_confirm' => 'Осиротить этот аккаунт? Ваше имя, почта и изображения будут стёрты без возможности восстановления. Ваши сообщения останутся, приписанные анонимному сироте. Вы уверены?', // Orphan this account? Your name, mail and pictures are erased and cannot be recovered. Your messages remain, attributed to an anonymous orphan. Are you sure?
    ],

    'groups' => [
        'title' => 'Группы',                               // Groups
        'count' => 'Группы ({count})',                     // Groups ({count})
        'empty' => 'Пока нет групп',                 // No groups yet
        'group_of' => 'Группа: {names}',                   // Group of : {names}
        'create' => 'Введите название группы', // Enter a name for the group
    ],

    'status' => [
        'online' => 'В сети',                   // Online
        'away' => 'Отошёл',                    // Away
        'dnd' => 'Не беспокоить',        // Do Not Disturb
        'offline' => 'Не в сети',             // Offline
        'set_status' => 'Задать статус', // Set Status
    ],

    'notifications' => [
        'title' => 'Уведомления',                     // Notifications
        'empty' => 'Нет уведомлений',              // No notifications
        'friend_request' => '{name} отправил вам запрос в друзья', // {name} sent you a friend request
        'friend_accept' => 'Теперь вы друзья с {name}', // You are now friends with {name}
        'friend_remove' => '{name} удалил(а) вас из друзей', // {name} removed you as a friend
        'mention' => '{name} упомянул(а) вас', // {name} mentioned you
        'server_invite' => '{name} пригласил вас в {server}', // {name} invited you to {server}
        'mark_read' => 'Отметить прочитанным', // Mark as read
        'clear_all' => 'Очистить всё',                // Clear all
        'as_of' => 'По состоянию на {date}',        // As of {date}
    ],

    'add_friend' => [
        'placeholder' => 'имя#1234',                          // username#1234
        'button' => 'Добавить',                          // Add
        'success' => 'Запрос в друзья отправлен', // Friend request sent
        'error_not_found' => 'Пользователь не найден', // User not found
        'error_invalid_format' => 'Используйте формат: имя#1234', // Use format: username#1234
        'error_self' => 'Нельзя добавить себя', // Cannot add yourself
        'error_already_friends' => 'Уже друзья',        // Already friends
    ],

    'hover_profile' => [
        'settings' => 'Настройки',                // Settings
        'set_status' => 'Задать статус',       // Set Status
        'view_profile' => 'Открыть профиль', // View Profile
    ],

    'recent' => [
        'title' => 'Недавние беседы', // Recent Conversations
        'empty' => 'Пока нет бесед',    // No conversations yet
    ],

    'people' => [
        'title' => 'Люди и серверы', // People & Servers
    ],

    'action_menu' => [
        'open_profile' => 'Открыть профиль',       // Open profile
        'read_all' => 'Прочитать всё',               // Read all
        'silence' => 'Отключить уведомления', // Silence
        'unsilence' => 'Включить уведомления', // Unsilence
        'close' => 'Закрыть',                             // Close
        'remove_friend' => 'Удалить из друзей',   // Remove Friend
        'leave_group' => 'Покинуть группу',        // Leave group
        'remove_from_group' => 'Удалить из группы', // Remove from group
        'set_owner' => 'Сделать владельцем',    // Make owner
        'set_owner_confirm' => 'Сделать этого человека владельцем? Вы передадите свои права владельца.', // Make this person the owner? You will hand over your owner rights.
        'remove_from_group_confirm' => 'Удалить этого человека из группы?', // Remove this person from the group?
        'block_confirm' => 'Заблокировать этого пользователя? Вы больше не будете видеть друг друга.', // Block this user? You will no longer see each other.
    ],

    'system' => [
        'member_add' => '{actor} добавил {target}',       // {actor} added {target}
        'member_remove' => '{actor} удалил {target}',      // {actor} removed {target}
        'member_leave' => '{actor} покинул',              // {actor} left
        'member_join' => '{actor} присоединился',   // {actor} joined
        'call' => '{actor} начал(а) звонок, который длился {duration}', // {actor} started a call that lasted {duration}
        'call_missed' => 'Вы пропустили звонок от {actor}', // You missed a call from {actor}
        'group_rename' => '{actor} назвал группу « {name} »', // {actor} named the group « {name} »
        'group_icon' => '{actor} изменил значок группы', // {actor} changed the group icon
        'group_create' => '{actor} создал группу',   // {actor} created the group
        'owner_change' => 'Теперь {target} — владелец', // {target} is now the owner
        'friend' => '{actor} и {target} теперь друзья', // {actor} and {target} are now friends
        'like' => '{actor} оценил(а) {n} сообщени( е / я / й ), всего {x} раз( а )', // {actor} liked {n} message( s ), {x} time( s ) in total
    ],

    'emoji' => [
        'search' => 'ПОИСК ЭМОДЗИ...',           // SEARCH EMOJIS...
        'not_found' => 'ЭМОДЗИ НЕ НАЙДЕНЫ',  // NO EMOJIS FOUND
        'recents' => 'НЕДАВНИЕ ЭМОДЗИ',       // RECENT EMOJIS
        'smileys' => 'СМАЙЛИКИ И ЭМОЦИИ',    // SMILEYS AND EMOTION
        'people' => 'ЛЮДИ И ТЕЛО',                 // PEOPLE AND BODY
        'animals' => 'ЖИВОТНЫЕ И ПРИРОДА',  // ANIMALS AND NATURE
        'food' => 'ЕДА И НАПИТКИ',               // FOOD AND DRINK
        'activities' => 'АКТИВНОСТИ',             // ACTIVITIES
        'travel' => 'ПУТЕШЕСТВИЯ И МЕСТА', // TRAVEL & PLACES
        'objects' => 'ПРЕДМЕТЫ',                    // OBJECTS
        'symbols' => 'СИМВОЛЫ',                      // SYMBOLS
        'flags' => 'ФЛАГИ',                            // FLAGS
        'custom' => 'СВОИ',                             // CUSTOM
        'user' => 'ВАШИ ЭМОДЗИ',                  // YOUR EMOJIS
        'tabs_emojis' => 'ЭМОДЗИ',                    // EMOJIS
        'tabs_gifs' => 'GIF',                               // GIFS
    ],

    'gif' => [
        'tab_history' => 'ИСТОРИЯ',                       // HISTORY
        'tab_liked' => 'ПОНРАВИВШИЕСЯ',             // LIKED
        'tab_tenor' => 'GIF',                                    // GIFS
        'search' => 'ПОИСК GIF...',                         // SEARCH GIFS...
        'loading' => 'Загрузка...',                      // Loading...
        'error' => 'Не удалось загрузить GIF', // Could not load GIFs
        'empty' => 'Здесь пока ничего нет',    // Nothing here yet
        'powered_by' => 'Работает на KLIPY',           // Powered by KLIPY
    ],

    'crop' => [
        'title' => 'Настроить изображение',  // Adjust image
        'apply' => 'Применить',                         // Apply
        'cancel' => 'Отмена',                              // Cancel
        'zoom' => 'Масштаб',                              // Zoom
        'trim' => 'Обрезка',                              // Trim
        'processing' => 'Обработка…',                 // Processing…
        'drag_hint' => 'Перетащите для перемещения · прокрутка для масштаба', // Drag to reposition · scroll to zoom
    ],

    'viewer' => [
        'close' => 'Закрыть',                          // Close
        'download' => 'Скачать',                       // Download
        'open_original' => 'Открыть оригинал', // Open original
    ],

    'image' => [
        'change' => 'Изменить',       // Change
        'view' => 'Просмотр',         // View
        'revert' => 'Вернуть',         // Revert
        'uploading' => 'Загрузка…', // Uploading…
    ],

    'errors' => [
        'unauthorized' => 'Не авторизован',         // Unauthorized
        'invalid_pin' => 'Неверный PIN',                 // Invalid PIN
        'user_not_found' => 'Пользователь не найден', // User not found
        'talk_not_found' => 'Беседа не найдена',  // Talk not found
        'invalid_talk' => 'Недопустимая беседа', // Invalid talk
        'access_denied' => 'Доступ запрещён',      // Access denied
    ],
];
