<?php
require('../../app/init.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = new User;
}
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
    <form action="" method="POST">
        <input type="text" name="fname" id="" value="First Name">
        <input type="text" name="lname" id="" value="Last Name">
        <input type="text" name="email" id="" value="Email">
        <input type="text" name="username" id="" value="Username">
        <input type="text" name="password" id="" value="Password">
        <button>Submit</button>
    </form>
</body>
</html>