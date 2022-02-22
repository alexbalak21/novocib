<?php 
function logVisit(){
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    logtoDb($time, $ip);
}

 function logtoDb($time, $ip)
 {
 $servername = "db68325-novo.sql-pro.online.net";
 $username = "db122969";
 $password = "!NYjd@fPPPG5TTy9";
 $dbname = "db68325_novo";
 
 try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO vlog (`datetime`, ip)
   VALUES ('$time', '$ip')";
   $conn->exec($sql);
 } catch(PDOException $e) {
   echo $sql . "<br>" . $e->getMessage();
 }
 
 $conn = null;
 }

?>