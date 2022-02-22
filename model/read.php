<?php 

 function readVisits()
 {
 $servername = "db68325-novo.sql-pro.online.net";
 $username = "db122969";
 $password = "!NYjd@fPPPG5TTy9";
 $dbname = "db68325_novo";
 
 try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $conn->query("SELECT datetime FROM vlog");
   $datetimes = $stmt->fetch();
   var_dump ($datetimes);
   $stmt = $conn->query("SELECT ip FROM vlog");
   $ips = $stmt->fetch();
   var_dump($ips);
 } catch(PDOException $e) {
   echo $sql . "<br>" . $e->getMessage();
 }
 $conn = null;
 $results = array($datetimes, $ips);
 return $results;
 }


?>