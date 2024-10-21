
<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="index.php">Return to home</a>
	<h1>Add New Coffee</h1>
	<form action="core/handleForms.php?Barista_ID=<?php echo $_GET['Barista_ID']; ?>" method="POST">
		<p>
			<label for="firstName">Coffee Menu</label> 
			<input type="text" name="Coffee_Menu">
		</p>
		<p>
			<label for="firstName">Coffee Cost</label> 
			<input type="text" name="Coffee_Cost">
			<input type="submit" name="insertNewCBtn">
		</p>
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>Coffee ID</th>
	    <th>Coffee Menu</th>
		<th>Coffee Cost</th>
	    <th>Coffee Maker</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $getCoffeeBybarista = getCoffeeBybarista($pdo, $_GET['Barista_ID']); ?>
	  <?php foreach ($getCoffeeBybarista as $row) { ?>
	  <tr>
	  	<td><?php echo $row['Coffee_ID']; ?></td>	  	
	  	<td><?php echo $row['Coffee_Menu']; ?></td>	  	
	  	<td><?php echo $row['Coffee_Cost']; ?></td>	  	
	  	<td><?php echo $row['Coffee_Maker']; ?></td>	  	
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editCoffee.php?Coffee_ID=<?php echo $row['Coffee_ID']; ?>&Barista_ID=<?php echo $_GET['Barista_ID']; ?>">Edit</a>

	  		<a href="deleteCoffee.php?Coffee_ID=<?php echo $row['Coffee_ID']; ?>&Barista_ID=<?php echo $_GET['Barista_ID']; ?>">Delete</a>
	  	</td>	  	
	  </tr>
	<?php } ?>
	</table>

	
</body>
</html>
