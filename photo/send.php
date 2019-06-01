<?php
$fio = $_POST['fio'];
$tel = $_POST['phone'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$fio = urldecode($fio);
$email = urldecode($email);
$tel = urldecode($tel);
$fio = trim($fio);
$email = trim($email);
$tel = trim($tel);
//echo $fio;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $tel;
//echo "<br>";
//echo $people;
//echo "<br>";
//echo $date;
//echo "<br>";
//echo $message;
if (mail("chernobylconductor@gmail.com", "Заявка с сайта", "Имя:".$fio.".\r\n E-mail: ".$email.".\r\n Телефон: ".$tel."".$message))
 { header("Location: https://linux.net.ua");
} else { 
   echo "Error";
}

