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
<?php
if($_POST['user'] == 'laradmin' && $_POST['passw'] == 'r9kTK#MPzq8&bM#s'){
    require_once '../model/read.php';
    $visists = readVisits();
    foreach($visists[0] as $time){
            var_dump($time);
        echo "<br>";
    }

}
else{
    header('Location:admin.html');
}
?>
</body>
</html>