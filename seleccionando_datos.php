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

			$SqlStatus = 'SELECT users.*, StatusUser.StatusName FROM Users INNER JOIN StatusUser ON StatusUser.SatusId = users.SatusId '; 
			$statementStatus = $pdo->prepare($SqlStatus);
			$statementStatus->execute();
			$resultsStatus = $statementStatus->fetchAll();
			// var_dump($resultsStatus);


		?>
	</pre>
	
	

	<div class="container">
		
     <div class="row">
     	<div class="col s12 m6 green white-text">
     		
 <table>
        <thead>
          <tr>
              <th>id</th>
              <th>last name</th>
              <th>first name</th>
              <th>address</th>
              <th>city</th>
              <th>status</th>
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
        		<td><?php echo$rs['SatusId']; ?></td>
        	</tr>
				<?php 
					}
        ?>
        
        </tbody>
      </table>

     	</div>
     	<div class="col s12 m6 blue white-text">
     		 <table>
        <thead>
          <tr>
              <th>id</th>
         
              <th>first name</th>
            
              <th>status</th>
          </tr>
        </thead>

        <tbody>
        	
        <?php 
        	foreach ($resultsStatus as $rs) {
       
        ?>
        	<tr>
        		<td><?php echo$rs['Id']; ?></td>
        		
        		<td><?php echo$rs['FirstName']; ?></td>
        		<td><?php echo$rs['StatusName']; ?></td>
        		
        	</tr>
				<?php 
					}
        ?>
        
        </tbody>
      </table>


     	</div>
     </div>


	</div>

	






</body>
</html>