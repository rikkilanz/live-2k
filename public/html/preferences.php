<?php
require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../partials/head.php'); ?>
<body>
    <div class="bg"></div>
    <?php include('../partials/header.php'); ?>
    <main class="prefContainer">
        <section class="prefBanner">
            <div class="bannerMsg">
                <h2>HELP US DEFINE YOUR EXPERIENCE</h2>
                <h4>PERSONALIZE AND PLAN YOUR LIVE2K EXPERIENCE BY TELLING US YOUR FAVOURITE MUSIC GENRE.</h4>
            </div>
            <div class="genreBanner">
                <img src="<?php echo get_public_url('/images/genre-banner-img.png')?>"  alt="genre_banner">
            </div>
        </section>
        <section>
            <p>preferences</p>
        </section>

    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>