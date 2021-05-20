<!-- ================== move top  button ================== -->
<div class="container">
    <div class="row">
        <div class="col-md-12  text-center">
            <a id="buttontop"><i class="fas fa-angle-double-up"></i></a>
        </div>
    </div>
</div>
<!-- ================== move top button end ================ -->
<!-- ================empty space section =================== -->
<section class="footer-top-space"></section>
<!-- ================empty space section END =============== -->

<!-- =================footer-sect Start===================== -->
<footer class="footer-sect mt-5 pt-3 pb-3 bg-3">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 footer-log-col footer-cols">
                    <div class="footer-logo-img">
                        <img src="assets/images/tunnin-logo.png" class="img-fluid" alt="Tunnin logo">
                    </div>
                    <div class="get-in-touch-logo">
                        <p>Tunnin is your access to a world of virtual<br/>
                            fitness. With complete flexibility, choose<br/>
                            when and where you want to workout,<br/>
                        and pay for only the times that you do!</p>
                    </div>
                    <div class="footer-social-icons">
                        <h4>CONNECT WITH US!</h4>
                        <ul class="mt-4">
                            <li class="facebook">
                                <a href="#" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="youtube">
                                <a href="#" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 footer-links-col footer-cols">
                    <h4>EXPLORE</h4>
                    <div class="row mt-3 pt-3">
                        <div class="col-md-12 footer-ul-col">
                            <ul>
                                <li>
                                    <a href="how-it-works">How It Works</a>
                                </li>
                                <li>
                                    <a href="trainers">Trainers</a>
                                </li>
                                <li>
                                    <a href="#">Sign In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 footer-address-col footer-cols">
                    <h4>SUPPORT</h4>
                    <div class="row mt-3 pt-3">
                        <div class="col-md-12 footer-ul-col">
                            <ul>
                                <li>
                                    <a href="contact-us">Contact Us</a>
                                </li>
                                <li>
                                    <a href="term-of-use">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="privacy-policy">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 text-center footer-address-col footer-cols">
                    <h4>DOWNLOAD</h4>
                    <div class="row mt-3 pt-3">
                        <div class="col-md-12 app-col-foot">
                            <a href="#" ><img src="assets/images/app-store.png" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 copytright text-right">
                <p> © Copyright 2021 All Rights Reserved | <a href="home">Tunnin</a>, Inc.</p>
            </div>
        </div>
    </div>
</div>
<!-- =================footer-sect END================= -->
<!-- BS scripts -->
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- BS Slider-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="assets/js/slickSlider.min.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/slickslider.js" type="text/javascript"></script>
<!-- range slider -->
<script src="assets/js/jquery.loan-calculator.js"></script>
<script type="text/javascript">
    (function ($) {
        // Accepts arguments as strings
        $calculator = $('#widget').loanCalculator({
            loanAmount: '25',
            loanDuration: '1000',
            valueAddedTax: '16%',
            serviceFee: '5%',
            paymentFrequency: 'monthly'
        });
        // Can also take numbers as arguments...
        $calculator.loanCalculator('update', {
            loanAmount: 1000,
            loanDuration: 1000,
            valueAddedTax: 0.16,
            serviceFee: 0.05,
            paymentFrequency: 'monthly'
        });

        // Generate amortization schedule as json.
        var getAmortizationSchedule = function () {
            var scheduleData = $calculator.loanCalculator('schedule');
            return JSON.stringify(scheduleData, undefined, 2);
        };

        // Dump the schedule in the DOM
        var $schedule = $('#amortization').html(getAmortizationSchedule());

        // Event handler for the update method.
        $calculator.on('loan:update', function () {
            $schedule.html(getAmortizationSchedule());
        });

    })(jQuery);

</script>
<!-- ===Scroll top top footer start=============-->
<script>
    jQuery(document).ready(function() {

      var btn = $('#buttontop');

      $(window).scroll(function() {
        if ($(window).scrollTop() > 350) {
          btn.addClass('show');
      } else {
          btn.removeClass('show');
      }
  });

      btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '350');
    });

  });
</script>
<!-- regular slider -->
<script type="text/javascript">
    $(document).on('ready', function () {

        $('.regular').slick({
            rows: 2,
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            autoplay: false,
            responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                    arrows: false,
                     autoplay: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: false,
                    dots: true,
                    autoplay: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,
                    dots: true,
                     autoplay: false,
                }
            },
            {
                breakpoint: 330,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,
                    dots: true,
                     autoplay: false,
                }
            }
            ]
        });
    });
</script>

<!-- testimonial slider -->
<script type="text/javascript">
    $(document).on('ready', function () {

        $('.testimonal-sl').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 330,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });
    });
</script>

<!-- trying-next slider -->
<script type="text/javascript">
    $(document).on('ready', function () {

        $('.trying-next').slick({
            infinite: true,
            arrows: false,
            dots: false,
            speed: 300,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoPlay: true,
            responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 330,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            ]
        });
    });
</script>

<!-- ====== headder fixing script ========= -->
<script>
    
    $(window).bind('scroll', function()
    {
        if ($(window).scrollTop() > 40 ) {
            $('.header').addClass('fixed');
        }
        else{
            $('.header').removeClass('fixed');
        }
    });
</script>
</body>
</html>