<header class="g-header">
    <a href="<?php echo get_public_url('index.php')?>"><img src="<?php echo get_public_url('/images/live2k_Logo_final.png')?>" alt="live 2k logo" class="nav-logo"></a>
    <ul class="nav-bar">
        <li>
            <a href="<?php echo get_public_url('/html/tickets.php')?>" title="To tickets page">
                <p>Tickets</p>
            </a>
        </li>
        <li>
            <a href="#" title="To experience page">
                <p>Experience</p>
            </a>
        </li>
        <li>
            <a href="<?php echo get_public_url('/html/artist-page/artist-page-day1.php')?>" title="To experience page">
                <p>Lineup</p>
            </a>
        </li>
        <li>
            <a href="#" title="To forum page">
                <p>The 411</p>
            </a>
        </li>
        <li>
            <div class="dropdown">
                <a class="dropbtn" href="#">
                    <p>More</p>
                </a>
                <div class="dropdown-content">
                    <a href="<?php echo get_public_url('/html/ethos.php')?>">Ethos</a>
                    <a href="<?php echo get_public_url('/html/volunteer/volunteer-signup.php')?>">Volunteer</a>
                </div>
            </div>
        </li>
        <li class="prof">
            <?php 
                if($session->is_logged_in()){
                    echo 
                        '<div>'.
                            '<a href="' . get_public_url('/html/profile.php') . '">' .
                                '<img src="' .get_public_url('/images/UserIcon_live2k.png') .'" alt="profile-icon">
                            </a>
                        </div>';
                }else {
                    echo
                        '<a href="' . get_public_url('/html/login.php') . '"><p>Login/Sign Up</p></a>';
                }
            ?>
        </li>
    </ul>
</header>