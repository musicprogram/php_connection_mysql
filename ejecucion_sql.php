<?php 
	require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php mysql</title>
</head>
<body>
	<pre>
		<?php 
			$sql = 'SELECT * FROM users'; 
			foreach( $pdo->query( $sql ) as $rs ){
				var_dump($rs);
			}
		?>
	</pre>
</body>
</html>