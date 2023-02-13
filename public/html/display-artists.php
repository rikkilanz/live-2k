<?php 

require('../../app/init.php');

// $session->is_logged_in();

//Check who is the user logged in
// dd($session);

//SELECT artists.name AS artist_name, genres.name AS genre_name FROM artists JOIN genres ON artists.genre_id = genres.id;

if($session->is_logged_in()){
    // figure out the user
    $user_id = ($session->user_id);
    $requested_user = User::find_user_by_id($user_id);
    if($requested_user->num_rows == 1){
        // put readable format into a variable
        $user_data = $requested_user->fetch_assoc();

        // create new user and store in variable
        $user = new User($user_data);

        $preferred_artists = Artist::find_artist_by_genre($user->genre_id);
    }

}
else {
    dd('not logged in');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Table</title>
</head>
<body>
    <div>
        <h1><?php echo $user->name ?> | <span>@<?php echo $user->username ?></span></h1>
        <h3>Preferred Artists</h3>
        <?php 
            while($artist = $preferred_artists->fetch_assoc()){
                echo 
                
                '<img width="50" height="50" src=' . get_public_url('/images/artist-photos/'). $artist['image_url'] . '.png' . ' >' . 
                $artist['name'] . ' | Genre: ' . $artist['genre_id'] . ' | Stage: ' . $artist['stage'] . '<br/>';
            }
        ?>
        <hr>
    </div>
</body>
</html>