<?php
require('../../app/init.php');
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
            <div class ="profTxt">
                <h1>John Doe</h1>
                <h2>Current Pass: N/A</h2>
                <button>Edit Profile</button>
            </div>

        </section>
        <section class="actList">
            <h3>Your Music Acts</h3>
            <div class="window">
            <div class="window-header"></div>
            <div class="window-content">
                <h3>Genre Selected: RNB</h3>
                <div class="titleTags">
                    <h4 class="grow">Name</h4>
                    <h4>Genre</h4>
                    <h4>Location</h4>
                </div>
                <div class="acts" style="background-image:uri(<?php echo get_public_url('/images/artist-photos/fates-parents.png')?>)">
                    <div class="artPic">
                        <img src="<?php echo get_public_url('/images/artist-photos/fates-parents.png')?>" alt="fates's parents">
                    </div>
                    <h2 class="artName">Fate's Parent</h2>
                    <h4 class="gtag">RNB/POP</h4>
                    <h4 class="stage">Stage 1</h4>
                </div>
                <div class="acts" style="background-image:uri(<?php echo get_public_url('/images/artist-photos/fates-parents.png')?>)">
                    <div class="artPic">
                        <img src="<?php echo get_public_url('/images/artist-photos/fates-parents.png')?>" alt="fates's parents">
                    </div>
                    <h2 class="artName">Fate's Parent</h2>
                    <h4 class="gtag">RNB/POP</h4>
                    <h4 class="stage">Stage 1</h4>
                </div>
                <div class="acts" style="background-image:uri(<?php echo get_public_url('/images/artist-photos/fates-parents.png')?>)">
                    <div class="artPic">
                        <img src="<?php echo get_public_url('/images/artist-photos/fates-parents.png')?>" alt="fates's parents">
                    </div>
                    <h2 class="artName">Fate's Parent</h2>
                    <h4 class="gtag">RNB/POP</h4>
                    <h4 class="stage">Stage 1</h4>
                </div>
              
              
              
                <div class="changeGenre">
                    <h4>Want different acts?</h4>
                    <a href="#"><p>Change genre</p></a>
                </div>
            </div>
        </section>

    </main>
    <?php include('../partials/footer.php'); ?>
</body>

</html>