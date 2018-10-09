<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'garden');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KofkT!A1]dmF+u&u9tYnnA:GeU&29sXa##]h**k%SpRZXhjA^xNLVtx&}#zFI>1L');
define('SECURE_AUTH_KEY',  '=HGOk+T=mtF%Qb |M_KyyIj5agkJZ[y+q>Ia^jikq`<;Z#4M4Yo!3BKViMjt{>1<');
define('LOGGED_IN_KEY',    'L9]GZcy&CL`O^u!k1bA.EQ){!cl^;?e@EcEz:WSJ`W}|u#?%9gS{(tvSI!_C6x*3');
define('NONCE_KEY',        'x_{NL9I}F3)4X.#(#:qCEj)4%)kFoShmr)EcIV [|z%nsq3p}JPPd,GCCsOa{e7O');
define('AUTH_SALT',        'uI!xKdMD<rOUC4r,9b@OHUUQMc+Y]8a7V)>dw?!Ndsmu^*8dyHrex=_0LWNDllhJ');
define('SECURE_AUTH_SALT', '!DO]@07w 2d}CyG0D67X.aDWql}b;p%n-mFUIGN$Aj#7GNKF#]s|jK>:(i8&=@Y;');
define('LOGGED_IN_SALT',   'S/&%eJH>s]=-`5Q0Fn~j6<x%h^q`$Jk9lr/h;hiQ3A&/B!I{8gWwR0aD^P-RzC6,');
define('NONCE_SALT',       '2wmG1//uuoOPX]--+HK=I3jq>:W.aLlN3GL7wR.QI_y7H6~PI~!v/=@IPpYD4/Y/');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define( 'WPCF7_AUTOP', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');


