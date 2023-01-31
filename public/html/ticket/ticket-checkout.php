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
        <section class="checkout-section">
            <div class="window">
                <div class="window-header">
                    <h3 class="window-title is-small">CART</h3>
                    <div class="window-icons">
                        <img src="<?php echo get_public_url('images/website-assets/win-icon1.png')?>" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('images/website-assets/win-icon2.png')?>" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('images/website-assets/win-icon3.png')?>" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content">
                    <div class="image-thumb"></div>
                    <h2>Your Cart</h2>
                    <div class="cart-information">
                        <table class="cart-table">
                            <tr>
                                <th>Ticket</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>THAT'S HOT - Two Day Pass</td>
                                <td>
                                <select name="Ticket Quantity" id="#ticket-quantity" value="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                </td>
                                <td>$210.00</td>
                                <td>$210.00</td>
                                <td><img src="<?php echo get_public_url('images/website-assets/trash.png')?>" alt="" height="20px" width="auto"></td>
                            </tr>
                        </table>
                        <table class="price-calculation">
                            <tr>
                                <td class="txt-white">Ticket</td>
                                <td class="txt-white">Quantity</td>
                                <td>Subtotal:</td>
                                <td>$210.00</td>
                            </tr>
                            <tr>
                                <td class="txt-white">THAT'S HOT - Two Day Pass</td>
                                <td>
                                </td>
                                <td>Shipping:</td>
                                <td>FREE</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <th>GST/PST (12%):</th>
                                <th>$25.20</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>TOTAL:</td>
                                <td>$235.20</td>
                                <td></td>
                            </tr>
                        </table>
                        <div class="payment-method">
                            <h3 class="txt-black">Payment Method</h3>
                            <div class="method">
                                <input id="afterpay" type="radio" value="afterpay">
                                <label for="afterpay">
                                    <img src="<?php echo get_public_url('images/payment-icons/afterpay.png')?>" alt="" height="15px">
                                </label>
                            </div>
                            <div class="method">
                                <input id="klarna" type="radio" value="klarna">
                                <label for="klarna">
                                    <img src="<?php echo get_public_url('images/payment-icons/klarna.png')?>" alt="" height="15px">
                                </label>
                            </div>
                            <div class="method">
                                <input id="card" type="radio" value="credit/debit">
                                <label for="afterpay">
                                    <img src="<?php echo get_public_url('images/payment-icons/card.png')?>" alt="" height="15px">
                                    Credit/Debit Card
                                </label>
                            </div>
                            <div class="method">
                                <input id="paypal" type="radio" value="paypal">
                                <label for="paypal">
                                    <img src="<?php echo get_public_url('images/payment-icons/paypal.png')?>" alt="" height="15px">
                                </label>
                            </div>
                        </div>
                        <div class="checkout-buttons">
                            <a class="continue-shopping" href="<?php echo get_public_url('/html/tickets.php')?>">Continue Shopping</a>
                            <a href="<?php echo get_public_url('/html/ticket/ticket-success.php')?>" class="btn">CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('../../partials/footer.php'); ?>
</body>
</html>