<?php
require('../../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../../partials/head.php'); ?>
<body>
    <div class="bg"></div>
    <?php include('../../partials/header.php'); ?>
    <main>
        <section class="success-section">
            <div class="window">
                <div class="window-header">
                    <h3 class="window-title is-small">PAYMENT SUCCESS!</h3>
                    <div class="window-icons">
                        <img src="../images/website-assets/win-icon1.png" alt="" class="win-icon">
                            <img src="../images/website-assets/win-icon2.png" alt="" class="win-icon">
                            <img src="../images/website-assets/win-icon3.png" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <div class="success-head">
                        <img src="../images/website-assets/check.png" alt="" height="50px">
                        <h2>Purchase Completed</h2>
                    </div>
                    <h3 class="txt-black">See you at the fest!</h3>
                    <a>Order No: #1234567890</a>
                    <p>Thank you for purchasing tickets from us! A receipt for your purchase as well as your digital tickets will be emailed to you shortly.</p>
                    <div class="button-section"><a class="btn" href="<?php echo get_public_url('index.php')?>">Return Home</a></div>
                </div>
            </div>
        </section>
    </main>
    <?php include('../../partials/footer.php'); ?>
</body>
</html>