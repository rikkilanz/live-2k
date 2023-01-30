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
    <section id="volunteer" class="volunteer vol-confirm">
        <div class="window">
            <div class="window-header">
                <div class="window-title">Signup Confirmed</div>
                    <div class="window-icons">
                        <div class="img"></div>
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon1.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon2.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon3.png" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <div class="confirm-banner">
                        <img src="<?php echo get_public_url('')?>images/volunteer-confirm-banner.jpg">
                        <h4>Volunteer Signup Confirmed</h4>
                    </div>
                    <div class="vol-confirm-copy">
                        <p>Thank you so much for signing up to volunteer with LIVE2K!</p>
                        <p>We have recieved your information. Please check your email for instructions and next steps.</p>
                        <p>If you have any questions, please email us at: <a href="#">contact@live2k.show</a></p>
                        <div class="vol-buttons">
                            <div>
                                <a href="<?php echo get_public_url('index.php')?>">
                                <div class="submit-btn">Back to Home</div>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo get_public_url('/html/artist-page/artist-page-day1.php')?>">
                                <div class="submit-btn">Lineups</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('../../partials/footer.php'); ?>
</body>
</html>