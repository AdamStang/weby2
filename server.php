<?php
include hh.m;
include p5.js;
$cmd = "octave --eval 'hh'";
$op = null;
$output = exec($cmd, $op, $rv);
/*var_dump($output);
echo "<br>";
var_dump($op);
var_dump($rv);
echo "<br><br>";*/
/*
echo $op[0];
//echo $op[1]."<br>";
echo $op[2]."<br>";
//echo $op[3]."<br>";
echo $op[4]."<br>";
echo $op[5];
echo $op[6];
echo $op[7];
echo $op[8]."<br>";
$op[10]; // r
$r = substr($op[10],4,4); // r = 0.2
echo "r=".$r;*/

      

      if($_SERVER["REQUEST_METHOD"] == "GET"){
		header("Content-Type: text/event-stream");
		header("Cache-Control: no-cache");
        $x = 2;
		$x3 = 206;
		$xx = 410;

        while($x < 203){
			
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
            echo "data: \"pozicia\" : \"$y\",\n";
 			echo "data: \"uhol\" : \"$y3\",\n";
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



