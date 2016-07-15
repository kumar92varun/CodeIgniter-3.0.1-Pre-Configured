<?php
	$config['website_url'] = 'http://www.crossoverdemo.dev';

	$config['connection_information'] = array(
		'dsn'	=> 'mysql:host=localhost;dbname=crossover',
		'username' => 'db_username',
		'password' => 'db_password',
		'dbdriver' => 'pdo',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
?>