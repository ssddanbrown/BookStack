<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ajustes',
    'settings_save' => 'Guardar ajustes',
    'settings_save_success' => 'Ajustes guardados',

    // App Settings
    'app_customization' => 'Personalización',
    'app_features_security' => 'Características & Seguridad',
    'app_name' => 'Nombre de la aplicación',
    'app_name_desc' => 'Este nombre se muestra en la cabecera y en cualquier correo electrónico',
    'app_name_header' => 'Mostrar el nombre de la aplicación en la cabecera',
    'app_public_access' => 'Acceso Público',
    'app_public_access_desc' => 'Activando esta opción permitirá que usuarios sin iniciar sesión puedan ver el contenido de tu aplicación Bookstack.',
    'app_public_access_desc_guest' => 'El acceso público para visitantes puede ser controlado a través del usuario "Guest".',
    'app_public_access_toggle' => 'Permitir acceso público',
    'app_public_viewing' => '¿Permitir acceso público?',
    'app_secure_images' => 'Mayor seguridad para subir imágenes',
    'app_secure_images_toggle' => 'Habilitar mayor seguridad en la subida de imágenes',
    'app_secure_images_desc' => 'Por razones de rendimiento, todas las imágenes son públicas. Esta opción agrega una cadena de texto larga difícil de adivinar. Asegúrese que los índices de directorio no están habilitados para evitar el acceso fácil a las imágenes.',
    'app_editor' => 'Editor de Páginas',
    'app_editor_desc' => 'Seleccione qué editor se usará por todos los usuarios para editar páginas.',
    'app_custom_html' => 'Contenido de cabecera HTML personalizado',
    'app_custom_html_desc' => 'Cualquier contenido agregado aquí será insertado al final de la sección <head> de cada página. Esto es útil para sobreescribir estilos o agregar código para analíticas web.',
    'app_custom_html_disabled_notice' => 'El contenido personalizado para la cabecera está deshabilitado en esta página de ajustes para permitir que cualquier cambio que rompa la funcionalidad pueda ser revertido.',
    'app_logo' => 'Logo de la Aplicación',
    'app_logo_desc' => 'Esta imagen debería de ser 43px de altura. <br> Las imágenes grandes serán escaladas.',
    'app_primary_color' => 'Color Primario de la Aplicación',
    'app_primary_color_desc' => 'Esto debería ser un valor hexadecimal. <br>Deje el valor vacío para restaurar al valor por defecto.',
    'app_homepage' => 'Página de inicio',
    'app_homepage_desc' => 'Elija la vista que se mostrará en la página de inicio en lugar de la vista predeterminada. Se ignorarán los permisos de la página seleccionada.',
    'app_homepage_select' => 'Elija una página',
    'app_disable_comments' => 'Deshabilitar Comentarios',
    'app_disable_comments_toggle' => 'Deshabilitar comentarios',
    'app_disable_comments_desc' => 'Deshabilita los comentarios en todas las páginas de la aplicación. <br> Los comentarios existentes no se muestran.',

    // Color settings
    'content_colors' => 'Colores del contenido',
    'content_colors_desc' => 'Establece los colores para todos los elementos en la jerarquía de la organización de la página. Se recomienda elegir colores con un brillo similar al predeterminado para mayor legibilidad.',
    'bookshelf_color' => 'Color del estante',
    'book_color' => 'Color del libro',
    'chapter_color' => 'Color del capítulo',
    'page_color' => 'Color de la página',
    'page_draft_color' => 'Color del borrador de página',

    // Registration Settings
    'reg_settings' => 'Registro',
    'reg_enable' => 'Habilitar Registro',
    'reg_enable_toggle' => 'Habilitar registro',
    'reg_enable_desc' => 'Cuando se habilita el registro los usuarios podrán registrarse como usuarios de la aplicación. Al registrarse se les asigna un rol único por defecto.',
    'reg_default_role' => 'Rol de usuario por defecto después del registro',
    'reg_enable_external_warning' => 'La opción anterior no se utiliza mientras la autenticación LDAP o SAML externa esté activa. Las cuentas de usuario para los miembros no existentes se crearán automáticamente si la autenticación en el sistema externo en uso es exitosa.',
    'reg_email_confirmation' => 'Confirmación por Email',
    'reg_email_confirmation_toggle' => 'Requerir confirmación por Email',
    'reg_confirm_email_desc' => 'Si se emplea la restricción por dominio, entonces se requerirá la confirmación por correo electrónico y esta opción será ignorada.',
    'reg_confirm_restrict_domain' => 'Restricción de Dominio',
    'reg_confirm_restrict_domain_desc' => 'Introduzca una lista separada por comas de los dominios para cuentas de correo a los que se les permitirá el registro de usuarios. A los usuarios les será enviado un correo electrónico para confirmar la dirección antes de que se le permita interactuar con la aplicación. <br> Tenga en cuenta que los usuarios podrán cambiar sus direcciones de correo electrónico después de registrarse exitosamente.',
    'reg_confirm_restrict_domain_placeholder' => 'Ninguna restricción establecida',

    // Maintenance settings
    'maint' => 'Mantenimiento',
    'maint_image_cleanup' => 'Limpiar imágenes',
    'maint_image_cleanup_desc' => "Analiza las páginas y sus revisiones para comprobar qué imágenes y dibujos están siendo utilizadas y cuales no son necesarias. Asegúrate de crear una copia completa de la base de datos y de las imágenes antes de lanzar esta opción.",
    'maint_image_cleanup_ignore_revisions' => 'Ignorar imágenes en revisiones',
    'maint_image_cleanup_run' => 'Lanzar limpieza',
    'maint_image_cleanup_warning' => 'Se han encontrado :count imágenes posiblemente no utilizadas . ¿Estás seguro de querer borrar estas imágenes?',
    'maint_image_cleanup_success' => '¡Se han encontrado y borrado :count imágenes posiblemente no utilizadas!',
    'maint_image_cleanup_nothing_found' => '¡No se han encontrado imágenes sin utilizar, no se han borrado imágenes!',
    'maint_send_test_email' => 'Enviar un correo electrónico de prueba',
    'maint_send_test_email_desc' => 'Esto envía un correo electrónico de prueba a la dirección de correo electrónico especificada en tu perfil.',
    'maint_send_test_email_run' => 'Enviar correo electrónico de prueba',
    'maint_send_test_email_success' => 'Correo electrónico enviado a :address',
    'maint_send_test_email_mail_subject' => 'Probar correo electrónico',
    'maint_send_test_email_mail_greeting' => '¡El envío de correos electrónicos parece funcionar!',
    'maint_send_test_email_mail_text' => '¡Enhorabuena! Al recibir esta notificación de correo electrónico, tu configuración de correo electrónico parece estar ajustada correctamente.',

    // Role Settings
    'roles' => 'Roles',
    'role_user_roles' => 'Roles de usuario',
    'role_create' => 'Crear nuevo rol',
    'role_create_success' => 'Rol creado satisfactoriamente',
    'role_delete' => 'Borrar rol',
    'role_delete_confirm' => 'Se borrará el rol con nombre  \':roleName\'.',
    'role_delete_users_assigned' => 'Este rol tiene :userCount usuarios asignados. Si quisiera migrar los usuarios de este rol, seleccione un nuevo rol a continuación.',
    'role_delete_no_migration' => "No migrar usuarios",
    'role_delete_sure' => 'Está seguro que desea borrar este rol?',
    'role_delete_success' => 'Rol borrado satisfactoriamente',
    'role_edit' => 'Editar rol',
    'role_details' => 'Detalles de rol',
    'role_name' => 'Nombre de rol',
    'role_desc' => 'Descripción corta de rol',
    'role_external_auth_id' => 'ID externo de autenticación',
    'role_system' => 'Permisos de sistema',
    'role_manage_users' => 'Gestionar usuarios',
    'role_manage_roles' => 'Gestionar roles y permisos de roles',
    'role_manage_entity_permissions' => 'Gestionar todos los permisos de libros, capítulos y páginas',
    'role_manage_own_entity_permissions' => 'Gestionar permisos en libros, capítulos y páginas propias',
    'role_manage_page_templates' => 'Administrar plantillas',
    'role_access_api' => 'API de sistema de acceso',
    'role_manage_settings' => 'Gestionar ajustes de la aplicación',
    'role_asset' => 'Permisos de contenido',
    'role_asset_desc' => 'Estos permisos controlan el acceso por defecto a los contenidos del sistema. Los permisos de Libros, Capítulos y Páginas sobreescribiran estos permisos.',
    'role_asset_admins' => 'A los administradores se les asigna automáticamente permisos para acceder a todo el contenido pero estas opciones podrían mostrar u ocultar opciones de la interfaz.',
    'role_all' => 'Todo',
    'role_own' => 'Propio',
    'role_controlled_by_asset' => 'Controlado por el contenido al que ha sido subido',
    'role_save' => 'Guardar rol',
    'role_update_success' => 'Rol actualizado éxitosamente',
    'role_users' => 'Usuarios en este rol',
    'role_users_none' => 'No hay usuarios asignados a este rol',

    // Users
    'users' => 'Usuarios',
    'user_profile' => 'Perfil de Usuario',
    'users_add_new' => 'Agregar Nuevo Usuario',
    'users_search' => 'Buscar usuarios',
    'users_details' => 'Detalles de Usuario',
    'users_details_desc' => 'Ajusta un nombre público y email para este usuario. El email será empleado para acceder a la aplicación.',
    'users_details_desc_no_email' => 'Ajusta un nombre público para este usuario para que pueda ser reconocido por otros.',
    'users_role' => 'Roles de usuario',
    'users_role_desc' => 'Selecciona los roles a los que será asignado este usuario. Si se asignan varios roles los permisos se acumularán y recibirá todas las habilidades de los roles asignados.',
    'users_password' => 'Contraseña de Usuario',
    'users_password_desc' => 'Ajusta una contraseña que se utilizará para acceder a la aplicación. Debe ser al menos de 5 caracteres de longitud.',
    'users_send_invite_text' => 'Puede enviar una invitación a este usuario por correo electrónico que le permitirá ajustar su propia contraseña, o puede usted ajustar su contraseña.',
    'users_send_invite_option' => 'Enviar un correo electrónico de invitación',
    'users_external_auth_id' => 'ID externo de autenticación',
    'users_external_auth_id_desc' => 'Esta es la ID usada para asociar este usuario con el sistema de autenticación externo.',
    'users_password_warning' => 'Solo debe rellenar este campo si desea cambiar su contraseña.',
    'users_system_public' => 'Este usuario representa cualquier usuario invitado que visita la aplicación. No puede utilizarse para acceder pero es asignado automáticamente.',
    'users_delete' => 'Borrar usuario',
    'users_delete_named' => 'Borrar usuario :userName',
    'users_delete_warning' => 'Se borrará completamente el usuario con el nombre \':userName\' del sistema.',
    'users_delete_confirm' => '¿Está seguro que desea borrar este usuario?',
    'users_delete_success' => 'Usuarios removidos éxitosamente',
    'users_edit' => 'Editar Usuario',
    'users_edit_profile' => 'Editar perfil',
    'users_edit_success' => 'Usuario actualizado',
    'users_avatar' => 'Avatar del usuario',
    'users_avatar_desc' => 'Elige una imagen para representar a este usuario. Debe ser aproximadamente de 256px por lado.',
    'users_preferred_language' => 'Idioma preferido',
    'users_preferred_language_desc' => 'Esta opción cambiará el idioma de la interfaz de usuario en la aplicación. No afectará al contenido creado por los usuarios.',
    'users_social_accounts' => 'Cuentas sociales',
    'users_social_accounts_info' => 'Aquí puede conectar sus otras cuentas para un acceso rápido y fácil a la aplicación. Desconectando una cuenta aquí no revoca accesos ya autorizados. Revoque el acceso desde los ajustes de perfil en la cuenta social conectada.',
    'users_social_connect' => 'Conectar cuenta',
    'users_social_disconnect' => 'Desconectar cuenta',
    'users_social_connected' => 'La cuenta :socialAccount ha sido añadida éxitosamente a su perfil.',
    'users_social_disconnected' => 'La cuenta :socialAccount ha sido desconectada éxitosamente de su perfil.',
    'users_api_tokens' => 'Tokens API',
    'users_api_tokens_none' => 'No se han creado tokens API para este usuario',
    'users_api_tokens_create' => 'Crear token',
    'users_api_tokens_expires' => 'Expira',
    'users_api_tokens_docs' => 'Documentación API',

    // API Tokens
    'user_api_token_create' => 'Crear token API',
    'user_api_token_name' => 'Nombre',
    'user_api_token_name_desc' => 'Dale a tu token un nombre legible como un recordatorio futuro de su propósito.',
    'user_api_token_expiry' => 'Fecha de expiración',
    'user_api_token_expiry_desc' => 'Establece una fecha en la que este token expira. Después de esta fecha, las solicitudes realizadas usando este token ya no funcionarán. Dejar este campo en blanco fijará un vencimiento de 100 años en el futuro.',
    'user_api_token_create_secret_message' => 'Inmediatamente después de crear este token se generarán y mostrarán sus correspondientes "Token ID" y "Token Secret". El "Token Secret" sólo se mostrará una vez, así que asegúrese de copiar el valor a un lugar seguro antes de proceder.',
    'user_api_token_create_success' => 'Token API creado correctamente',
    'user_api_token_update_success' => 'Token API actualizado correctamente',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Este es un identificador no editable generado por el sistema y único para este token que necesitará ser proporcionado en solicitudes de API.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Esta es una clave no editable generada por el sistema que necesitará ser proporcionada en solicitudes de API. Solo se monstraré esta vez así que guarde su valor en un lugar seguro.',
    'user_api_token_created' => 'Token creado :timeAgo',
    'user_api_token_updated' => 'Token actualizado :timeAgo',
    'user_api_token_delete' => 'Borrar token',
    'user_api_token_delete_warning' => 'Esto eliminará completamente este token API con el nombre \':tokenName\' del sistema.',
    'user_api_token_delete_confirm' => '¿Está seguro de que desea borrar este API token?',
    'user_api_token_delete_success' => 'Token API borrado correctamente',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'cs' => 'Česky',
        'da' => 'Danés',
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
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
