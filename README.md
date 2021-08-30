INSTALASI CI-REST

1. Import Database article.sql ke local db xampp

2. clone file di dalam xampp -> htdocs

3. jalankan xampp

4. di dalam ci-rest -> application -> config -> database.php

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root', --> disesuaikan
	'password' => '', --> disesuaikan
	'database' => 'article', --> nama database yg di Import di yg pertama
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE, 
	'db_debug' => FALSE, --> dibuat FALSE
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

 


