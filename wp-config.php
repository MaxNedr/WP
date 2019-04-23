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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~*`*2DIe[/^nT0Nmw(45tTbz&QPBq5=YarN?=7d5h.wR/K,TjvCBDx(r@[R&uR0Y' );
define( 'SECURE_AUTH_KEY',  '^-h y62_zbG6rVIC`#n90HP)k88bcKEk3`:|4~)%i[]%/!T60Zk<PXUX#4Ca2e1I' );
define( 'LOGGED_IN_KEY',    'S`iWh<}V;H=ak}/*^&h$m[M.*WqJfYTN]<u#6NMg(x+@{ULL![KbN;C/=W~.aQ4@' );
define( 'NONCE_KEY',        'l/k5R),wA#]*WM<r]M=(URz`f[+f+vA3&:]7$;aZo)1lTYq]6/lk8#GfC8=]x(rG' );
define( 'AUTH_SALT',        'rH:ueiJB0Vhryd^9uojqCg(iGS|}k}4zNg.Qg4cu5^pg$Aouro95#6GU_$y4p~J(' );
define( 'SECURE_AUTH_SALT', 'Qh(@XW5J=96ju`pG&e3C.}NYY<HC:lM<8Z*u~R$OK[z)M-b~{?P-3P?mr%mMpecm' );
define( 'LOGGED_IN_SALT',   'f2)kCE(&X7[a AyAbPVr+4ErhU}<C)$A/3$j~-3c}4^kUrI8i. {yb6w&k#y&~{l' );
define( 'NONCE_SALT',       'b%XYz/bG1do Q@xbkItW%qQCTa/vRSh#c8!_ =2d.= [];.rbbo_15_8GLp^vo`V' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
