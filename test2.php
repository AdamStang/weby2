<?php
    include "config.php";
	
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip_address = $_SERVER["HTTP_CLIENT_IP"];
        }else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $ip_address = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }else{
            $ip_address = $_SERVER["REMOTE_ADDR"];
        }




if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $comments= $_POST['test'];
    $spravnost;
	
	$cmd = "octave --eval '$comments'";
	$op = null;
	$output = exec($cmd, $op, $rv);
	
    echo $comments;
    if($comments == ""){
        $spravnost = 0;
    }
    else{
        $spravnost = 1;
    }
    
    $date = date("Y.m.d");
    $cas = date("H:i:s");
	//$op = str_replace(' ', '', $op);
	//$op = implode('',$op);
	
	//echo date("Y.m.d");








	
	echo '<pre>';
	echo "<br>";
	var_dump($op);
    echo '</pre>';
    
    $sql = "INSERT INTO prikazy (prikaz, spravnost, datum, cas, ip) VALUES ('$comments', '$spravnost', '$date', '$cas', '$ip_address')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
?>

	</body>
	</html>