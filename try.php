<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try</title>
</head>
<body>
    <h1>Test Area</h1>
    <?php 
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $line = $time . ' - ' . $ip;
    file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);

    ?>
</body>
</html> 