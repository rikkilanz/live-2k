<?php 

require('../../app/init.php');

$artists = Artist::find_artist_by_genre(2);

$artists2 = Artist::find_artist_by_stage(1);

// dd($artists);

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
        <h2>By genre</h2>
        <?php 
            while($artist = $artists->fetch_assoc()){
                echo $artist['name'] . ' | Genre: ' . $artist['genre_id'] . '<br/>' ;
            }
        ?>
        <hr>
        <h2>By stage</h2>
        <?php 
            while($artist = $artists2->fetch_assoc()){
                echo $artist['name'] . ' | Stage: ' . $artist['stage'] . '<br/>' ;
            }
        ?>
    </div>
</body>
</html>