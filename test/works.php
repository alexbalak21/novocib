<?php

//CONNECT TO DB (PDO)

$time = date('Y-m-d H:i:s');
echo($time);
echo('<br>');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "log";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO visits (`datetime`, ip)
  VALUES ('$time', '88.123.82.31')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;











// $time = date('Y-m-d H:i:s');
// $ip = $_SERVER['REMOTE_ADDR'];
// $line = $time . ' - ' . $ip . "\n";
// $myfile = fopen("logs/visitors.log", "a");
// fwrite($myfile, $line);
// fclose($myfile);


?>