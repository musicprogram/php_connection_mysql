
<?php 
// conexión mediante PDO
	$dsn = 'mysql:dbname=php_connection;host=127.0.0.1';
	$user = 'root';
	$password = '';

	try{
		$pdo = new PDO($dsn,
									 $user,
									 $password
									);
		// echo 'conexión ok';
	}catch( PDOException $e){
		echo 'Error al contactarnos' .$e->getMessage();
	}	
?>