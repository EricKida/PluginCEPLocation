<?php 
/*
* Plugin Name: CEPLocation
* Description: Plugin que busca o endereço CEP de uma pessoa.
* Version: 1.0
* Author: Eric Kida
* Author URI: https://github.com/EricKida 
*/

function CEPLocation(){
	return '<h2>CEPLocation</h2>'
}

add_shortcode('cep_location','CEPLocation')