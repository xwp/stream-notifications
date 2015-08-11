<?php
/**
 * Plugin Name: Stream Notifications
 * Plugin URI:  http://wordpress.org/plugins
 * Description: Stream Notifications Plugin
 * Version:     0.1.0
 * Author:      Stream
 * Author URI:  n/a
 * License:     GPLv2+
 * Text Domain: stream_notifications
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2015 10up (email : info@10up.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Built using yo wp-make:plugin
 * Copyright (c) 2015 10up, LLC
 * https://github.com/10up/generator-wp-make
 */

// Useful global constants
define( 'STREAM_NOTIFICATIONS_VERSION', '0.1.0' );
define( 'STREAM_NOTIFICATIONS_URL',     plugin_dir_url( __FILE__ ) );
define( 'STREAM_NOTIFICATIONS_PATH',    dirname( __FILE__ ) . '/' );
define( 'STREAM_NOTIFICATIONS_INC',     STREAM_NOTIFICATIONS_PATH . 'includes/' );

// Include files
require_once STREAM_NOTIFICATIONS_INC . 'functions/core.php';
require_once STREAM_NOTIFICATIONS_INC . 'post-types/notifications.php';
require_once STREAM_NOTIFICATIONS_INC . 'admin/notifications_admin.php';


// Activation/Deactivation
register_activation_hook( __FILE__, '\Stream\Stream_Notifications\Core\activate' );
register_deactivation_hook( __FILE__, '\Stream\Stream_Notifications\Core\deactivate' );

// Bootstrap
Stream\Stream_Notifications\Core\setup();
Stream\Stream_Notifications\Notifications\setup();
Stream\Stream_Notifications\Notifications_Admin\setup();