<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Anda tidak memiliki izin untuk mengakses halaman yang diminta.',
    'permissionJson' => 'Anda tidak memiliki izin untuk melakukan tindakan yang diminta.',

    // Auth
    'error_user_exists_different_creds' => 'Pengguna dengan email :email sudah ada tetapi dengan kredensial berbeda.',
    'email_already_confirmed' => 'Email telah dikonfirmasi, Coba masuk.',
    'email_confirmation_invalid' => 'Token konfirmasi ini tidak valid atau telah digunakan, Silakan coba mendaftar lagi.',
    'email_confirmation_expired' => 'Token konfirmasi telah kedaluwarsa, Email konfirmasi baru telah dikirim.',
    'email_confirmation_awaiting' => 'Alamat email untuk akun yang digunakan perlu dikonfirmasi',
    'ldap_fail_anonymous' => 'Akses LDAP gagal menggunakan pengikatan anonim',
    'ldap_fail_authed' => 'Akses LDAP gagal menggunakan detail dn & sandi yang diberikan',
    'ldap_extension_not_installed' => 'Ekstensi LDAP PHP tidak terpasang',
    'ldap_cannot_connect' => 'Tidak dapat terhubung ke server ldap, Koneksi awal gagal',
    'saml_already_logged_in' => 'Telah masuk',
    'saml_user_not_registered' => 'Pengguna :name tidak terdaftar dan pendaftaran otomatis dinonaktifkan',
    'saml_no_email_address' => 'Tidak dapat menemukan alamat email untuk pengguna ini dalam data yang diberikan oleh sistem autentikasi eksternal',
    'saml_invalid_response_id' => 'Permintaan dari sistem otentikasi eksternal tidak dikenali oleh proses yang dimulai oleh aplikasi ini. Menavigasi kembali setelah masuk dapat menyebabkan masalah ini.',
    'saml_fail_authed' => 'Login menggunakan :system gagal, sistem tidak memberikan otorisasi yang berhasil',
    'social_no_action_defined' => 'Tidak ada tindakan yang ditentukan',
    'social_login_bad_response' => "Kesalahan diterima selama :socialAccount :\n:error",
    'social_account_in_use' => 'Ini:socialAccount sudah digunakan, Coba masuk melalui opsi :socialAccount.',
    'social_account_email_in_use' => 'The email :email is already in use. If you already have an account you can connect your :socialAccount account from your profile settings.',
    'social_account_existing' => 'This :socialAccount is already attached to your profile.',
    'social_account_already_used_existing' => 'This :socialAccount account is already used by another user.',
    'social_account_not_used' => 'This :socialAccount account is not linked to any users. Please attach it in your profile settings. ',
    'social_account_register_instructions' => 'If you do not yet have an account, You can register an account using the :socialAccount option.',
    'social_driver_not_found' => 'Pengemudi sosial tidak ditemukan',
    'social_driver_not_configured' => 'Pengaturan sosial :socialAccount Anda tidak dikonfigurasi dengan benar.',
    'invite_token_expired' => 'Tautan undangan ini telah kedaluwarsa. Sebagai gantinya, Anda dapat mencoba mengatur ulang kata sandi akun Anda.',

    // System
    'path_not_writable' => 'File path :filePath could not be uploaded to. Ensure it is writable to the server.',
    'cannot_get_image_from_url' => 'Cannot get image from :url',
    'cannot_create_thumbs' => 'The server cannot create thumbnails. Please check you have the GD PHP extension installed.',
    'server_upload_limit' => 'The server does not allow uploads of this size. Please try a smaller file size.',
    'uploaded'  => 'The server does not allow uploads of this size. Please try a smaller file size.',
    'image_upload_error' => 'An error occurred uploading the image',
    'image_upload_type_error' => 'The image type being uploaded is invalid',
    'file_upload_timeout' => 'The file upload has timed out.',

    // Attachments
    'attachment_not_found' => 'Attachment not found',

    // Pages
    'page_draft_autosave_fail' => 'Failed to save draft. Ensure you have internet connection before saving this page',
    'page_custom_home_deletion' => 'Cannot delete a page while it is set as a homepage',

    // Entities
    'entity_not_found' => 'Entity not found',
    'bookshelf_not_found' => 'Bookshelf not found',
    'book_not_found' => 'Book not found',
    'page_not_found' => 'Page not found',
    'chapter_not_found' => 'Chapter not found',
    'selected_book_not_found' => 'The selected book was not found',
    'selected_book_chapter_not_found' => 'The selected Book or Chapter was not found',
    'guests_cannot_save_drafts' => 'Guests cannot save drafts',

    // Users
    'users_cannot_delete_only_admin' => 'You cannot delete the only admin',
    'users_cannot_delete_guest' => 'You cannot delete the guest user',

    // Roles
    'role_cannot_be_edited' => 'This role cannot be edited',
    'role_system_cannot_be_deleted' => 'This role is a system role and cannot be deleted',
    'role_registration_default_cannot_delete' => 'This role cannot be deleted while set as the default registration role',
    'role_cannot_remove_only_admin' => 'This user is the only user assigned to the administrator role. Assign the administrator role to another user before attempting to remove it here.',

    // Comments
    'comment_list' => 'An error occurred while fetching the comments.',
    'cannot_add_comment_to_draft' => 'You cannot add comments to a draft.',
    'comment_add' => 'An error occurred while adding / updating the comment.',
    'comment_delete' => 'An error occurred while deleting the comment.',
    'empty_comment' => 'Cannot add an empty comment.',

    // Error pages
    '404_page_not_found' => 'Page Not Found',
    'sorry_page_not_found' => 'Sorry, The page you were looking for could not be found.',
    'sorry_page_not_found_permission_warning' => 'If you expected this page to exist, you might not have permission to view it.',
    'return_home' => 'Kembali ke home',
    'error_occurred' => 'An Error Occurred',
    'app_down' => ':appName is down right now',
    'back_soon' => 'It will be back up soon.',

    // API errors
    'api_no_authorization_found' => 'No authorization token found on the request',
    'api_bad_authorization_format' => 'An authorization token was found on the request but the format appeared incorrect',
    'api_user_token_not_found' => 'No matching API token was found for the provided authorization token',
    'api_incorrect_token_secret' => 'The secret provided for the given used API token is incorrect',
    'api_user_no_api_permission' => 'The owner of the used API token does not have permission to make API calls',
    'api_user_token_expired' => 'The authorization token used has expired',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Error thrown when sending a test email:',

];
