<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ayarlar',
    'settings_save' => 'Ayarları Kaydet',
    'settings_save_success' => 'Ayarlar kaydedildi',

    // App Settings
    'app_customization' => 'Özelleştirme',
    'app_features_security' => 'Özellikler & Güvenlik',
    'app_name' => 'Uygulama Adı',
    'app_name_desc' => 'Bu isim, başlıkta ve sistem tarafından gönderilen bütün e-postalarda gösterilecektir.',
    'app_name_header' => 'İsmi başlıkta göster',
    'app_public_access' => 'Açık Erişim',
    'app_public_access_desc' => 'Bu özelliği aktifleştirmek, giriş yapmamış misafir kullanıcıların BookStack uygulamanıza erişimini sağlar.',
    'app_public_access_desc_guest' => 'Kayıtlı olmayan kullanıcılar için erişim yetkileri, "Guest" kullanıcısı üzerinden kontrol edilebilir.',
    'app_public_access_toggle' => 'Açık erişime izin ver',
    'app_public_viewing' => 'Herkese açık görüntülemeye izin verilsin mi?',
    'app_secure_images' => 'Daha Güvenli Görsel Yüklemeleri',
    'app_secure_images_toggle' => 'Daha güvenli görsel yüklemelerini aktifleştir',
    'app_secure_images_desc' => 'Bütün görseller, performans sebepleri nedeniyle herkes tarafından görüntülenebilir durumdadır. Bu seçeneği aktif ederseniz; görsel bağlantılarının önüne rastgele, tahmini zor karakterler eklenmesini sağlarsınız. Kolay erişimin önlenmesi için dizin indekslerinin kapalı olduğundan emin olun.',
    'app_editor' => 'Sayfa Düzenleyicisi',
    'app_editor_desc' => 'Sayfa düzenlemesi yapılırken, bütün kullanıcılar tarafından hangi düzenleyicinin kullanılacağını seçin.',
    'app_custom_html' => 'Özel HTML "Head" İçeriği',
    'app_custom_html_desc' => 'Buraya yazacağınız içerik, <head> etiketinin içine ve en sonuna eklenecektir. Bu işlem, stil değişikliklerinin uygulanmasında ya da analytics kodlarının eklenmesinde yararlı olmaktadır.',
    'app_custom_html_disabled_notice' => 'Olası hatalı değişikliklerin geriye alınabilmesi için bu sayfanın özelleştirilmiş HTML "head" içeriği devre dışı bırakıldı.',
    'app_logo' => 'Uygulama Logosu',
    'app_logo_desc' => 'Bu görsel 43px yüksekliğinde olmalıdır. <br>Daha büyük görseller otomatik olarak küçültülecektir.',
    'app_primary_color' => 'Uygulamanın Birincil Rengi',
    'app_primary_color_desc' => 'Başlık, butonlar ve bağlantılar da dahil olmak üzere uygulama için ana rengi ayarlar.',
    'app_homepage' => 'Ana Sayfa',
    'app_homepage_desc' => 'Varsayılan görünüm yerine ana sayfada görünmesi için bir görünüm seçin. Sayfa izinleri, burada seçeceğiniz sayfalar için yok sayılacaktır.',
    'app_homepage_select' => 'Bir sayfa seçin',
    'app_disable_comments' => 'Yorumları Devre Dışı Bırak',
    'app_disable_comments_toggle' => 'Yorumları devre dışı bırak',
    'app_disable_comments_desc' => 'Bütün sayfalar için yorumları devre dışı bırakır. <br> Mevcut yorumlar gösterilmeyecektir.',

    // Color settings
    'content_colors' => 'İçerik Renkleri',
    'content_colors_desc' => 'Sayfa hiyerarşisinde bulunan bütün elemanlar için renkleri ayarlar. Bu renkleri varsayılan renklerin parlaklığına yakın bir parlaklıkta seçmeniz, okunurluğun iyileştirilmesi açısından önerilir.',
    'bookshelf_color' => 'Raf Rengi',
    'book_color' => 'Kitap Rengi',
    'chapter_color' => 'Bölüm Rengi',
    'page_color' => 'Sayfa Rengi',
    'page_draft_color' => 'Sayfa Taslağı Rengi',

    // Registration Settings
    'reg_settings' => 'Kayıt İşlemleri',
    'reg_enable' => 'Kayıtları Aktifleştir',
    'reg_enable_toggle' => 'Kayıtları aktifleştir',
    'reg_enable_desc' => 'Kullanıcılar kaydolduktan sonra sizin belirleyeceğiniz bir role otomatik olarak atanabilirler.',
    'reg_default_role' => 'Kayıttan sonraki varsayılan kullanıcı rolü',
    'reg_enable_external_warning' => 'Harici LDAP veya SAML kimlik doğrulaması etkinken yukarıdaki seçenek yok sayılır. Mevcut harici üyelere yönelik kimlik doğrulama başarılı olursa, mevcut olmayan üyelerin kullanıcı hesapları otomatik olarak oluşturulur.',
    'reg_email_confirmation' => 'E-posta Doğrulaması',
    'reg_email_confirmation_toggle' => 'E-posta doğrulamasını zorunlu kıl',
    'reg_confirm_email_desc' => 'Eğer alan adı kısıtlaması kullanılıyorsa, bu seçenek yok sayılarak e-posta doğrulaması zorunlu kılınacaktır.',
    'reg_confirm_restrict_domain' => 'Alan Adı Kısıtlaması',
    'reg_confirm_restrict_domain_desc' => 'Kısıtlamak istediğiniz e-posta alan adlarını vigül ile ayırarak yazınız. Kullanıcılara, uygulamaya erişmeden önce adreslerini doğrulamaları için bir e-posta gönderilecektir. <br> Başarılı bir kayıt işleminden sonra kullanıcıların e-posta adreslerini değiştirebileceklerini unutmayın.',
    'reg_confirm_restrict_domain_placeholder' => 'Hiçbir kısıtlama tanımlanmamış',

    // Maintenance settings
    'maint' => 'Bakım',
    'maint_image_cleanup' => 'Görselleri Temizle',
    'maint_image_cleanup_desc' => "Sayfaları ve revizyon içeriklerini tarayarak hangi görsellerin ve çizimlerin kullanımda olduğunu ve hangilerinin gereksiz olduğunu tespit eder. Bunu başlatmadan önce veritabanının ve görsellerin tam bir yedeğinin alındığından emin olun.",
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Temizliği Başlat',
    'maint_image_cleanup_warning' => 'Muhtemelen kullanılmayan :count adet görsel bulundu. Bu görselleri silmek istediğinize emin misiniz?',
    'maint_image_cleanup_success' => 'Muhtemelen kullanılmayan :count adet görsel bulundu ve silindi!',
    'maint_image_cleanup_nothing_found' => 'Kullanılmayan görsel bulunamadığından hiçbir şey silinmedi!',
    'maint_send_test_email' => 'Deneme E-postası Gönder',
    'maint_send_test_email_desc' => 'Bu işlem, profilinize tanımladığınız e-posta adresine bir deneme e-postası gönderir.',
    'maint_send_test_email_run' => 'Deneme e-postasını gönder',
    'maint_send_test_email_success' => 'E-posta, :address adresine gönderildi',
    'maint_send_test_email_mail_subject' => 'Deneme E-postası',
    'maint_send_test_email_mail_greeting' => 'E-posta iletimi çalışıyor gibi görünüyor!',
    'maint_send_test_email_mail_text' => 'Tebrikler! Eğer bu e-posta bildirimini alıyorsanız, e-posta ayarlarınız doğru bir şekilde ayarlanmış demektir.',
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
    'roles' => 'Roller',
    'role_user_roles' => 'Kullanıcı Rolleri',
    'role_create' => 'Yeni Rol Oluştur',
    'role_create_success' => 'Rol, başarıyla oluşturuldu',
    'role_delete' => 'Rolü Sil',
    'role_delete_confirm' => 'Bu işlem, \':roleName\' adlı rolü silecektir.',
    'role_delete_users_assigned' => 'Bu role atanmış :userCount adet kullanıcı var. Eğer bu kullanıcıların rollerini değiştirmek istiyorsanız, aşağıdan yeni bir rol seçin.',
    'role_delete_no_migration' => "Kullanıcıları taşıma",
    'role_delete_sure' => 'Bu rolü silmek istediğinize emin misiniz?',
    'role_delete_success' => 'Rol başarıyla silindi',
    'role_edit' => 'Rolü Düzenle',
    'role_details' => 'Rol Detayları',
    'role_name' => 'Rol Adı',
    'role_desc' => 'Rolün Kısa Tanımı',
    'role_external_auth_id' => 'Harici Doğrulama Kimlikleri',
    'role_system' => 'Sistem Yetkileri',
    'role_manage_users' => 'Kullanıcıları yönet',
    'role_manage_roles' => 'Rolleri ve rol izinlerini yönet',
    'role_manage_entity_permissions' => 'Bütün kitap, bölüm ve sayfa izinlerini yönet',
    'role_manage_own_entity_permissions' => 'Kendine ait kitabın, bölümün ve sayfaların izinlerini yönet',
    'role_manage_page_templates' => 'Sayfa şablonlarını yönet',
    'role_access_api' => 'Sistem programlama arayüzüne (API) eriş',
    'role_manage_settings' => 'Uygulama ayarlarını yönet',
    'role_asset' => 'Varlık Yetkileri',
    'roles_system_warning' => 'Yukarıdaki üç izinden herhangi birine erişimin, kullanıcının kendi ayrıcalıklarını veya sistemdeki diğerlerinin ayrıcalıklarını değiştirmesine izin verebileceğini unutmayın. Yalnızca bu izinlere sahip rolleri güvenilir kullanıcılara atayın.',
    'role_asset_desc' => 'Bu izinler, sistem içindeki varlıklara varsayılan erişim izinlerini ayarlar. Kitaplar, bölümler ve sayfalar üzerindeki izinler, buradaki izinleri geçersiz kılar.',
    'role_asset_admins' => 'Yöneticilere otomatik olarak bütün içeriğe erişim yetkisi verilir ancak bu seçenekler, kullanıcı arayüzündeki bazı seçeneklerin gösterilmesine veya gizlenmesine neden olabilir.',
    'role_all' => 'Hepsi',
    'role_own' => 'Kendine Ait',
    'role_controlled_by_asset' => 'Yüklendikleri varlık tarafından kontrol ediliyor',
    'role_save' => 'Rolü Kaydet',
    'role_update_success' => 'Rol başarıyla güncellendi',
    'role_users' => 'Bu roldeki kullanıcılar',
    'role_users_none' => 'Bu role henüz bir kullanıcı atanmadı',

    // Users
    'users' => 'Kullanıcılar',
    'user_profile' => 'Kullanıcı Profili',
    'users_add_new' => 'Yeni Kullanıcı Ekle',
    'users_search' => 'Kullanıcı Ara',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'Kullanıcı Detayları',
    'users_details_desc' => 'Bu kullanıcı için gösterilecek bir isim ve e-posta adresi belirleyin. Buraya yazacağınız e-posta adresi, uygulamaya giriş yaparken kullanılacaktır.',
    'users_details_desc_no_email' => 'Diğer kullanıcılar tarafından tanınabilmesi için bir isim belirleyin.',
    'users_role' => 'Kullanıcı Rolleri',
    'users_role_desc' => 'Bu kullanıcının hangi rollere atanacağını belirleyin. Birden fazla role sahip kullanıcılar, atandığı bütün rollerin yetkilerine sahip olurlar.',
    'users_password' => 'Kullanıcı Şifresi',
    'users_password_desc' => 'Kullanıcının giriş yaparken kullanacağı bir şifre belirleyin. Şifre en az 6 karakterden oluşmalıdır.',
    'users_send_invite_text' => 'Bu kullanıcıya kendi şifresini belirleyebilmesi için bir davetiye e-postası gönderebilir ya da kullanıcının şifresini kendiniz belirleyebilirsiniz.',
    'users_send_invite_option' => 'Kullanıcıya davetiye e-postası gönder',
    'users_external_auth_id' => 'Harici Doğrulama Kimliği',
    'users_external_auth_id_desc' => 'Bu kimlik numarası (ID), harici kimlik doğrulama sisteminizle iletişim kurarken bu kullanıcıyla eşleştirmek için kullanılır.',
    'users_password_warning' => 'Şifrenizi değiştirmek istiyorsanız, aşağıdaki formu doldurunuz.',
    'users_system_public' => 'Bu kullanıcı, uygulamanızı ziyaret eden bütün misafir kullanıcıları temsil eder. Giriş yapmak için kullanılamaz ancak otomatik olarak atanır.',
    'users_delete' => 'Kullanıcıyı Sil',
    'users_delete_named' => ':userName kullanıcısını sil ',
    'users_delete_warning' => 'Bu işlem \':userName\' kullanıcısını sistemden tamamen silecektir.',
    'users_delete_confirm' => 'Bu kullanıcıyı tamamen silmek istediğinize emin misiniz?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'Hiçbir kullanıcı seçilmedi',
    'users_delete_success' => 'Kullanıcı başarıyla kaldırıldı',
    'users_edit' => 'Kullanıcıyı Düzenle',
    'users_edit_profile' => 'Profili Düzenle',
    'users_edit_success' => 'Kullanıcı başarıyla güncellendi',
    'users_avatar' => 'Avatar',
    'users_avatar_desc' => 'Bu kullanıcıyı temsil eden bir görsel seçin. Bu görsel yaklaşık 256px boyutunda bir kare olmalıdır.',
    'users_preferred_language' => 'Tercih Edilen Dil',
    'users_preferred_language_desc' => 'Bu seçenek, kullanıcı arayüzünün dilini değiştirmek için kullanılır. Burada yapılan değişiklik herhangi bir kullanıcı tarafından oluşturulmuş içeriği etkilemeyecektir.',
    'users_social_accounts' => 'Sosyal Hesaplar',
    'users_social_accounts_info' => 'Buraya diğer hesaplarınızı ekleyerek, uygulamaya daha hızlı ve kolay bir giriş sağlayabilirsiniz. Bir hesabın bağlantısını kesmek daha önce sahip olduğunuz erişimi kaldırmaz. Bağlı sosyal hesabınızın erişimini, profil ayarlarınızdan kaldırabilirsiniz.',
    'users_social_connect' => 'Hesabı Bağla',
    'users_social_disconnect' => 'Hesabın Bağlantısını Kes',
    'users_social_connected' => ':socialAccount hesabı, profilinize başarıyla bağlandı.',
    'users_social_disconnected' => ':socialAccount hesabınızın profilinizle ilişiği başarıyla kesildi.',
    'users_api_tokens' => 'API Anahtarları',
    'users_api_tokens_none' => 'Bu kullanıcı için oluşturulmuş herhangi bir API anahtarı bulunamadı',
    'users_api_tokens_create' => 'Anahtar Oluştur',
    'users_api_tokens_expires' => 'Bitiş süresi',
    'users_api_tokens_docs' => 'API Dokümantasyonu',

    // API Tokens
    'user_api_token_create' => 'API Anahtarı Oluştur',
    'user_api_token_name' => 'İsim',
    'user_api_token_name_desc' => 'Anahtarınıza gelecekte ne amaçla kullanıldığını hatırlatması açısından anlamlı bir isim veriniz.',
    'user_api_token_expiry' => 'Bitiş Tarihi',
    'user_api_token_expiry_desc' => 'Bu anahtarın süresinin dolduğu bir tarih belirleyin. Bu tarihten sonra, bu anahtar kullanılarak yapılan istekler artık çalışmaz. Bu alanı boş bırakmak, bitiş tarihini 100 yıl sonrası yapar.',
    'user_api_token_create_secret_message' => 'Bu anahtar oluşturulduktan hemen sonra bir "ID Anahtarı" ve "Gizli Anahtar" üretilip görüntülenecektir. Gizli anahtar sadece bir defa gösterilecektir, bu yüzden devam etmeden önce bu değeri güvenli bir yere kopyaladığınızdan emin olun.',
    'user_api_token_create_success' => 'API anahtarı başarıyla oluşturuldu',
    'user_api_token_update_success' => 'API anahtarı başarıyla güncellendi',
    'user_api_token' => 'API Erişim Anahtarı',
    'user_api_token_id' => 'Anahtar ID',
    'user_api_token_id_desc' => 'Bu, API isteklerini karşılamak için sistem tarafından oluşturulmuş ve sonradan düzenlenemeyen bir tanımlayıcıdır.',
    'user_api_token_secret' => 'Gizli Anahtar',
    'user_api_token_secret_desc' => 'Bu, API isteklerinde sağlanması gereken anahtar için sistem tarafından oluşturulan bir gizli anahtardır. Bu anahtar sadece bir defa görüntülenecektir, bu nedenle bu değeri güvenli bir yere kopyalayın.',
    'user_api_token_created' => 'Anahtar :timeAgo Oluşturuldu',
    'user_api_token_updated' => 'Anahtar :timeAgo Güncellendi',
    'user_api_token_delete' => 'Anahtarı Sil',
    'user_api_token_delete_warning' => 'Bu işlem \':tokenName\' adındaki API anahtarını sistemden tamamen silecektir.',
    'user_api_token_delete_confirm' => 'Bu API anahtarını silmek istediğinize emin misiniz?',
    'user_api_token_delete_success' => 'API anahtarı başarıyla silindi',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Danca',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'İbranice',
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
        'sl' => 'Slovence',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
