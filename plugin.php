<?php

/**
 * CC-Server-Time
 *
 * @package     CC-Server-Time
 * @author      Nikodem Jankiewicz
 * @author      Piotr Niewiadomski
 * @copyright   2018 Clearcode
 * @license     GPL-3.0+
 *
 * @wordpress-plugin
 * Plugin Name: CC-Server-Time
 * Plugin URI:  https://wordpress.org/plugins/cc-server-time
 * Description: This plugin adds a server time to all posts types edit screen.
 * Version:     1.0.0
 * Author:      Clearcode
 * Author URI:  https://clearcode.cc
 * Text Domain: cc-server-time
 * Domain Path: /languages/
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt

   Copyright (C) 2018 by Clearcode <https://clearcode.cc>
   and associates (see AUTHORS.txt file).

   This file is part of CC-Server-Time.

   CC-Server-Time is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   CC-Server-Time is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with CC-Server-Time; if not, write to the Free Software
   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

defined( 'ABSPATH' ) or exit;

add_action( 'post_submitbox_misc_actions', function() {
    printf(
        '<div class="misc-pub-section misc-pub-time"><span class="dashicons dashicons-clock"></span> %s: <strong>%s</strong></div>',
        __( 'Server time', 'cc-server-time' ),
        date( 'F j, Y, G:i', time() )
    );
} );
