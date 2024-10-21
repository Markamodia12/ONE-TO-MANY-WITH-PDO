
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
	<?php $getCoffeeByID = getCoffeeByID($pdo, $_GET['Coffee_ID']); ?>
	<h1>Are you sure you want to delete this Coffee from the Menu?</h1>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Coffee Menu: <?php echo $getCoffeeByID['Coffee_Menu'] ?></h2>
		<h2>Coffee Cost: <?php echo $getCoffeeByID['Coffee_Cost'] ?></h2>
		<h2>Coffee Maker: <?php echo $getCoffeeByID['Coffee_Maker'] ?></h2>
		<h2>Date Added: <?php echo $getCoffeeByID['date_added'] ?></h2>

		<div class="deleteCBtn" style="float: right; margin-right: 10px;">

			<form action="core/handleForms.php?Coffee_ID=<?php echo $_GET['Coffee_ID']; ?>&Barista_ID=<?php echo $_GET['Barista_ID']; ?>" method="POST">
				<input type="submit" name="deleteCBtn" value="Delete">
			</form>			
			
		</div>	

	</div>
</body>
</html>
