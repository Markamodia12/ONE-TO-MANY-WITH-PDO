
<?php require_once 'core/handleForms.php'; ?>
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
	<?php $getBaristaByID = getBaristaByID($pdo, $_GET['Barista_ID']); ?>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php?Barista_ID=<?php echo $_GET['Barista_ID']; ?>" method="POST">
		<p>
			<label for="Barista_Name">Barista Name</label> 
			<input type="text" name="Barista_Name" value="<?php echo $getBaristaByID['Barista_Name']; ?>">
		</p>
		<p>
			<label for="Barista_Specialty">Barista Specialty</label> 
			<input type="text" name="Barista_Specialty" value="<?php echo $getBaristaByID['Barista_Specialty']; ?>">
		</p>
			<input type="submit" name="editBBtn">
		</p>
	</form>
</body>
</html>
