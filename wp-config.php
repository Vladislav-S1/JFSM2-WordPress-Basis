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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'devitfortestonly' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'vs_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Blabla32' );

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
define( 'AUTH_KEY',         '9@:d1vJC|9SeMeEPMRx6NeRd&+fxoxgY+ntz V#&tPe*(20?iO>L}75V]BJCxeAo' );
define( 'SECURE_AUTH_KEY',  'yyDUneG>EA$HzD l~-ynXMz+v!d|>q8x:D/_o^@77t*?$d|H&|@C(1Ff([.Wx3:#' );
define( 'LOGGED_IN_KEY',    'HBv$WS~E-:2[jm)y<%#qi{]wEpn$dD56-yRr3^_gD-lmqV@d5U}f-+/i,ls kx#H' );
define( 'NONCE_KEY',        'jr)`Ui!t?%8ax{(oHfB&vD=R]mvbL_T]b<rEbGhwLS<Kkr0J%$`Kk5x?>}Ug:dzc' );
define( 'AUTH_SALT',        'j=$q3o]Jh!^||Hq.9(:(]Jkadpu61wN0lC/RAJ2bO^Wq> ?|(RD|wLS(w.b2C?DC' );
define( 'SECURE_AUTH_SALT', 'C?QIAg?Nt8:w0h:_s;rnSVoHT:y(R=*#~6`INU y(#;d$EJ+=W8.qPV6d,O6?|ID' );
define( 'LOGGED_IN_SALT',   'Fo%=7N&1fD@I,wdr[;CnIm?WtrAC2M@E6+cm]Y,kN;oiQ]kNSGg Z%/,n/y*S^Ga' );
define( 'NONCE_SALT',       'dcg)U[Pr<HMLNhm|J8T;~J]aUMY2&6ux<>7l{eMSrYrC:MKPFaY`4 Ze4iuKcb:p' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
