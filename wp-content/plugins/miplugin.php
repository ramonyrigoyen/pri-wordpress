<?php
/*Plugin Name: Chupa Cuete
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: hdiouhqbdioudhbqiouqdbouiqdwbuowqdboqudwbqdouwbjhwsjdhddhjhjshdjhsjdshdjsdhsjdhsdjshdjsdh
Author: Ramon yrigoyen
Version: 65.4.4
Author URI: kwsghiousqwhowiquhwo
*/

function erksoporte_install(){

	global $wpdb;
		$table_name = $wpdb->prefix . 'soporte';

		$sql = "CREATE TABLE $table_name ( id mediumint(9) NOT NULL AUTO_INCREMENT, time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL, nombre VARCHAR(50) DEFAULT '' NOT NULL, consulta VARCHAR(200) DEFAULT '' NOT NULL, email VARCHAR(100) DEFAULT '' NOT NULL, UNIQUE KEY id (id)

		);";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta( $sql );
}

register_activation_hook ( __FILE__, 'erksoporte_install');

function soporte_shortcode (){

	ob_start();

	get_template_part( '/template-parts/formulario' );

}

add_shortcode( 'soporte', 'soporte_shortcode' );

function insertar_datos(){

	$nombre = $_POST ['	txtnombre'];
	$email = $_POST ['txtemail'];
	$consulta = $_POST['txtconsulta'];
	date_default_timezone_set('America/Lima');
	$hora = date('Y-m-d H:i:s');

	global $wpdb;
	$table_name = $wpdb->prefix . 'soporte';
	$wpdb->insert($table_name,
		array (
		'time' => $hora,
		'nombre' => $nombre,
		'consulta' => $consulta,
		'email' => $email
		)
	);

	echo 'REGISTRO INSERTADP CORRECTAMENTE';

}

add_action('admin_post_nopriv_soporte', 'insertar_datos');

add_action('admin_post_soporte', 'insertar_datos');