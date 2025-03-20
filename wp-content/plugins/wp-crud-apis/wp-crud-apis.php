<?php
/**
 * Plugin Name: WP CRUD API's
 * Description: this is custom plungin for CRUD operation related to students table
 * Version: 1.0
 * Author:thanachot polbumrumg
 */

 if (!defined("WPINC")){
    exit;
 }

 register_activation_hook(__FILE__, "wpcp_create_studenะs_table");

 function wpcp_create_studenะs_table(){
    global $wpdb;
    $tablePrefix = $wpdb -> prefix; //wp_
    $tableName = $tablePrefix."students";


    $sqlQuery="
        CREATE TABLE `".$tableName."` (
            `id_product` varchar(100) NOT NULL,
            `id_user` varchar(1000) NOT NULL,
            `name_product` varchar(1000) NOT NULL,
            `price` varchar(1000) NOT NULL,
            `amount` varchar(1000) NOT NULL,
            `date` varchar(1000) NOT NULL,
            PRIMARY KEY (`id_product`)
        ) ENGINE=InnoDB DEFAULT ";
 include_once ABSPATH . "wp-admin/includes/upgrade.php";
 dbDelta($sqlQuery);
 }