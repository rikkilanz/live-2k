<?php
require('../../app/init.php');

// Check session
$session->is_logged_in();

//current seesion user id stored in a variable
$user_id = ($session->user_id["id"]);
// Put selected genre to user preferred genre_id

// once submit is hit, we want to place selected value by user to genre id

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $genre_id = $_POST['checkbox'];
    $user = new User();
    $user->set_genre($genre_id[0], $user_id);
    redirect('/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Filter</title>
</head>
<body>
    <form action="<?php echo get_public_url('html/artist-filter.php') ?>" method="POST">
        <label for="genre1">POP</label>
        <input type="checkbox" name="checkbox[]" value="1" id="genre1">
        <label for="genre2">HIPHOP</label>
        <input type="checkbox" name="checkbox[]" value="2" id="genre2">
        <label for="genre3">ROCK</label>
        <input type="checkbox" name="checkbox[]" value="3" id="genre3">
        <label for="genre4">DANCE</label>
        <input type="checkbox" name="checkbox[]" value="4" id="genre4">
        <label for="genre5">RNB</label>
        <input type="checkbox" name="checkbox[]" value="5" id="genre5">
        <button type="submit">Submit</button>
    </form>
    <section>
        <!-- display user information here -->
    </section>
</body>
</html>