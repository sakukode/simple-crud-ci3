# simple-crud-ci3
Reunian with Codeigniter

Instalasi :
-----------

- clone repo ini
	
	```
	git clone https://github.com/sakukode/simple-crud-ci3.git
	```


- buat database baru, terus import database yang ada pada folder db 

- setting config database, dengan mengisi nama database, username db dan password yang sesuai. misal nama db: "db_store", username: "root", password: "root".

```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'db_store',
	'dbdriver' => 'mysqli',
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
```
