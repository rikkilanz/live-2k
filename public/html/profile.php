<?php
require('../../app/init.php');

if($session->is_logged_in()){
    // figure out the user
    $user_id = ($session->user_id);
    $requested_user = User::find_user_by_id($user_id);
    if($requested_user->num_rows == 1){
        // put readable format into a variable
        $user_data = $requested_user->fetch_assoc();

        // create new user and store in variable
        $user = new User($user_data);

        $genre = User::set_preference($user->genre_id);
        $preferred_artists = Artist::find_artist_by_genre($user->genre_id);
    }

}
else {
    redirect('html/login.php');
}

//log out user
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $session->logout();
    redirect('/');
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include('../partials/head.php'); ?>
<body>
    <div class="bg"></div>
    <?php include('../partials/header.php'); ?>
    <main class="profileContainer">
        <section class="profInfo">
            <div class="profPic">
                <img src="<?php echo get_public_url('/images/UserIcon_live2k.png')?>"  alt="profile-picture">
            </div>
            <form class ="profTxt" action="<?php echo get_public_url('/html/profile.php')?>" method="POST">
                <h1><?php echo $user->name ?> | <span>@<?php echo $user->username ?></span></h1>
                <h2>Current Pass: N/A</h2>
                <a class="edit-preference" href="<?php echo get_public_url('/html/preferences.php')?>">Edit Profile</a>
                <button class="edit-preference logout" type="submit">Logout</button>
            </form>
        </section>
        <section class="actList">
            <h3>Your Music Acts</h3>
            <div class="window">
            <div class="window-header"></div>
            <div class="window-content">
                <h3>Genre Selected: <?php echo $genre['genre_name'] ?></h3>
                <div class="titleTags">
                    <h4 class="grow">Name</h4>
                    <h4>Genre</h4>
                    <h4>Location</h4>
                </div>
                <?php 
                    while($artist = $preferred_artists->fetch_assoc()){
                        echo 
                        '<div class="acts" style="background-image:url('. '\'' . get_public_url() . 'images/artist-photos/' . $artist['image_url'] . '.png\')">' .
                            '<div class="artPic">'.
                                '<img src=' . get_public_url('/images/artist-photos/'). $artist['image_url'] . '.png' . ' >' .
                            '</div>'.
                            '<h2 class="artName">' . $artist['name'] . '</h2>'.
                            '<h4 class="gtag">' . $genre['genre_name'] . '</h4>'.
                            '<h4 class="stage">' . $artist['stage'] . '</h4>'.
                        '</div>';
                    }
                ?>
              
              
              
                <div class="changeGenre">
                    <h4>Want different acts?</h4>
                    <a href="<?php echo get_public_url('/html/preferences.php')?>"><p>Change genre</p></a>
                </div>
            </div>
        </section>

    </main>
    <?php include('../partials/footer.php'); ?>
</body>

</html>