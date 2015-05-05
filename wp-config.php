<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'kapusta-studio');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         's57`p0gWOdRa~WbwTevIi)gHja7`6L6~b{4[ADRz?_T?Qv9]dL{2:s+5%0K(xP6w');
define('SECURE_AUTH_KEY',  '9/eX+r@(:GS38DX/=>1m&Q$KKrp&VB;72D`Y*D.uC3 TTQy3bm.%5j@j.*FFOPFS');
define('LOGGED_IN_KEY',    'l0pn*$9(uY44#gb`Ss[1YH#-brl}G.,Nd]_BV@&bt-nC(O0LEM}%ohm`   -Xz>B');
define('NONCE_KEY',        'IqT8R][X$*caFSb|#7af]6NcA;NX?ydxQ%UQ]43lG#2Oh*D`2Ay]/:^l_?S@Qd#~');
define('AUTH_SALT',        '99A}QynO^XUWvj0 #f9jhHLu4aA)3{w2S5@=}P?;Pj x^??mGcrt%Gbva&X5 t+_');
define('SECURE_AUTH_SALT', 'bVoVKZ6w8UO|1.8U1D?x49ZgKvdv)9XH(jG,AQH(LNNj?2%4Vq?RN] M|+<-f+n>');
define('LOGGED_IN_SALT',   'PpsWF<>P3[_?Ks?kDIW1;)_5{g)O9eS)dOW>G!+;c=GjX,y-^W4_!J7j{&@W}PoE');
define('NONCE_SALT',       ')!sw#~Nr+aGHG78vFvBG=I04UF4z4zzNX3l13sS*wX5qS.)}=Zz`zfyfCF1?kis#');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
