<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Welcome to Kapihan ni Mark. Add new Barista!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="Barista_Name">Barista Name</label> 
			<input type="text" name="Barista Name">
		</p>
		<p>
			<label for="Barista_Specialty">Barista Specialty</label> 
			<input type="text" name="Barista_Specialty">

			<input type="submit" name="insertBBtn">
		</p>


		
	</form>
	<?php $getAllBarista  = getAllBarista ($pdo); ?>
	<?php foreach ($getAllBarista  as $row) { ?>
		<div class="container" style="border-style: solid;  margin-left: -1px; ">
		<h3>Barista Name: <?php echo $row['Barista_Name']; ?></h3>
		<h3>Barista Specialty: <?php echo $row['Barista_Specialty']; ?></h3>
		<h3>Date Added: <?php echo $row['date_added']; ?></h3>


		<div class="editAndDelete">
			<a href="viewcoffee.php?Barista_ID=<?php echo $row['Barista_ID']; ?>">View Coffee</a>
			<a href="editbarista.php?Barista_ID=<?php echo $row['Barista_ID']; ?>">Edit</a>
			<a href="deletebarista.php?Barista_ID=<?php echo $row['Barista_ID']; ?>">Delete</a>

			
		


	
	<?php } ?>
</body>
</html>
