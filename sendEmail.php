<?php

include "config.php";
$sql3 = "SELECT * FROM navstevnost stat ORDER BY stat.count DESC";
$result3 = $conn->query($sql3);
$txt="";


while ($row3 = $result3->fetch_assoc())
{
    $txt= $txt." ".$row3["page"] . "=>" . $row3["count"];
}


use PHPMailer\PHPMailer\PHPMailer;

    if ( isset($_POST['email'])) {

        $email = $_POST['email'];
        $subject = "statistika modelov";
        //$body = $_POST['body'];
        $body = $txt ;

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "eemamp2@gmail.com";
        $mail->Password = 'WwfhCT6OYirM';
        $mail->Port = 465; //587
        //$mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls
        //$mail->SMTPSecure = "tls";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom("eemamp2@gmail.com", "eMAMP");
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {

            $response = "Email is sent!";
        } else {

            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("response" => $response)));
    }
?>
