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
        <section class="prefSelect">
            <div class="subHeading">
                <h4>select your preferred music genre</h4>
            </div>
            <div class="genreBtn">
                    <button class="gBtn">Hip Hop</button>
                    <button class="gBtn">Rock</button>
                    <button class="gBtn">Pop</button>
                    <button class="gBtn">Dance</button>
                    <button class="gBtn">RNB</button>
            </div>
            <div class="genreSub">
                <button class="subBtn">Submit</button>
            </div>
        </section>

    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>