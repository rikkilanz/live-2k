<?php
require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../partials/head.php'); ?>
<body>
    <div class="bg"></div>
    <?php include('../partials/header.php'); ?>
    <main>
        <section class="artist-list">
            <div class="window">
                <div class="window-header">
                    <h3 class="window-title">Create Account</h3>
                    <div class="window-icons">
                        <img src="<?php echo get_public_url('/images/website-assets/win-icon1.png')?>" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('/images/website-assets/win-icon2.png')?>" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('/images/website-assets/win-icon3.png')?>" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <div>
                        <input type="text" name="" placeholder="Email Address">
                        <input type="text" name="" placeholder="Password">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>