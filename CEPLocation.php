<?php 
/*
* Plugin Name: CEPLocation
* Description: Plugin que busca o endereço CEP de uma pessoa.
* Version: 1.0
* Author: Eric Kida
* Author URI: https://github.com/EricKida 
*/

function CEPLocation(){
	echo file_get_contents(plugins_url().'/CEPLocation/formCEP.php');
}

// No shortcode no wordpress: [cep_location]
add_shortcode('cep_location','CEPLocation');
