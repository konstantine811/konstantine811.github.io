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
define('DB_NAME', 'my');

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
define('AUTH_KEY',         '-TV#CVV&74@c:y^VoL^wv=aM5bK/.TXRSUUJ$6uDA:6>y*OodFfczwB~B[Q2<}Bb');
define('SECURE_AUTH_KEY',  '+-vvvJ_bK[;yk*;itK+V>h;vfs@iTlO=zyG:@K@644c1K;cbeGfg!WBM}^D{VXf<');
define('LOGGED_IN_KEY',    '8R#&h0UM=(N_,+q[k}cWRm|t5Q_Jc9J4}Z|/?x5 hS$0PGk=c^RV,tKn4+$]tP:!');
define('NONCE_KEY',        'lK}NNqc T0K3z1Zg:e;mzS:hDYU`nsiUx}5M,6ymH|=p/?<;~o>Z<.]%mi{*})dk');
define('AUTH_SALT',        'Ga[[cPs*7Y`DuLoSm43y`n: Fd02HgT]PlI2n^{+)fx6qt}Ik#)&jdkx5P!~of!?');
define('SECURE_AUTH_SALT', ' i{.jd&+=[]B)(Ik4b+&AQmfbD!c}%P[cL&ma~Bcc{m`ksK6#p!5QaC?:]jqY+/;');
define('LOGGED_IN_SALT',   'YC=7xs/cnph t.GV*CgEkIfAX ?%3R9cf.G<)m$^NO6KuvyuRO?W*vpB*m*ENW|9');
define('NONCE_SALT',       'PQu,<-&3qrbUHa293$3@)}Q#q&KjtizO$z{hAdnHeul}CGG_DD`4f>2Rs,[W:dU ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp4_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
