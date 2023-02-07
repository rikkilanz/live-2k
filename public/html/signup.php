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
        <section class="signup-form">
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
                    <div class="container logoSpace">
                        <h4 >WELCOME TO</h4>
                        <img class="smlLogo" src="<?php echo get_public_url('/images/live2k_Logo_final.png')?>"  alt="Logo">
                        <h4>YOUR JOURNEY AWAITS...</h4>
                    </div>
                    <div class="container">
                        <form>
                            <div class="flex">    
                                <div class="flex row">
                                    <div class="flex">
                                        <label for="fname">First Name</label>
                                        <input type="text" id="fname" name="fname">
                                    </div>
                                    <div class="flex">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" name="lname">
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" name="email" id="email" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" name="psw" id="psw" required>

                                    <label for="psw-repeat"><b>Repeat Password</b></label>
                                    <input type="password" name="psw-repeat" id="psw-repeat" required>
                                </div>
                                <div class="flex">
                                    <div class="check">
                                        <input type="checkbox" class="cbox" id="terms" name="terms">
                                        <label for="terms">I would like to receive news and upcoming promotions for LIVE2K</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="cbox" id="terms" name="terms">
                                        <label for="terms">I have read and agree to the <a class="lineLink" href="#">Terms & Privacy</a>.</label>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button type="submit" class="btn3">Create Account</button>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <p>Already have an account? <a class="lineLink" href="#">Sign in</a>.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>