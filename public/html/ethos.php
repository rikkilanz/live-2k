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
    <section id="ethos" class="ethos">
        <h2>Ethos</h2>
        <div class="window">
            <div class="window-header">
                <div class="window-title">Ethos</div>
                    <div class="window-icons">
                        <div class="img"></div>
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon1.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon2.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon3.png" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <div><img class="ethos-banner" src="<?php echo get_public_url('')?>images/ethos-banner.jpg"></div>
                    <div class="ethos-copy">
                        <p>Live 2k’s mission is to bring all the best early 2000’s cover bands under one roof for two epic days of the most fetch music that will bring you back to the turn of the millennium.</p>
                        <p>The festival was designed as a celebration of what made the 2000’s so hot, and we have a commitment to bring you the most (almost) authentic acts that dominated the charts of the early 2000’s.</p>
                        <p>Our mission is to bring the sight, sounds, and vibes of the new millennium. There are certain songs and artists that bring us right back to a point when life was simple. Flip phones, flip-flops, JNCO jeans, and the only notifications you got were from your Tamagotchi. We simply want to bring you on that journey of nostalgia.
                        </p>
                        <p>The 2000s wasn’t  just about girl power and manufactured boy bands,, we saw a variety of genres from hip hop to R&B dominating the charts and bringing in a wave of diversity to the fabric of current pop-culture.
                        </p>
                        <p>This isn't our festival, this is everyone's festival. Let the nostalgiafication begin!
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>