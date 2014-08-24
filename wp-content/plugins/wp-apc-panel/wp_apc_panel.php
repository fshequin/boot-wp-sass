<?php
/*
Plugin Name: WP APC Panel
Plugin URI: http://wordpress.org/extend/plugins/wp-apc-panel/
Description: Shows APC stats, opcode entries, user cache key/values etc. under Tools menu. WordPress compatible version of apc.php from pecl apc package.
Version: 1.1
Author: WhiteWP
Author URI: http://whitewp.com/
License: GPL2
*/

if ( !function_exists( 'add_action' ) )
    exit;


function wap_visible_to_site_admins() {
    $m = is_multisite();
    $s = is_super_admin();

    return !$m || $s || ( $m && ! $s && get_option( 'wap_visible_to_site_admins' ) == 1 );
}


add_action( 'init', 'wp_apc_panel_graphics' );
function wp_apc_panel_graphics() {
    $user = wp_get_current_user();

    if( is_user_logged_in() &&
        in_array( 'administrator', $user->roles ) &&
        $_GET['page'] == 'wp-apc-panel-page' &&
        isset( $_GET['IMG'] ) &&
        wap_visible_to_site_admins()
    ) {
        require dirname( __FILE__ ) . '/include/apc.php';
        exit;
    }
}


function wp_apc_panel_page() {
    echo '<div class="wrap dtt_apc_stats">';
    require dirname( __FILE__ ) . '/include/apc.php';
    echo '</div>';
}


add_action( 'admin_menu', 'wp_apc_panel_admin_menu' );
function wp_apc_panel_admin_menu() {
    if( ! wap_visible_to_site_admins() )
        return;

    add_submenu_page( 'tools.php', 'WP APC Panel', 'WP APC Panel', 'administrator', 'wp-apc-panel-page', 'wp_apc_panel_page' );
}


add_action( 'wp_ajax_wap_visible_to_site_admins', 'wap_ajax_option_save' );
function wap_ajax_option_save() {
    check_ajax_referer( 'wap_visible_to_site_admins', 'wap_visible_to_site_admins_nonce' );

    exit( is_multisite() && is_super_admin() ?
        (string) update_option( 'wap_visible_to_site_admins', (int) $_POST['make_visible'] ) : 0 );
}


add_action( 'admin_enqueue_scripts', 'wap_admin_scripts' );
function wap_admin_scripts( $hook ) {
    if( $hook == 'tools_page_wp-apc-panel-page' && is_multisite() && is_super_admin() )
        wp_enqueue_script( 'wp-apc-panel', plugins_url( 'wp-apc-panel/js/wp-apc-panel.js' ), array( 'jquery' ), false, true );
}