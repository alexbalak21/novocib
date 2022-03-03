<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" type=text/css rel=stylesheet>
    <title>Novocib - Adminin</title>
</head>
<body>
    <div class="visits">
    <h1>VISITS</h1>
    <table>
        <th>TIME</th>
        <th>IP</th>
        <th>LOCATION</th>
<?php
if($_POST['user'] == 'laradmin' && $_POST['passw'] == 'r9kTK#MPzq8&bM#s'){
    require_once '../model/read.php';
    $visists = readVisits();
    $visists = array_reverse($visists);
    foreach($visists as $visit){
        echo "<tr>";
        echo "<td>$visit[datetime]</td>";
        echo "<td class='ip'>$visit[ip]</td>";
        echo "<td id=location'></td>";
        echo "</tr>";
    }
}
else{   
    header('Location:admin.html');
}
?>
</table>
</div>
</body>
</html>