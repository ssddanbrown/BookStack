<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => '設定',
    'settings_save' => '儲存設定',
    'settings_save_success' => '設定已儲存',

    // App Settings
    'app_customization' => '自定義',
    'app_features_security' => '功能與安全',
    'app_name' => 'App名',
    'app_name_desc' => '此名稱將在網頁頂端和Email中顯示。',
    'app_name_header' => '在網頁頂端顯示應用名稱？',
    'app_public_access' => '公共訪問',
    'app_public_access_desc' => '啟用此選項將允許未登錄的訪問者訪問BookStack實例中的內容。',
    'app_public_access_desc_guest' => '可以通過“訪客”控制公共訪問者的訪問。',
    'app_public_access_toggle' => '允許公開訪問',
    'app_public_viewing' => '開放公開閱覽？',
    'app_secure_images' => '啟用更高安全性的圖片上傳？',
    'app_secure_images_toggle' => '啟用更高安全性的圖片上傳',
    'app_secure_images_desc' => '出於效能考量，所有圖片都是公開的。這個選項會在圖片的網址前加入一個隨機並難以猜測的字元串，從而使直接進入變得困難。',
    'app_editor' => '頁面編輯器',
    'app_editor_desc' => '選擇所有使用者將使用哪個編輯器來編輯頁面。',
    'app_custom_html' => '自訂HTML頂端內容',
    'app_custom_html_desc' => '此處加入的任何內容都將插入到每個頁面的<head>部分的底部，這對於覆蓋樣式或加入分析程式碼很方便。',
    'app_custom_html_disabled_notice' => '在此設置頁面上禁用了自定義HTML標題內容，以確保可以恢復所有重大更改。',
    'app_logo' => 'App Logo',
    'app_logo_desc' => '這個圖片的高度應該為43px。<br>大圖片將會被縮小。',
    'app_primary_color' => 'App主要配色',
    'app_primary_color_desc' => '請使用十六進位數值。<br>保留空白則重置回預設配色。',
    'app_homepage' => 'App首頁',
    'app_homepage_desc' => '選擇要做為首頁的頁面，這將會替換預設首頁，而且這個頁面的權限設定將被忽略。',
    'app_homepage_select' => '預設首頁選擇',
    'app_disable_comments' => '關閉評論',
    'app_disable_comments_toggle' => '禁用評論',
    'app_disable_comments_desc' => '在App的所有頁面上關閉評論，已經存在的評論也不會顯示。',

    // Color settings
    'content_colors' => '內容顏色',
    'content_colors_desc' => '為頁面組織層次結構中的所有元素設置顏色。 為了提高可讀性，建議選擇亮度與默認顏色相似的顏色。',
    'bookshelf_color' => '書架顔色',
    'book_color' => '書本顔色',
    'chapter_color' => '章節顔色',
    'page_color' => '頁面顔色',
    'page_draft_color' => '頁面草稿顏色',

    // Registration Settings
    'reg_settings' => '註冊設定',
    'reg_enable' => '啟用註冊',
    'reg_enable_toggle' => '啟用註冊',
    'reg_enable_desc' => '啟用註冊後，用戶將可以自己註冊為應用程序用戶。註冊後，他們將獲得一個默認的單一用戶角色。',
    'reg_default_role' => '註冊後的預設使用者角色',
    'reg_enable_external_warning' => '當外部 LDAP 或 SAML 身份驗證啟用時，將會忽略上述選項。如果外部身份驗證成功，將會自動在本系統建立使用者帳戶。',
    'reg_email_confirmation' => '電子郵件驗證',
    'reg_email_confirmation_toggle' => '需要電子郵件驗證',
    'reg_confirm_email_desc' => '如果使用網域名稱限制，則需要電子郵件驗證，並且本設定將被忽略。',
    'reg_confirm_restrict_domain' => '網域名稱限制',
    'reg_confirm_restrict_domain_desc' => '輸入您想要限制註冊的Email域域名稱列表，用逗號隔開。在被允許與本系統連結之前，使用者會收到一封Email來確認他們的位址。<br>注意，使用者在註冊成功後可以修改他們的Email位址。',
    'reg_confirm_restrict_domain_placeholder' => '尚未設定限制的網域',

    // Maintenance settings
    'maint' => '維護',
    'maint_image_cleanup' => '清理圖像',
    'maint_image_cleanup_desc' => "掃描頁面和修訂內容以檢查哪些圖像是正在使用的以及哪些圖像是多余的。確保在運行前創建完整的數據庫和映像備份。",
    'maint_delete_images_only_in_revisions' => '包含刪除僅在舊頁面修訂版中存在的圖像',
    'maint_image_cleanup_run' => '運行清理',
    'maint_image_cleanup_warning' => '發現了:count 張可能未使用的圖像。您確定要刪除這些圖像嗎？',
    'maint_image_cleanup_success' => '找到並刪除了:count 張可能未使用的圖像！',
    'maint_image_cleanup_nothing_found' => '找不到未使用的圖像，未刪除任何檔案！',
    'maint_send_test_email' => '發送測試電子郵件',
    'maint_send_test_email_desc' => '這會將測試電子郵件發送到您的個人資料中指定的電子郵件地址。',
    'maint_send_test_email_run' => '發送測試郵件',
    'maint_send_test_email_success' => '郵件發送到 :address',
    'maint_send_test_email_mail_subject' => '測試郵件',
    'maint_send_test_email_mail_greeting' => '電子郵件傳遞似乎有效！',
    'maint_send_test_email_mail_text' => '恭喜你！ 收到此電子郵件通知時，您的電子郵件設置已經認證成功。',
    'maint_recycle_bin_desc' => '刪除的書架，書籍，章節和頁面將發送到回收站，以便可以還原或永久刪除它們。 回收站中的較舊項目可能會在一段時間後自動刪除，具體取決於系統配置。',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => '資源回收筒',
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
    'audit_table_user' => '使用者',
    'audit_table_event' => 'Event',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => '角色',
    'role_user_roles' => '使用者角色',
    'role_create' => '建立角色',
    'role_create_success' => '角色建立成功',
    'role_delete' => '刪除角色',
    'role_delete_confirm' => '這將會刪除名為 \':roleName\' 的角色.',
    'role_delete_users_assigned' => '有:userCount位使用者屬於此角色。如果您想將此角色中的使用者遷移，請在下面選擇一個新角色。',
    'role_delete_no_migration' => "不要遷移使用者",
    'role_delete_sure' => '您確定要刪除這個角色？',
    'role_delete_success' => '角色刪除成功',
    'role_edit' => '編輯角色',
    'role_details' => '角色詳細資訊',
    'role_name' => '角色名',
    'role_desc' => '角色簡述',
    'role_external_auth_id' => '外部身份驗證ID',
    'role_system' => '系統權限',
    'role_manage_users' => '管理使用者',
    'role_manage_roles' => '管理角色與角色權限',
    'role_manage_entity_permissions' => '管理所有圖書，章節和頁面的權限',
    'role_manage_own_entity_permissions' => '管理自己的圖書，章節和頁面的權限',
    'role_manage_page_templates' => '管理頁面模板',
    'role_access_api' => '存取系統API',
    'role_manage_settings' => '管理App設定',
    'role_asset' => '資源項目',
    'roles_system_warning' => '請注意，具有上述三項權限任何一項的用戶能更改自己或系統中其他人的權限。應只將具這些權限的角色分配予受信任的用戶。',
    'role_asset_desc' => '對系統內資源的預設權限將由這裡的權限控制。若有單獨設定在書本、章節和頁面上的權限，將會覆蓋這裡的權限設定。',
    'role_asset_admins' => '管理員會自動獲得對所有內容的存取權限，但這些選項可能會顯示或隱藏UI的選項。',
    'role_all' => '全部',
    'role_own' => '擁有',
    'role_controlled_by_asset' => '依據隸屬的資源來決定',
    'role_save' => '儲存角色',
    'role_update_success' => '角色更新成功',
    'role_users' => '此角色的使用者',
    'role_users_none' => '目前沒有使用者被分配到這個角色',

    // Users
    'users' => '使用者',
    'user_profile' => '使用者資料',
    'users_add_new' => '加入使用者',
    'users_search' => '搜尋使用者',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => '用戶詳情',
    'users_details_desc' => '請設置用戶的顯示名稱和電子郵件地址， 該電子郵件地址將用於登錄該應用。',
    'users_details_desc_no_email' => '設置一個用戶的顯示名稱，以便其他人可以認出你。',
    'users_role' => '使用者角色',
    'users_role_desc' => '選擇一個將分配給該用戶的角色。 如果將一個用戶分配給多個角色，則這些角色的權限將堆疊在一起，並且他們將獲得分配的角色的所有功能。',
    'users_password' => '用戶密碼',
    'users_password_desc' => '設置用於登錄賬戶的密碼， 密碼長度必須至少為6個字符。',
    'users_send_invite_text' => '您可以選擇向該用戶發送邀請電子郵件，允許他們設置自己的密碼，或者您可以自己設置他們的密碼。',
    'users_send_invite_option' => '向用戶發送邀請電子郵件',
    'users_external_auth_id' => '外部身份驗證ID',
    'users_external_auth_id_desc' => '這個 ID 將於外部身份驗證系統時，用於比對使用者。',
    'users_password_warning' => '如果您想更改密碼，請填寫以下內容：',
    'users_system_public' => '此使用者代表進入您的App的任何訪客。它不能用於登入，而是自動分配。',
    'users_delete' => '刪除使用者',
    'users_delete_named' => '刪除使用者 :userName',
    'users_delete_warning' => '這將從系統中完全刪除名為 \':userName\' 的使用者。',
    'users_delete_confirm' => '您確定要刪除這個使用者？',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_delete_success' => 'User successfully removed',
    'users_edit' => '編輯使用者',
    'users_edit_profile' => '編輯資料',
    'users_edit_success' => '使用者更新成功',
    'users_avatar' => '使用者大頭照',
    'users_avatar_desc' => '目前圖片應該為約256px的正方形。',
    'users_preferred_language' => '語言',
    'users_preferred_language_desc' => '此選項將更改用於應用用戶界面的語言，但 這不會影響任何用戶創建的內容。',
    'users_social_accounts' => '社群網站帳號',
    'users_social_accounts_info' => '在這里，您可以連結您的其他帳號，以便方便地登入。如果您選擇解除連結，之後將不能透過此社群網站帳號登入，請設定社群網站帳號來取消本系統p的進入權限。',
    'users_social_connect' => '連結帳號',
    'users_social_disconnect' => '解除連結帳號',
    'users_social_connected' => ':socialAccount 帳號已經成功連結到您的資料。',
    'users_social_disconnected' => ':socialAccount 帳號已經成功解除連結。',
    'users_api_tokens' => 'API令牌',
    'users_api_tokens_none' => '尚未為此用戶創建API令牌',
    'users_api_tokens_create' => '創建令牌',
    'users_api_tokens_expires' => '過期',
    'users_api_tokens_docs' => 'API檔案',

    // API Tokens
    'user_api_token_create' => '創建 API 令牌',
    'user_api_token_name' => '名稱',
    'user_api_token_name_desc' => '給您的令牌一個易讀的名稱，以備將來提醒其預期的用途。',
    'user_api_token_expiry' => '過期日期',
    'user_api_token_expiry_desc' => '設置此令牌到期的日期， 在此日期之後，使用此令牌發出的請求將不再起作用。 若該項留空則自動將在100年後到期。',
    'user_api_token_create_secret_message' => '創建此令牌後，將立即生成並顯示“令牌ID”和“令牌密鑰”，該密鑰只會顯示一次，因此請確保在繼續操作之前將其複製到安全的地方。',
    'user_api_token_create_success' => '成功創建API令牌',
    'user_api_token_update_success' => '成功更新API令牌',
    'user_api_token' => 'API 令牌',
    'user_api_token_id' => '令牌 ID',
    'user_api_token_id_desc' => '這是此令牌的不可編輯的系統生成的標識符，需要在API請求中提供。',
    'user_api_token_secret' => '令牌密鑰',
    'user_api_token_secret_desc' => '這是此令牌的系統生成的密鑰，需要在API請求中提供。 這只會顯示一次，因此請將其複製到安全的地方。',
    'user_api_token_created' => '令牌已創建於 :timeAgo',
    'user_api_token_updated' => '令牌已更新:timeAgo',
    'user_api_token_delete' => '刪除令牌',
    'user_api_token_delete_warning' => '這將從系統中完全刪除名稱為 ":tokenName" 的API令牌。',
    'user_api_token_delete_confirm' => '您確定要刪除這個API令牌嗎？',
    'user_api_token_delete_success' => 'API令牌成功刪除',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => '丹麥',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => '希伯來語',
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
