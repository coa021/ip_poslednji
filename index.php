<?php
$msg = isset($msg) ? $msg : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controllerKarte.php" method="POST">
     Id: <br>
     <input type="text" name="id"> <br>   
       
     <input type="submit" name="action" value="prosledi">
</form>
</body>
</html>
<?php
echo $msg;
?>