<?php /**
 * Main Silohon Theme Function.
 * @package silohon */

define('THEME_NAME', 'Silohon');
define('DESIGNER', 'Nur Akbar');
define('DESIGNER_URI', 'https://github.com/silohon');
define('SILO_DIR', get_template_directory());
define('SILO_URI', get_template_directory_uri());

require SILO_DIR . '/functions/admin.php';
require SILO_DIR . '/functions/theme-support.php';
require SILO_DIR . '/functions/theme-script.php';