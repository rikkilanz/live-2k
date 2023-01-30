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
    <section class="volunteer">
        <h2>Volunteer Signup</h2>
        <div class="window">
            <div class="window-header">
                <div class="window-title">Volunteer Signup</div>
                    <div class="window-icons">
                        <div class="img"></div>
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon1.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon2.png" alt="" class="win-icon">
                        <img src="<?php echo get_public_url('')?>images/website-assets/win-icon3.png" alt="" class="win-icon">
                    </div>
                </div>
                <div class="window-content vol-content">
                    <div class="fillable-section">
                        <h4>General Information</h4>
                        <div class="input-groups">
                            <p class="title">Name</p>
                            <input type="text" value="" placeholder="Name">
                        </div>
                        <div class="input-groups">
                            <p class="title">Birthdate</p>
                            <input type="text" value="" placeholder="Birthdate">
                        </div>
                        <div class="input-groups">
                            <p class="title">Phone Number</p>
                            <input type="text" value="" placeholder="Phone">
                        </div>
                        <div class="input-groups">
                            <p class="title">Email</p>
                            <input type="text" value="" placeholder="Email">
                        </div>
                        <div class="input-groups">
                            <p class="title">Address</p>
                            <input type="text" value="" placeholder="Address">
                        </div>
                        <div class="input-groups">
                            <p class="title">City</p>
                            <input type="text" value="" placeholder="City">
                        </div>
                        <div class="input-groups">
                            <p class="title">Province</p>
                            <input type="text" value="" placeholder="Province">
                        </div>
                        <div class="input-groups">
                            <p class="title">Country</p>
                            <input type="text" value="" placeholder="Country">
                        </div>
                        <div class="avail">
                            <h4>Availability</h4>
                            <div class="time-container">
                                <div class="time-group">
                                    <p class="time-text">Day 1: August 20, 2022</p>
                                    <div class="time-avail">
                                        <p>Morning 9am - 12pm</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                    <div class="time-avail">
                                        <p>Afternoon 12pm - 4pm</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                    <div class="time-avail">
                                        <p>Evening 4pm - 8pm</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                    <div class="time-avail">
                                        <p>Night 8pm - 12am</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="time-group">
                                    <p class="time-text">Day 2: August 21, 2022</p>
                                    <div class="time-avail">
                                        <p>Morning 9am - 12pm</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                    <div class="time-avail">
                                        <p>Afternoon 12pm - 4pm</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                    <div class="time-avail">
                                        <p>Evening 4pm - 8pm</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                    <div class="time-avail">
                                        <p>Night 8pm - 12am</p>
                                        <input class="checkbox" type="checkbox" value="" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Emergency Contact</h4>
                        <div class="input-groups">
                            <p class="title">Name</p>
                            <input type="text" value="" placeholder="Name">
                        </div>
                        <div class="input-groups">
                            <p class="title">Relationship</p>
                            <input type="text" value="" placeholder="Relationship">
                        </div>
                        <div class="input-groups">
                            <p class="title">Phone Number</p>
                            <input type="text" value="" placeholder="Phone Number">
                        </div>
                        <div class="input-groups">
                            <p class="title">Email</p>
                            <input type="text" value="" placeholder="Email">
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo get_public_url('/html/volunteer/volunteer-confirm.php')?>">
                        <div class="submit-btn">SUBMIT</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('../../partials/footer.php'); ?>
</body>
</html>