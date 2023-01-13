<?php
$f_name = isset( $_GET['firstname'])?$_GET['firstname'] : "";
$l_name = isset($_GET['lastname'])?$_GET['lastname'] : "";
$address = isset($_GET['address'])?$_GET['address']: "";
$email = isset($_GET['email'])?$_GET['email']: "";
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
    <h1>BIODATA</h1>
    <h3>Nama Lenkap: <?php echo $f_name,' ',$l_name?></h3>
    <h3>Alamat: <?php echo $address ?></h3>
    <h3>Email: <?php echo $email ?></h3>
</body>
</html>