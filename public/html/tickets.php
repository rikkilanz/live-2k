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
        <section class="ticket-section">
            <h2>Tickets</h2>
            <ul class="ticket-options">
                <li class="ticket">
                    <div class="window">
                        <div class="window-header">
                            <h3 class="window-title is-small">ONE DAY PASS</h3>
                            <div class="window-icons">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon1.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon2.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon3.png')?>" alt="" class="win-icon">
                            </div>
                        </div>
                        <div class="window-content">
                            <h4 class="txt-black">TOTALLY BASIC</h4>
                            <h5>ONE DAY PASS</h5>
                            <p class="txt-dates">Available for either August 20th or 21st</p>
                            <p> - Grants you access to (1) day of the festival, date must be selected at point of check out</p>
                            <p class="txt-price">Deposit: $10</p>
                            <p class="txt-price">Full Price: $110</p>
                            <a href="<?php echo get_public_url('/html/ticket/tickets-click.php')?>" class="btn2">Add to Cart</a>
                        </div>
                    </div>
                </li>
                <li class="ticket">
                    <div class="window scale-4">
                        <div class="window-header">
                            <h3 class="window-title is-small">TWO DAY PASS</h3>
                            <div class="window-icons">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon1.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon2.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon3.png')?>" alt="" class="win-icon">
                            </div>
                        </div>
                        <div class="window-content">
                            <h4 class="txt-black">THAT'S HOT</h4>
                            <h5>TWO DAY PASS</h5>
                            <p class="txt-dates">August 20th & 21st</p>
                            <p> - Grants you access to both days of the festival</p>
                            <p class="txt-price">Deposit: $10</p>
                            <p class="txt-price">Full Price: $210</p>
                            <a href="login.php">
                                <a href="<?php echo get_public_url('/html/ticket/tickets-click.php')?>" class="btn">Add to Cart</a>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="ticket">
                    <div class="window">
                        <div class="window-header">
                            <h3 class="window-title is-small">VIP ONE DAY PASS</h3>
                            <div class="window-icons">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon1.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon2.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon3.png')?>" alt="" class="win-icon">
                            </div>
                        </div>
                        <div class="window-content">
                            <h4 class="txt-black">HELLA GOOD</h4>
                            <h5>VIP ONE DAY PASS (18+)</h5>
                            <p class="txt-dates">Available for either August 20th or 21st</p>
                            <p> - Grants you VIP access to (1) day of the festival, date must be selected at point of check out</p>
                            <p> - VIP access to gourmet food and beverage options</p>
                            <p> - Access to the VIP floor area</p>
                            <p> - Swag bag</p>
                            <p class="txt-price">Deposit: $50</p>
                            <p class="txt-price">Full Price: $225</p>
                            <a href="<?php echo get_public_url('/html/ticket/tickets-click.php')?>" class="btn2">Add to Cart</a>
                        </div>
                    </div>
                </li>
                <li class="ticket">
                    <div class="window">
                        <div class="window-header">
                            <h3 class="window-title is-small">VIP TWO DAY PASS</h3>
                            <div class="window-icons">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon1.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon2.png')?>" alt="" class="win-icon">
                                <img src="<?php echo get_public_url('/images/website-assets/win-icon3.png')?>" alt="" class="win-icon">
                            </div>
                        </div>
                        <div class="window-content">
                            <h4 class="txt-black">THE BOMB</h4>
                            <h5>VIP TWO DAY PASS (18+)</h5>
                            <p class="txt-dates">August 20th & 21st</p>
                            <p> - Grants you VIP access to both day of the festival</p>
                            <p> - Access to VIP gourmet food and beverage options</p>
                            <p> - Access to the VIP floor area</p>
                            <p> - Deluxe swag bag</p>
                            <p class="txt-price">Deposit: $10</p>
                            <p class="txt-price">Full Price: $110</p>
                            <a href="<?php echo get_public_url('/html/ticket/tickets-click.php')?>" class="btn2">Add to Cart</a>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <?php include('../partials/footer.php'); ?>
</body>
</html>