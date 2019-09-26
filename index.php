<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>
<h1>Привет PHP</h1>

 <form action="/send.php" method="post">
     <label for="firstname">First name:</label>
     <input type="text" name="user" value="test">

     <br>
     Пароль: <input type="password" name="pass">
     <br>
     <button type = "submit">Отправить </button>
 </form>
<?php
$path = __DIR__ . '/data.txt';
$fh = fopen($path, 'w');
fwrite($fh, 'Hello world!!!');
fclose($fh);


?>

<form action="/upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="picture">
    <button type="submit">Отправить</button>

</form>

</body>
</html>