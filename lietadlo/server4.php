<?php
include nakl.m;
include "../config.php";

$sql = "SELECT lietadlo FROM vstup WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $r = $row["lietadlo"];
  }
}else{
	$r = 0;
}

$cmd = "octave --eval 'r=$r; nakl; '";

$op = null;
$output = exec($cmd, $op, $rv);
	  
	  
	  
		$x = 2;
		$x3 = 406;
		$xx = 810;
      if($_SERVER["REQUEST_METHOD"] == "GET"){
		header("Content-Type: text/event-stream");
		header("Cache-Control: no-cache");
    

        while($x < 403){
			
            $y = $op[$x];
			$y = str_replace(' ', '', $y);
			$y3 = $op[$x3];
			$y3 = str_replace(' ', '', $y3);
			$t = $op[$xx];
			$t = str_replace(' ', '', $t);
			$x++;
			$x3++;
			$xx++;
			
            echo "id: $x\n";
            echo "data: {\n";
            echo "data: \"lietadl\" : \"$y\",\n";
 			echo "data: \"klap\" : \"$y3\",\n";
			echo "data: \"t\" : \"$t\"\n";
            echo "data: }\n\n";

            while(ob_get_level() > 0){
                ob_end_flush();
            }
            flush();

            if(connection_aborted()) break;

            sleep(1);
        }
    }
	
 
?>


