<?php


// Include autoloader
require_once 'dompdf/autoload.inc.php';
include "config.php";

if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip_address = $_SERVER["HTTP_CLIENT_IP"];
        }else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $ip_address = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }else{
            $ip_address = $_SERVER["REMOTE_ADDR"];
        }

// Reference the Dompdf namespace
use Dompdf\Dompdf;




    // Instantiate and use the dompdf class
    $dompdf = new Dompdf();

	$query = "SELECT * FROM prikazy WHERE ip='$ip_address'";
	$result = mysqli_query($conn, $query);
	$output = "<style>ul{list-style-type: none;}</style><h2>Api prikazy ktore zadal pouzivatel z ip adresy" . $ip_address . "</h2>";
	while($row = mysqli_fetch_array($result)){
		$output = $output . "<ul><li>ID: " . $row["id"] . "</li><li>Prikaz: " . $row["prikaz"] . "</li><li>Spravnost: " . $row["spravnost"] . "</li><li>Datum: " . $row["datum"] . "</li><li>Cas: " . $row["cas"] . "</li></ul><br>";
	}
    // Load HTML content
    $dompdf->loadHtml($output);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    //$dompdf->stream();
    // Output the generated PDF (1 = download and 0 = preview)
    $dompdf->stream();




?>