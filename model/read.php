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
   $stmt = $conn->query("SELECT * FROM vlog");
   $visits = $stmt->fetchAll(PDO::FETCH_ASSOC);
 } catch(PDOException $e) {
   echo $sql . "<br>" . $e->getMessage();
 }
 $conn = null;
 return $visits;
 }


?>