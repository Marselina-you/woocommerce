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
define( 'DB_NAME', 'woocom' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$64Q[!K?)Q&JWn_b)L7Hn9`%?Y34re}&jsO*Zip0wXE|U:~dx0sG;a=Hn2CCTf}l' );
define( 'SECURE_AUTH_KEY',  '7le8^w@]#k.Ty8|RoVtft`^s4lZ&|ox|x?g?mS~lbF;o<$=6`ct+K]e,au/2/{&Y' );
define( 'LOGGED_IN_KEY',    'p@Ei/2.t}]L^)N0.R*>_kRr<!}ac}kA#kSZJVlhHG(pj<If*eb@XGA`3sMBOu]?g' );
define( 'NONCE_KEY',        ']Hvw=NQ&n?fSCAF$W 0i*Gle*@8Dzbhj1 & ;A#0KNv(Zf+I9_,/hadL0_B0!Ds9' );
define( 'AUTH_SALT',        'Se2}^2@r6kR[1JB$i$Js@L{#ZfLsD~-gQX7ToqNAy^MPjaL{t$d:abo||x7%ZWC,' );
define( 'SECURE_AUTH_SALT', 'm*A;(7<@xs-[wzqxJ;? f/hP7_? #7@8D8S>E+VPF@xT0W{.wqkY!hr%*GX]tksB' );
define( 'LOGGED_IN_SALT',   '<w.B)TCvDi@#m~u<_e[p<H`uMOgqgH)>qlY=Yn32SbZGYAuEYX1HmQN7EDr3<1(*' );
define( 'NONCE_SALT',       '>ao?,#**fo2U#4foQAGy=VbVILhAVJHk^|7NySjD2_Y&6pigg?so9l}$^9?D2g_:' );

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
