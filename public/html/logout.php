<?php

require('../../app/init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $session->logout();
    redirect('/');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1>header</h1>
    <form action="<?php echo get_public_url('html/logout.php')?>" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>