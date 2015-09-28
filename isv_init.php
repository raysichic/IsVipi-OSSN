<?php
	/*******************************************************
	 *   Copyright (C) 2014  http://isvipi.org
	
		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation; either version 2 of the License, or
		(at your option) any later version.
	
		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.
	
		You should have received a copy of the GNU General Public License along
		with this program; if not, write to the Free Software Foundation, Inc.,
		51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
	 ******************************************************/ 
	 
//Base paths
$chop = -strlen(basename($_SERVER['SCRIPT_NAME']));
define('DOC_ROOT',substr($_SERVER['SCRIPT_FILENAME'],0,$chop));
define('URL_ROOT',substr($_SERVER['SCRIPT_NAME'],0,$chop));

// directory paths
define('ISVIPI_ROOT', DOC_ROOT);
define('ISVIPI_INC_BASE', ISVIPI_ROOT . 'isv_inc' . DIRECTORY_SEPARATOR);
define('ISVIPI_DB_BASE', ISVIPI_INC_BASE . 'isv_db' . DIRECTORY_SEPARATOR);
define('ISVIPI_UPLOADS_BASE', ISVIPI_INC_BASE . 'isv_uploads' . DIRECTORY_SEPARATOR);
define('ISVIPI_STYLE_BASE', ISVIPI_INC_BASE . 'isv_style.lib' . DIRECTORY_SEPARATOR);
define('ISVIPI_CLASSES_BASE', ISVIPI_INC_BASE . 'isv_classes' . DIRECTORY_SEPARATOR);
define('ISVIPI_FUNCTIONS_BASE', ISVIPI_INC_BASE . 'isv_functions' . DIRECTORY_SEPARATOR);
define('ISVIPI_PROCESS_BASE', ISVIPI_INC_BASE . 'isv_processes' . DIRECTORY_SEPARATOR);
define('ISVIPI_PAGES_BASE', ISVIPI_INC_BASE . 'isv_pages' . DIRECTORY_SEPARATOR);
define('ISVIPI_THEMES', ISVIPI_ROOT . 'isv_themes' . DIRECTORY_SEPARATOR);
define('ISVIPI_MOBILE_THEME_BASE', ISVIPI_THEMES . 'mobile' . DIRECTORY_SEPARATOR);
define('ISVIPI_PLUGINS_BASE', ISVIPI_ROOT . 'isv_plugins' . DIRECTORY_SEPARATOR);
define('ISVIPI_LANG_BASE', ISVIPI_ROOT . 'isv_lang' . DIRECTORY_SEPARATOR);
define('ISVIPI_CRON_BASE', ISVIPI_INC_BASE . 'isv_cron' . DIRECTORY_SEPARATOR);
//define('ISVIPI_ADMIN_BASE', ISVIPI_ROOT . 'admincp' . DIRECTORY_SEPARATOR);
//define('ISVIPI_ADMIN_INC_BASE', ISVIPI_ROOT . 'inc/admin.inc' . DIRECTORY_SEPARATOR);


// url paths
define ('ISVIPI_URL', URL_ROOT);
define ('ISVIPI_FULL_HTTP_URL', $_SERVER['HTTP_HOST']);
define ('ISVIPI_STYLE_URL', ISVIPI_URL . 'isv_inc/isv_style.lib' .DIRECTORY_SEPARATOR);
define ('ISVIPI_UPLOADS_URL', ISVIPI_URL . 'isv_inc/isv_uploads' .DIRECTORY_SEPARATOR);

//define ('ISVIPI_ADMIN_URL', URL_ROOT.'admin'. DIRECTORY_SEPARATOR);
//define('ISVIPI_PROFILE_PIC_URL', ISVIPI_URL . 'inc/users/thumbs' . DIRECTORY_SEPARATOR);
//define ('ISVIPI_USER_PROCESS', ISVIPI_URL . 'users/processUsers'. DIRECTORY_SEPARATOR);

//define ('ISVIPI_DB_URL', ISVIPI_URL . 'inc/db' .DIRECTORY_SEPARATOR);
//define('ISVIPI_INC_MODS_URL', ISVIPI_URL . 'inc/mods' . DIRECTORY_SEPARATOR);
//define ('ISVIPI_MOBILE_THEME_URL', ISVIPI_URL . 'themes/mobile' .DIRECTORY_SEPARATOR);
//define('ISVIPI_USER_INC_URL', ISVIPI_URL . 'inc/users.inc' . DIRECTORY_SEPARATOR);
//define('ISVIPI_ADMIN_INC_URL', ISVIPI_URL . 'inc/admin.inc' . DIRECTORY_SEPARATOR);
//define('ISVIPI_CRON_URL', ISVIPI_URL . 'inc/cron' . DIRECTORY_SEPARATOR);
//define('ISVIPI_TIMELINE_PICS_URL', ISVIPI_URL . 'inc/images/timeline' . DIRECTORY_SEPARATOR);
//define('ISVIPI_ALBUM_PICS_URL', ISVIPI_URL . 'inc/images/albums' . DIRECTORY_SEPARATOR);

//Image thumbnail sizes
define('ISVIPI_THUMBS', '150x150_');
define('ISVIPI_600', '600x600_');
?>