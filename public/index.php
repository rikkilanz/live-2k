<?php
require('../app/init.php');

?>

<!DOCTYPE html>
<html lang="en-CA">
<?php include('./partials/head.php'); ?>
<body>
    <div class="bg"></div>
    <?php include('./partials/header.php'); ?>
   <main>
    <section class="hero-navigation">
        <div class="hero-nav-list">
            <img src="<?php echo get_public_url('')?>images/live2k_Logo_final.png" alt="live 2k logo" class="hero-logo">
            <ul class="hero-nav">
                <li>
                    <a href="<?php echo get_public_url('/html/tickets.php')?>" title="To tickets page">
                        <div class="nav-link">
                            <img src="<?php echo get_public_url('')?>images/website-assets/folder-icon.png" alt="an logo image of a retro yellow folder" class="nav-folder">
                            <p>Tickets</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="nav-link" title="To experience page">
                            <img src="<?php echo get_public_url('')?>images/website-assets/folder-icon.png" alt="an logo image of a retro yellow folder" class="nav-folder">
                            <p>Experience</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_public_url('/html/artist-page/artist-page-day1.php')?>" title="To lineup page">
                        <div class="nav-link">
                            <img src="<?php echo get_public_url('')?>images/website-assets/folder-icon.png" alt="an logo image of a retro yellow folder" class="nav-folder">
                            <p>Lineup</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" title="To forum page">
                        <div class="nav-link">
                            <img src="<?php echo get_public_url('')?>images/website-assets/folder-icon.png" alt="an logo image of a retro yellow folder" class="nav-folder">
                            <p>The 411</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" title="Browse for more sections">
                        <div class="nav-link">
                            <img src="<?php echo get_public_url('')?>images/website-assets/folder-icon.png" alt="an logo image of a retro yellow folder" class="nav-folder">
                            <p>More</p>
                        </div>
                    </a>
                </li>
            </ul>
            <a href="#hero-lineup">
                <div class="scroll-button">
                    <div class="scroll-shape"></div>
                    <h2>Scroll Down!</h2>
                </div>
            </a>
        </div>
        <video autoplay muted loop class="bgVideo">
            <source src="<?php echo get_public_url('')?>images/live2k-bg-video.mp4" type="video/mp4">
        </video>
    </section>
    <section id="hero-lineup" class="hero-lineup">
        <h2>The Lineup</h2>
        <div class="window">
            <div class="window-header">
                <div class="window-title"></div>
                <div class="window-icons">
                    <div class="img"></div>
                    <img src="<?php echo get_public_url('')?>images/website-assets/win-icon1.png" alt="" class="win-icon">
                    <img src="<?php echo get_public_url('')?>images/website-assets/win-icon2.png" alt="" class="win-icon">
                    <img src="<?php echo get_public_url('')?>images/website-assets/win-icon3.png" alt="" class="win-icon">
                </div>
            </div>
            <!-- <div class="lineup-content">
                <p>Welcome to LIVE 2K, the celebration of the 2000’s aesthetic, fashion, design, and music. From August 20th-21st, prepare to enjoy a weekend-long music festival of your favourite Y2K hits sung by your favourite cover artists. LIVE 2K celebrates the 2000’s with style: aesthetic, fashion, design, and music.</p>
            </div> -->
            <img src="<?php echo get_public_url('/images/poster-final.png')?>" alt="">
        </div>
        <a class="btn scale-4" href="ticket/tickets.php">Get Tickets</a>
    </section>
    <section class="hero-sponsors">
        <h2>Our Sponsors</h2>
        <ul class="sponsor-logos">
            <li><img src="<?php echo get_public_url('')?>images/sponsor-logos/Coca-Cola-Logo.png" alt=""></li>
            <li><img src="<?php echo get_public_url('')?>images/sponsor-logos/Heineken-Logo.png" alt=""></li>
            <li><img src="<?php echo get_public_url('')?>images/sponsor-logos/Red-Bull-Logo.png" alt=""></li>
            <li><img src="<?php echo get_public_url('')?>images/sponsor-logos/Samsung-Logo.png" alt=""></li>
            <li><img src="<?php echo get_public_url('')?>images/sponsor-logos/Visa_Inc_logo.png" alt=""></li>
        </ul>
    </section>
    <section class="hero-playlists">
        <h2>Live Curated Playlist</h2>
        <div class="playlists">
            <div class="window">
                <div class="window-header">
                    <h3 class="window-title">Playlist #1</h3>
                    <div class="window-icons">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon1.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon2.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon3.png" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <img src="<?php echo get_public_url('')?>images/live2k_Logo_final.png" alt="live 2k logo" class="playlist-logo">
                    <iframe style="border-radius:0px" src="https://open.spotify.com/embed/playlist/4Kv5E8EVEmZB2vs83uLfeR?utm_source=generator&theme=0" width="70%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                </div>
            </div>
            <!-- <div class="playlist-info">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum, arcu ut sodales pharetra, nisi libero sagittis risus, vel mattis tellus turpis nec ante. Donec in tempor arcu. In hac habitasse platea dictumst. Vivamus hendrerit lacinia lectus, vitae faucibus nunc tempus at. Integer ornare placerat augue nec tempor. Phasellus tincidunt risus fringilla tempus cursus. Ut tristique tincidunt leo eget tincidunt. Donec sodales vitae felis vitae tempor. Nullam sagittis odio non ultricies interdum. Suspendisse potenti. Curabitur eu lorem massa.</p>
                <p>Morbi purus mauris, ultricies ac libero id, tincidunt sagittis diam. Cras dictum interdum nibh quis pellentesque. Nam augue diam, tempor sed dignissim eget, commodo vitae tortor. Fusce eleifend lobortis quam, ut efficitur nisi maximus ac. Suspendisse vehicula quam in eros fringilla eleifend. Aliquam erat volutpat. Nulla eget augue vitae nulla fermentum porta. Ut ac libero ullamcorper, sollicitudin leo sit amet, pharetra libero. Nullam eu lacinia quam. Praesent viverra accumsan metus, sed maximus enim cursus et. Sed quis est sem. Vivamus at quam mauris. Duis cursus tempor lorem, a porta urna sodales id. Integer eu maximus lorem.</p>
            </div> -->
            <div class="window">
                <div class="window-header">
                    <h3 class="window-title">Playlist #2</h3>
                    <div class="window-icons">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon1.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon2.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon3.png" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <img src="<?php echo get_public_url('')?>images/live2k_Logo_final.png" alt="live 2k logo" class="playlist-logo">
                    <iframe style="border-radius:0px" src="https://open.spotify.com/embed/playlist/6wxEYwkhdRUKeyXrjVV5x6?utm_source=generator" width="70%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="hero-newsletter">
        <div class="news window">
            <div class="window-header">
                <h3 class="window-title">Newsletter</h3>
                <div class="window-icons">
                    <div class="img"></div>
                    <img src="<?php echo get_public_url('')?>images/website-assets/win-icon1.png" alt="" class="win-icon">
                    <img src="<?php echo get_public_url('')?>images/website-assets/win-icon2.png" alt="" class="win-icon">
                    <img src="<?php echo get_public_url('')?>images/website-assets/win-icon3.png" alt="" class="win-icon">
                </div>
            </div>
            <div class="window-content">
                <div class="cta-copy">
                    <h4>Don't miss out</h4>
                    <p>Sign up to our newsletters to keep updated about LIVE 2K Festival!</p>
                </div>
                <div class="cta-input">
                    <input type="text" name="" placeholder="Email Address">
                    <div class="btn">Subscribe</div>
                </div>
            </div>
        </div>
    </section>
   </main>
   <?php include('./partials/footer.php'); ?>
</body>
</html>