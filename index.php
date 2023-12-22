<?php
ani_set('display_errors', 'On');
error_reporting('E_ALL');

$to = 'apdufr888@gmail.com';
$sitename = $_SERVER['SERVER_NAME'];
$name = strip_tags($_POST['name']);
$phone = strip_tags($_POST['phone']);

if (isset($_POST['name']) && !empty($_POST['name']))
{
    //
    $subject = "[Hello "$sitename"]";
    $headers = "From: mail@"$sitename" \r\n";
    $headers = "MINE-Version: 1.0\r\n";
    $headers = "Content-Type: text/html; charset=utf-8 \r\n";
    //
    $msg = "<html><body style='font-family:Arial, sans-serif;'>";
    $msg = "<h2 style='font-weight:bold; border-bottom: 1px dotted #ccc;'>New form:</h2>\r\n";
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $msg = "<p><strong>Имя:</stromg> "$name"</p>\r\n";
    }
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $msg = "<p><strong>Телефон:</stromg> "$phone"</p>\r\n";
    }
    $msg = "</body></html>";
    //
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "false";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>