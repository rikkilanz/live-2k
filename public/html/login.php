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
        <section class="login-portal">
            <div class="window">
                <div class="window-header">
                    <h3 class="window-title is-small">Log-In</h3>
                    <div class="window-icons">
                        <img src="<?php echo get_public_url('/images/website-assets/win-icon1.png')?>" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('/images/website-assets/win-icon2.png')?>" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('/images/website-assets/win-icon3.png')?>" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <h3 class="txt-black">Login</h3>
                    <div class="cta-input">
                        <input type="text" name="" placeholder="Email Address">
                        <input type="text" name="" placeholder="Password">
                    </div>
                    <a href="<?php echo get_public_url('/html/ticket/ticket-checkout.php')?>">
                        <div class="btn scale-4">Login</div>
                    </a>
                    <a href="<?php echo get_public_url('/html/ticket/ticket-checkout.php')?>">
                        <div class="btn2">Sign Up</div>
                    </a>
                    <a class="guest-checkout" href="<?php echo get_public_url('/html/ticket/ticket-checkout.php')?>">Checkout as Guest</a>
                </div>
        </section>
    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>