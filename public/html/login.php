<?php
require('../../app/init.php');

// if($session->is_logged_in()) {
//     redirect('/html/profile.php');
// }

$login_validate = true;

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    // store requested user in a variable
    $requested_user = User::find_user_by_email($_POST['email']);
    // if the request contains a data, run the code block
    if($requested_user->num_rows == 1){
        // put readable format into a variable
        $user_data = $requested_user->fetch_assoc();

        // create new user and store in variable
        $user = new User($user_data);
        if($user->validate_password($_POST['password'])){
            // login new session
            $session->login($user->id);
            redirect('/');
        }else {
            $login_validate = false;
        }
    }else {
        $login_validate = false;
    }
}
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
                    <form action="<?php echo get_public_url('html/login.php') ?>" method="POST">
                        <h3 class="txt-black">Login</h3>
                    <div class="cta-input">
                        <input type="text" name="email" placeholder="Email Address">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <?php 
                        if(!$login_validate){
                            echo '<p>Incorrect information!</p>';
                        }else {
                            echo '<p></p>';
                        }
                    ?>
                    <button type="submit" class="btn scale-4">Login</button>
                    <a href="<?php echo get_public_url('/html/signup.php')?>">
                        <div class="btn2">Sign Up</div>
                    </a>
                    <a class="guest-checkout" href="<?php echo get_public_url('/html/ticket/ticket-checkout.php')?>">Checkout as Guest</a>
                    </form>
                </div>
        </section>
    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>