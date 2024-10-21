
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
	<a href="viewcoffee.php?Barista_ID=<?php echo $_GET['Barista_ID']; ?>">
	View The coffee</a>
	<h1>Edit the Coffee!</h1>
	<?php $getCoffeeByID = getCoffeeByID($pdo, $_GET['Coffee_ID']); ?>
	<form action="core/handleForms.php?Coffee_ID=<?php echo $_GET['Coffee_ID']; ?>
	&Barista_ID=<?php echo $_GET['Barista_ID']; ?>" method="POST">
		<p>
			<label for="firstName">Coffee Menu</label> 
			<input type="text" name="Coffee_Menu" 
			value="<?php echo $getCoffeeByID['Coffee_Menu']; ?>">
		</p>
		<p>
			<label for="firstName">Coffee Cost</label> 
			<input type="text" name="Coffee_Cost" 
			value="<?php echo $getCoffeeByID['Coffee_Cost']; ?>">
			<input type="submit" name="editCBtn">
		</p>
	</form>
</body>
</html>
