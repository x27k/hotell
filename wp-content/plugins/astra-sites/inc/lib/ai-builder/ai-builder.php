<?php
/**
 * Plugin Name: AI Builder
 * Description: Starter Templates AI Builder
 * Author: Brainstorm Force
 * Version: 1.0.23
 * License: GPL v2
 * Text Domain: ai-builder
 *
 * @package {{package}}
 */

/**
 * Set constants
 */
define( 'AI_BUILDER_FILE', __FILE__ );
define( 'AI_BUILDER_BASE', plugin_basename( AI_BUILDER_FILE ) );
define( 'AI_BUILDER_DIR', plugin_dir_path( AI_BUILDER_FILE ) );
define( 'AI_BUILDER_URL', plugins_url( '/', AI_BUILDER_FILE ) );
define( 'AI_BUILDER_VER', '1.0.23' );

require_once 'ai-builder-plugin-loader.php';
require_once AI_BUILDER_DIR . 'inc/classes/functions.php';
