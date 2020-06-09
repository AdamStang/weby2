<?php
	include "config.php";
?>
<!DOCTYPE html>
<html lang="sk">
<head>

</head>
<body>
	<?php
		echo "<H2>Api prikazy</H2>";
		$sql = "SELECT * FROM prikazy";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["id"]. " - Name: " . $row["prikaz"]. " " . $row["spravnost"]. " " . $row["datum"] . " " . $row["cas"] . "<br>";
		  }
		} else {
		  echo "0 results";
}
		for(){
			
		}
	?>
</body>
</html>
