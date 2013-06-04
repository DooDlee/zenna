<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'db_wp_test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'landof1000rivers');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eI J@/_|dH.f)#kG~X^{9vxF@[-|%V)usq+iw!Q@TS@`K|0r8yIH<sqVK2NY<pgV');
define('SECURE_AUTH_KEY',  '^MSPdt5U}+sxHr=O5,hwY`P-AY[lh6<hJiCYg_^jeF_<+:+Qg:z)K?KObtX#j1h ');
define('LOGGED_IN_KEY',    '$|wC8|U `]aW8DqPgc]ciVu+up;mm;~Q /*w8D@x>MU6=%Uc)uBq-:B08`-?+jEG');
define('NONCE_KEY',        'Yt5A1{XxI[PLC t)-NYkGN5@efFM Sf*xk=2F4|$!_a;SG8J/izpy`waGa2w-}+7');
define('AUTH_SALT',        '1?4G3OKDgsBWe!hl<9b_V_JMr+}XE+}^N|g1{*R?_+ZI.[AEhCjy%s-=2<05Z,es');
define('SECURE_AUTH_SALT', '0D-&1WiItDZ2I~7*j!/Op/ZJ13k`qA7+R}WraIsd|.EXwa!zrY sW_1eg_nQJ &9');
define('LOGGED_IN_SALT',   'Ep[3~d_ubFtT9>qzs^{UG*aP> JqdXo-tXYc4l+P{&X+_<|Hl{1AFmNtii^r&kyh');
define('NONCE_SALT',       'By_n3fR7$qJ+f><y_N7-}-jr-ogLP%ilr[Ir?dJ+:cT+dR$hJ/=JCa7..3>YQ25(');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

