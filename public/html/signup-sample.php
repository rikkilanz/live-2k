<?php
require('../../app/init.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Divide the two name variables
    $fname = $_POST['fname'];
    $lname =  $_POST['lname'];
    // Concatenate in one
    $name = $fname . " " . $lname;
    //Store it in that constructor variable
    $_POST['name'] = $name;
    // then you push the variable to create a new user
    $user = new User($_POST);
    $user->create();
    redirect('html/artist-filter.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sample</title> 
</head>
<body>
    <form action="<?php echo get_public_url('html/signup-sample.php') ?>" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" name="fname" id="firstName">
        <label for="firstName">Last Name</label>
        <input type="text" name="lname" id="lastName">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>