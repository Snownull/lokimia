<?php
/* Debug only */
if (!defined('_PS_MODE_DEV_')) {
    define('_PS_MODE_DEV_', false);
}

/* Compatibility warning */
define('_PS_DISPLAY_COMPATIBILITY_WARNING_', false);

/* SSL configuration */
define('_PS_SSL_PORT_', 443);

/* Improve PHP configuration to prevent issues */
ini_set('default_charset', 'utf-8');
ini_set('magic_quotes_runtime', 0);

/* Correct Apache charset (except if it's too late */
if (!headers_sent()) {
    header('Content-Type: text/html; charset=utf-8');
}

/* Directories */
define('_PS_ROOT_DIR_', realpath(__DIR__.'/..'));
define('_PS_CORE_DIR_', _PS_ROOT_DIR_);
define('_PS_ALL_THEMES_DIR_', _PS_ROOT_DIR_.'/themes/');
define('_PS_CACHE_DIR_', _PS_ROOT_DIR_.'/var/cache/');
define('_PS_CONFIG_DIR_', _PS_ROOT_DIR_.'/app/config/');
define('_PS_CUSTOM_CONFIG_FILE_', _PS_CONFIG_DIR_.'parameters.php');
define('_PS_CLASS_DIR_', _PS_ROOT_DIR_.'/classes/');
define('_PS_CONTROLLER_DIR_', _PS_ROOT_DIR_.'/controllers/');
define('_PS_OVERRIDE_DIR_', _PS_ROOT_DIR_.'/override/');
define('_PS_TRANSLATIONS_DIR_', _PS_ROOT_DIR_.'/translations/');
define('_PS_DOWNLOAD_DIR_', _PS_ROOT_DIR_.'/download/');
define('_PS_MAIL_DIR_', _PS_ROOT_DIR_.'/mails/');
define('_PS_MODULE_DIR_', _PS_ROOT_DIR_.'/modules/');
define('_PS_IMG_DIR_', _PS_ROOT_DIR_.'/img/');
define('_PS_UPLOAD_DIR_', _PS_ROOT_DIR_.'/upload/');
define('_PS_VENDOR_DIR_', _PS_ROOT_DIR_.'/vendor/');

/* Settings */
define('_PS_MAGIC_QUOTES_GPC_', false);
define('_PS_MYSQL_REAL_ESCAPE_STRING_', true);
define('_PS_ALLOW_HTML_IFRAME_', false);

/* Debugging settings */
define('_PS_DEBUG_PROFILING_', false);
define('_PS_MODE_DEMO_', false);

/* Default timezone */
date_default_timezone_set('UTC');
