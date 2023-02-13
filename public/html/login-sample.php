<?php
require('../../app/init.php');

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    // store requested user in a variable
    $requested_user = User::find_user_by_email($_POST['email']);

    // if the request contains a data, run the code block
    if($requested_user->num_rows == 1){
        // put readable format into a variable
        $user_data = $requested_user->fetch_assoc();

        // create new user and store in variable
        $user = new User($user_data);

        if($user->validate_password($_POST['password'])){
            // login new session
            $session->login($user->id);
            redirect('/');
        };
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sample</title>
</head>
<body>
    <form action="<?php echo get_public_url('html/login-sample.php') ?>" method="POST">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>