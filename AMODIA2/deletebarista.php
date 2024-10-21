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
	<h1>Are you sure you want to delete this Barista?</h1>
	<?php $getBaristaByID = getBaristaByID($pdo, $_GET['Barista_ID']); ?>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Barista Name: <?php echo $getBaristaByID['Barista_Name']; ?></h2>
		<h2>Barista Specialty: <?php echo $getBaristaByID['Barista_Specialty']; ?></h2>
		

		<div class="deleteBBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?Barista_ID=<?php echo $_GET['Barista_ID']; ?>" method="POST">
				<input type="submit" name="deleteBBtn" value="Delete">
			</form>			
		</div>	

	</div>
</body>
</html>