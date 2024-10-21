<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertBBtn'])) {

	$query = insertBarista($pdo,  $_POST['Barista_Name'],  $_POST['Barista_Specialty'], );

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}


if (isset($_POST['editBBtn'])) {
	$query = updateBarista($pdo,  $_POST['Barista_Name'],  $_POST['Barista_Specialty'], $_GET['Barista_ID']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Edit failed";;
	}

}




if (isset($_POST['deleteBBtn'])) {
	$query = deleteBarista($pdo, $_GET['Barista_ID']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Deletion failed";
	}
}




if (isset($_POST['insertNewCBtn'])) {
	$query = insertCoffee($pdo, $_POST['Coffee_Menu'], $_POST['Coffee_Cost'], $_GET['Barista_ID']);

	if ($query) {
		header("Location: ../viewcoffee.php?Barista_ID=" .$_GET['Barista_ID']);
	}
	else {
		echo "Insertion failed";
	}
}




if (isset($_POST['editCBtn'])) {
	$query = updateCoffee($pdo, $_POST['Coffee_Menu'], $_POST['Coffee_Cost'], $_GET['Coffee_ID']);

	if ($query) {
		header("Location: ../viewcoffee.php?Barista_ID=" .$_GET['Barista_ID']);
	}
	else {
		echo "Update failed";
	}

}




if (isset($_POST['deleteCBtn'])) {
	$query = deleteCoffee($pdo, $_GET['Coffee_ID']);

	if ($query) {
		header("Location: ../viewcoffee.php?Barista_ID=" .$_GET['Barista_ID']);
	}
	else {
		echo "Deletion failed";
	}
}




?>
