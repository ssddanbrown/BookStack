<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Impostazioni',
    'settings_save' => 'Salva Impostazioni',
    'settings_save_success' => 'Impostazioni salvate',

    // App Settings
    'app_customization' => 'Personalizzazione',
    'app_features_security' => 'Funzioni & Sicurezza',
    'app_name' => 'Nome applicazione',
    'app_name_desc' => 'Questo nome è mostrato nell\'header e in tutte le mail.',
    'app_name_header' => 'Mostrare il nome nell\'header',
    'app_public_access' => 'Accesso Pubblico',
    'app_public_access_desc' => 'Abilitando questa opzione, i visitatori, che non sono loggati, potranno accedere ai contenuti nella tua istanza BookStack.',
    'app_public_access_desc_guest' => 'L\'accesso ai visitatori pubblici può essere controllato attraverso l\'utente "Guest".',
    'app_public_access_toggle' => 'Permetti accesso pubblico',
    'app_public_viewing' => 'Consentire la visione pubblica?',
    'app_secure_images' => 'Abilitare una sicurezza maggiore per le immagini caricate?',
    'app_secure_images_toggle' => 'Abilita sicurezza aggiuntiva negli upload delle immagini',
    'app_secure_images_desc' => 'Per una ragione di prestazioni, tutte le immagini sono pubbliche. Questa opzione aaggiunge una stringa, difficile da indovinare, random negli url delle immagini. Assicurati che il listing delle cartelle non sia abilitato per prevenire un accesso semplice.',
    'app_editor' => 'Editor pagine',
    'app_editor_desc' => 'Seleziona quale editor verrà usato da tutti gli utenti per modificare le pagine.',
    'app_custom_html' => 'Contenuto Head HTML Custom',
    'app_custom_html_desc' => 'Qualsiasi contenuto aggiunto qui verrà inserito alla fine della sezione <head> di tutte le pagine. Questo è utile per sovrascrivere lo stile o aggiungere il codice per gli analytics.',
    'app_custom_html_disabled_notice' => 'Il contenuto HTML personalizzato è disabilitato su questa pagina impostazioni per garantire che eventuali modifiche possano essere ripristinate.',
    'app_logo' => 'Logo applicazione',
    'app_logo_desc' => 'Questa immagine dovrebbe essere 43px in altezza. <br>Immagini più grandi verranno scalate.',
    'app_primary_color' => 'Colore primario applicazione',
    'app_primary_color_desc' => 'Deve essere un valore hex. <br>Lascia vuoto per reimpostare il colore di default.',
    'app_homepage' => 'Homepage Applicazione',
    'app_homepage_desc' => 'Seleziona una pagina da mostrare nella home anzichè quella di default. I permessi della pagina sono ignorati per quella selezionata.',
    'app_homepage_select' => 'Seleziona una pagina',
    'app_disable_comments' => 'Disattiva commenti',
    'app_disable_comments_toggle' => 'Disabilita commenti',
    'app_disable_comments_desc' => 'Disabilita i commenti su tutte le pagine nell\'applicazione. I commenti esistenti non sono mostrati. ',

    // Color settings
    'content_colors' => 'Colori del contenuto',
    'content_colors_desc' => 'Imposta i colori per tutti gli elementi nella gerarchia della pagina. È raccomandato scegliere colori con una luminosità simile a quelli di default per una maggiore leggibilità.',
    'bookshelf_color' => 'Colore delle libreria',
    'book_color' => 'Colore del libro',
    'chapter_color' => 'Colore del capitolo',
    'page_color' => 'Colore della Pagina',
    'page_draft_color' => 'Colore della bozza',

    // Registration Settings
    'reg_settings' => 'Impostazioni Registrazione',
    'reg_enable' => 'Abilita Registrazione',
    'reg_enable_toggle' => 'Abilita registrazione',
    'reg_enable_desc' => 'Quando la registrazione è abilitata, l\utente sarà in grado di registrarsi all\'applicazione. Al momento della registrazione gli verrà associato un ruolo utente predefinito.',
    'reg_default_role' => 'Ruolo predefinito dopo la registrazione',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Conferma Email',
    'reg_email_confirmation_toggle' => 'Richiedi conferma email',
    'reg_confirm_email_desc' => 'Se la restrizione per dominio è usata la conferma della mail sarà richiesta e la scelta ignorata.',
    'reg_confirm_restrict_domain' => 'Restringi la registrazione al dominio',
    'reg_confirm_restrict_domain_desc' => 'Inserisci una lista separata da virgola di domini di email a cui vorresti restringere la registrazione. Agli utenti verrà inviata una mail per confermare il loro indirizzo prima che possano interagire con l\'applicazione. <br> Nota che gli utenti saranno in grado di cambiare il loro indirizzo dopo aver completato la registrazione.',
    'reg_confirm_restrict_domain_placeholder' => 'Nessuna restrizione impostata',

    // Maintenance settings
    'maint' => 'Manutenzione',
    'maint_image_cleanup' => 'Pulizia Immagini',
    'maint_image_cleanup_desc' => "Esegue la scansione del contenuto delle pagine e delle revisioni per verificare quali immagini e disegni sono attualmente in uso e quali immagini sono ridondanti. Assicurati di creare backup completo del database e delle immagini prima di eseguire la pulizia.",
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Esegui Pulizia',
    'maint_image_cleanup_warning' => ':count immagini potenzialmente inutilizzate sono state trovate. Sei sicuro di voler eliminare queste immagini?',
    'maint_image_cleanup_success' => ':count immagini potenzialmente inutilizzate trovate e eliminate!',
    'maint_image_cleanup_nothing_found' => 'Nessuna immagine non utilizzata trovata, Nulla è stato cancellato!',
    'maint_send_test_email' => 'Invia un Email di Test',
    'maint_send_test_email_desc' => 'Questo invia un\'email di prova al tuo indirizzo email specificato nel tuo profilo.',
    'maint_send_test_email_run' => 'Invia email di test',
    'maint_send_test_email_success' => 'Email inviata a :address',
    'maint_send_test_email_mail_subject' => 'Email di Test',
    'maint_send_test_email_mail_greeting' => 'L\'invio delle email sembra funzionare!',
    'maint_send_test_email_mail_text' => 'Congratulazioni! Siccome hai ricevuto questa notifica email, le tue impostazioni sembrano essere configurate correttamente.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Ruoli',
    'role_user_roles' => 'Ruoli Utente',
    'role_create' => 'Crea Nuovo Ruolo',
    'role_create_success' => 'Ruolo creato correttamente',
    'role_delete' => 'Elimina Ruolo',
    'role_delete_confirm' => 'Questo eliminerà il ruolo con il nome \':roleName\'.',
    'role_delete_users_assigned' => 'Questo ruolo ha :userCount utenti assegnati. Se vuoi migrare gli utenti da questo ruolo selezionane uno nuovo sotto.',
    'role_delete_no_migration' => "Non migrare gli utenti",
    'role_delete_sure' => 'Sei sicuro di voler eliminare questo ruolo?',
    'role_delete_success' => 'Ruolo eliminato correttamente',
    'role_edit' => 'Modifica Ruolo',
    'role_details' => 'Dettagli Ruolo',
    'role_name' => 'Nome Ruolo',
    'role_desc' => 'Breve Descrizione del Ruolo',
    'role_external_auth_id' => 'ID Autenticazione Esterna',
    'role_system' => 'Permessi di Sistema',
    'role_manage_users' => 'Gestire gli utenti',
    'role_manage_roles' => 'Gestire ruoli e permessi di essi',
    'role_manage_entity_permissions' => 'Gestire tutti i permessi di libri, capitoli e pagine',
    'role_manage_own_entity_permissions' => 'Gestire i permessi sui propri libri, capitoli e pagine',
    'role_manage_page_templates' => 'Gestisci template pagine',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Gestire impostazioni app',
    'role_asset' => 'Permessi Entità',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'Questi permessi controllano l\'accesso di default alle entità. I permessi nei Libri, Capitoli e Pagine sovrascriveranno questi.',
    'role_asset_admins' => 'Gli amministratori hanno automaticamente accesso a tutti i contenuti ma queste opzioni possono mostrare o nascondere le opzioni della UI.',
    'role_all' => 'Tutti',
    'role_own' => 'Propri',
    'role_controlled_by_asset' => 'Controllato dall\'entità in cui sono caricati',
    'role_save' => 'Salva Ruolo',
    'role_update_success' => 'Ruolo aggiornato correttamente',
    'role_users' => 'Utenti in questo ruolo',
    'role_users_none' => 'Nessun utente assegnato a questo ruolo',

    // Users
    'users' => 'Utenti',
    'user_profile' => 'Profilo Utente',
    'users_add_new' => 'Aggiungi Nuovo Utente',
    'users_search' => 'Cerca Utenti',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'Dettagli Utente',
    'users_details_desc' => 'Imposta un nome e un indirizzo email per questo utente. L\'indirizzo email verrà utilizzato per accedere all\'applicazione.',
    'users_details_desc_no_email' => 'Imposta un nome per questo utente così gli altri possono riconoscerlo.',
    'users_role' => 'Ruoli Utente',
    'users_role_desc' => 'Seleziona a quali ruoli verrà assegnato questo utente. Se un utente è assegnato a più ruoli riceverà tutte le abilità dei ruoli assegnati.',
    'users_password' => 'Password Utente',
    'users_password_desc' => 'Imposta una password utilizzata per accedere all\'applicazione. Deve essere lunga almeno 6 caratteri.',
    'users_send_invite_text' => 'Puoi scegliere di inviare a questo utente un\'email di invito che permette loro di impostare la propria password altrimenti puoi impostare la password tu stesso.',
    'users_send_invite_option' => 'Invia email di invito',
    'users_external_auth_id' => 'ID Autenticazioni Esterna',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Riempi solo se desideri cambiare la tua password:',
    'users_system_public' => 'Questo utente rappresente qualsiasi ospite che visita il sito. Non può essere usato per effettuare il login ma è assegnato automaticamente.',
    'users_delete' => 'Elimina Utente',
    'users_delete_named' => 'Elimina l\'utente :userName',
    'users_delete_warning' => 'Questo eliminerà completamente l\'utente \':userName\' dal sistema.',
    'users_delete_confirm' => 'Sei sicuro di voler eliminare questo utente?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_delete_success' => 'User successfully removed',
    'users_edit' => 'Modifica Utente',
    'users_edit_profile' => 'Modifica Profilo',
    'users_edit_success' => 'Utente aggiornato correttamente',
    'users_avatar' => 'Avatar Utente',
    'users_avatar_desc' => 'Quest\'immagine dovrebbe essere approssimativamente 256px quadrata.',
    'users_preferred_language' => 'Lingua Preferita',
    'users_preferred_language_desc' => 'Questa opzione cambierà la lingua utilizzata per l\'interfaccia utente dell\'applicazione. Questo non influirà su alcun contenuto creato dall\'utente.',
    'users_social_accounts' => 'Account Social',
    'users_social_accounts_info' => 'Qui puoi connettere gli altri account per un accesso più veloce e semplice. Disconnettere un account qui non rimuoverà le altre sessioni. Revoca l\'accesso dal tuo profilo negli account social connessi.',
    'users_social_connect' => 'Connetti Account',
    'users_social_disconnect' => 'Disconnetti Account',
    'users_social_connected' => 'L\'account :socialAccount è stato connesso correttamente al tuo profilo.',
    'users_social_disconnected' => 'L\'account :socialAccount è stato disconnesso correttamente dal tuo profilo.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Crea Token',
    'users_api_tokens_expires' => 'Scade',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Crea Token API',
    'user_api_token_name' => 'Nome',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Data di scadenza',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Aggiornato :timeAgo',
    'user_api_token_updated' => 'Token Aggiornato :timeAgo',
    'user_api_token_delete' => 'Elimina Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Sei sicuri di voler eliminare questo token API?',
    'user_api_token_delete_success' => 'Token API eliminato correttamente',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Danese',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Sloveno',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
