<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
		
		</head>
	<body>
	   <ul>
            <li><a href="http://147.175.121.210:8166/Skuska/index.php">Home</a></li>
            <li><a href="http://147.175.121.210:8166/Skuska/gulicka/gulicka.php">Gulička na tyči</a></li>
            <li><a href="http://147.175.121.210:8166/Skuska/kyvadlo/index.php">Inverzné kyvadlo</a></li>
            <li><a href="http://147.175.121.210:8166/Skuska/auto/tlmic.php">Tlmič automobil</a></li>
            <li><a href="http://147.175.121.210:8166/Skuska/lietadlo/naklon.php">Náklon Lietadla</a></li>
			<li><a href="http://147.175.121.210:8166/Skuska/statistic.php">Štatistika</a></li>
		</ul>

<?php include "config.php";
$sql3 = "SELECT * FROM navstevnost stat ORDER BY stat.count DESC";
$result3 = $conn->query($sql3);

echo "<address>";
echo "<a href=\"mailto:webmaster@example.com\">ODOŠLI ŠTATISTIKU</a>";
if ($result3->num_rows > 0) {
    while($row3 = $result3->fetch_assoc()) {
        "<a href='mailto:".$row3["page"]."'>".$row3["count"]."</a>";
    }
}
$conn->close();
echo "</address>";
?>

</body>
</html>