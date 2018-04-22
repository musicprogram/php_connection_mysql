<?php 
	require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php mysql</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
	<pre>
		<?php 
			$sql = 'SELECT * FROM users'; 
			$statement = $pdo->prepare($sql);
			$statement->execute(array());
			$results = $statement->fetchAll();
			// var_dump($results);
		?>
	</pre>

	

	<div class="container">
		
      <table>
        <thead>
          <tr>
              <th>id</th>
              <th>last name</th>
              <th>first name</th>
              <th>address</th>
              <th>city</th>
          </tr>
        </thead>

        <tbody>
        	
        <?php 
        	foreach ($results as $rs) {
       
        ?>
        	<tr>
        		<td><?php echo$rs['Id']; ?></td>
        		<td><?php echo$rs['LastName']; ?></td>
        		<td><?php echo$rs['FirstName']; ?></td>
        		<td><?php echo$rs['Address']; ?></td>
        		<td><?php echo$rs['City']; ?></td>
        	</tr>
				<?php 
					}
        ?>
        
        </tbody>
      </table>
	</div>

	






</body>
</html>