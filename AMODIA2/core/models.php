
<?php  

function insertBarista($pdo, $Barista_Name, $Barista_Specialty) {

	$sql = "INSERT INTO Barista (Barista_Name, Barista_Specialty) VALUES(?,?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Barista_Name, $Barista_Specialty]);

	if ($executeQuery) {
		return true;
	}
}



function updateBarista($pdo, $Barista_Name, $Barista_Specialty, $Barista_ID) {

	$sql = "UPDATE Barista
				SET Barista_Name = ?,
					Barista_Specialty = ?
				WHERE Barista_ID = ?
			";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Barista_Name, $Barista_Specialty, $Barista_ID]);
	
	if ($executeQuery) {
		return true;
	}

}


function deleteBarista($pdo, $Barista_ID) {
	$deletebaristaco = "DELETE FROM Barista WHERE Barista_ID = ?";
	$deleteStmt = $pdo->prepare($deletebaristaco);
	$executeDeleteQuery = $deleteStmt->execute([$Barista_ID]);

	if ($executeDeleteQuery) {
		$sql = "DELETE FROM Barista WHERE Barista_ID = ?";
		$stmt = $pdo->prepare($sql);
		$executeQuery = $stmt->execute([$Barista_ID]);

		if ($executeQuery) {
			return true;
		}

	}
	
}




function getAllBarista($pdo) {
	$sql = "SELECT * FROM Barista";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getBaristaByID($pdo, $Barista_ID) {
	$sql = "SELECT * FROM Barista WHERE Barista_ID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Barista_ID]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}





function getCoffeeBybarista($pdo, $Barista_ID) {
	
	$sql = "SELECT 
				Coffee.Coffee_ID AS Coffee_ID,
				Coffee.Coffee_Menu AS Coffee_Menu,
				Coffee.Coffee_Cost AS Coffee_Cost,
				Coffee.date_added AS date_added,
				Barista.Barista_Name AS Coffee_Maker
			FROM Coffee
			JOIN Barista ON Coffee.Barista_ID = Barista.Barista_ID
			WHERE Coffee.Barista_ID = ? 
			GROUP BY Coffee.Coffee_Menu;
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Barista_ID]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}


function insertCoffee($pdo, $Coffee_Menu, $Coffee_Cost, $Barista_ID) {
	$sql = "INSERT INTO Coffee (Coffee_Menu, Coffee_Cost, Barista_ID) VALUES (?,?,?)";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Coffee_Menu, $Coffee_Cost, $Barista_ID]);
	if ($executeQuery) {
		return true;
	}

}

function getCoffeeByID($pdo, $Coffee_ID) {
	$sql = "SELECT 
				Coffee.Coffee_ID AS Coffee_ID,
				Coffee.Coffee_Menu AS Coffee_Menu,
				Coffee.Coffee_Cost AS Coffee_Cost,
				Coffee.date_added AS date_added,
				Barista.Barista_Name AS Coffee_Maker
			FROM Coffee
			JOIN Barista ON Coffee.Barista_ID = Barista.Barista_ID
			WHERE Coffee.Coffee_ID  = ? 
			GROUP BY Coffee.Coffee_Menu";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Coffee_ID]);
	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function updateCoffee($pdo, $Coffee_Menu, $Coffee_Cost, $Coffee_ID) {
	$sql = "UPDATE Coffee
			SET Coffee_Menu = ?,
				Coffee_Cost = ?
			WHERE Coffee_ID = ?
			";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Coffee_Menu, $Coffee_Cost, $Coffee_ID]);

	if ($executeQuery) {
		return true;
	}
}

function deleteCoffee($pdo, $Coffee_ID) {
	$sql = "DELETE FROM Coffee WHERE Coffee_ID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Coffee_ID]);
	if ($executeQuery) {
		return true;
	}
}




?>
