<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ovp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g f~.fX bq2K_scD^No$=#BWc7ChSV*Vm}:p DaEw,}lXa=b(vrRp:zfq:k![z~h' );
define( 'SECURE_AUTH_KEY',  '^{BNgjgHq|W#=d;pHr~EI?q{k /3&6&<3Pa^8.ct`8D;8xodAao?G[|y;;kXSu>!' );
define( 'LOGGED_IN_KEY',    'qg^bgC5ZWuc(.d]+a|KVXk_M1,/lLVI{oVhiS4_6B$;N)2:cg>&PI3Mo@_,sL>bF' );
define( 'NONCE_KEY',        'm>}}h]d7.GAv+`x(ATi9BLJ@:M16]]UkmPXoo`_`/~J>`&Ur72fd?[+pqk]6 ;kW' );
define( 'AUTH_SALT',        '.-pB!y{n{9m=NDLwmh#beJ#&+I8n6pGeXkR3gQWO%g2Ek3.8;s4}/fM1i?lFN~EM' );
define( 'SECURE_AUTH_SALT', 'c@K%3XbCF;k{k_nWMqgF|q+lCAA#TC:aZ$I13p]-=E5S&9Yx.8e7#}I5xn_%!.)j' );
define( 'LOGGED_IN_SALT',   '&$F)e<)Q0z.^UHN(>1Z~pxHoW]xm!7G<Z3U01Koh{x)fLz,yGA0kx]2|;)YFia`o' );
define( 'NONCE_SALT',       'DtU1bs}-u~w<^s>(zQn^3.gcy|ae=FrzS1GSWm|Yhqq,(jq]~1k3 9$<,[B.;hQ2' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
