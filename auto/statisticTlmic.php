<?php
//* ŠTATISTIKA*
include "../config.php";
$cc = 0;
$sql = "SELECT * FROM navstevnost";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $cc = $row["count"];
    }
} else {
    echo "0 results";
}
$cc++;
$sql2 = "UPDATE navstevnost SET count=$cc WHERE id='1'";

if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


/*$checkStatistic = "SELECT * FROM statistic stat WHERE stat.id = 3";
$resultStatistic = $conn->query($checkStatistic);
if($rowStatistic = $resultStatistic->fetch_assoc()){
    $checkStatistic = $rowStatistic["count"] + 1;
    $statistic = "UPDATE statistic stat SET stat.count = '$checkStatistic' WHERE stat.id = 3";
}
if($conn->query($statistic) === FALSE){ echo $conn->error; }
$conn->close();*/

?>