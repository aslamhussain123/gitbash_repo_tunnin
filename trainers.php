<?php
$title = "Trainers";
include 'header.php';
?>

<div class="wrapper" id="trainers">
    <!-- ==================header-banner==================== -->
    <section class="header-banner py-5 pt-3 pb-3 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 trainers-col-desc common-padding-col-banner text-left my-auto">
                    <h2 class="title-ExtraBold">Earning potential = unlimited <br class="not-break"/>Cost to earn = nothing
                    </h2>
                    <div class="inner-para mt-2 pt-2">
                        <p>More and more people are working out from home so<br/> why not join TUNNIN and grow your
                            business by offering <br/>live-streaming classes whenever it fits your schedule.<br/>
                            Best part - it costs you nothing to join and doesn’t take<br/> anything away from your
                        current business.</p>
                        <a href="#contactform" class="btn btn-default imready-btn btn-GetInTouch " value="">
                        I AM READY TO EARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= header-banner END ===================== -->

    <!-- ================= perks Start================= -->
    <section class="perks-sect mt-5 pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="second-heading text-center">HOW TO GET STARTED </h2>
                </div>
            </div>
            <div class="row mt-5 pt-3">
                <div class="col-md-6 perks-col text-center">
                    <div class="perksdesc">
                        <h3><span>1</span> sign-up</h3>
                        <p>
                            Fill in a few details about your business<br/> and get set up in less than 5 minutes.
                        </p>
                    </div>
                    <div class="perksimg">
                        <img src="assets/images/how-works/signup.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 perks-col text-center">
                    <div class="perksdesc">
                        <h3><span>2</span> Add your classes</h3>
                        <p>
                            Add classes to your calendar <br/>so people can start booking.
                        </p>
                    </div>
                    <div class="perksimg">
                        <img src="assets/images/addclasses.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 perks-col text-center">
                    <div class="perksdesc">
                        <h3><span>3</span> TUNNIN (GO-LIVE)</h3>
                        <p>
                            Put your gear on, turn on the camera,<br/> and start moving.
                        </p>
                    </div>
                    <div class="perksimg">
                        <img src="assets/images/how-works/tuning9.png" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-6 perks-col text-center">
                    <div class="perksdesc">
                        <h3><span>4</span> GET PAID!</h3>
                        <p>
                            As long as your bank account is connected, <br/>you can leave this part to us.
                        </p>
                    </div>
                    <div class="perksimg">
                        <img src="assets/images/get_paid99.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= perks END====================== -->
        
        <!-- ================= platform Start================= -->
        <section class="platform-sect mt-5 pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <h2 class="second-heading">one platform, unlimited potential </h2> -->
                    </div>
                </div>
            </div>
            <div class="youtube-link-col mt-3">
                <img src="assets/images/home/youtube-poster.png" class="img-fluid">
            </div>
        </section>
        <!-- ================= platform END================= -->
        <!-- ================= getstarted Start================= -->
        <section class="earnin-cal-sect mt-5 pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="second-heading">See how much you can earn from a single session</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5 pt-2 text-center earning-cal-img-col">
                        <img src="assets/images/earning-cal.png" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-5">

                    <div class="col-md-12 mt-5  earning-cal" id="widget">
                        <form >
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <p class="left-padding-text">Number of users booked</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <span class="f-span">10</span>
                                    <input type="range" id="loan-duration" value="10" min="10" max="1000" step="">
                                    <span class="f-span" id="selected-duration"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12 mt-3">
                                    <p class="left-padding-text">Price for Session</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <span class="f-span">$5</span>
                                    <input type="range" id="loan-amount" min="5" max="25" step="5" value="5">
                                    <span class="f-span" id="selected-amount"></span>
                                </div>
                            </div>

                            <ul class="mt-5 pt-2 text-center">
                                <li class="list-unstyled"><span class="showResult">$ <input type="text" id="totalAmounts" name="total"/></span> </li>
                                <li class="list-unstyled mt-3"><span class="service-fee">*Subject to service fees</span></li>
                            </ul>
                        </form>
                    </div><!-- #widget -->
                </div>
            </div>
        </section>
        <!-- ================= getstarted END================= -->

        <!-- ================= getstarted Start================= -->
        <section class="getstarted-sect mt-5 pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="second-heading">Motivated yet? Let's Get You started</h2>
                    </div>
                </div>
                <div class="row getstarted mt-3 my-auto">
                    <div class="col-md-12 text-center desc-col my-auto">
                        <p>
                            Tap into a world of virtual fitness and start earning.
                        </p>
                        <a href="#" class="btn get-app-btn same-wd-btn" value="">
                        Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= getstarted END================= -->
    </div>
    <!-- ====== wrapperEnd //====== -->
    <?php
    include 'footer.php';
    ?>
