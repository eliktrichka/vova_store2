<?php include 'header.php';
$db = mysqli_connect ("maining.mysql.tools","maining_vovastor","Nhbgktrcjujkbr",'maining_vovastor');
$sql="SELECT * FROM `maining_vovastor`.`products`";
$query=mysqli_query($db,$sql) or die("error");
if($query)
{
    $row=mysqli_fetch_array($query);
}
session_start();

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
    (function () {
        if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
        }
    })();
</script>
<script>
    (function () {
        if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
        }
    })();
</script>
<script>
    (function () {
        if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
        }
    })();
</script>
<script>
    (function (v, d, o, ai) {
        ai = d.createElement("script");
        ai.defer = true;
        ai.async = true;
        ai.src = v.location.protocol + o;
        d.head.appendChild(ai);
    })(window, document, "//vdo.ai/core/w3layouts/vdo.ai.js");
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-125810435-1');
</script>
<!--// header_top -->
<!--checkout-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container">
        <!---728x90--->

        <div  class="inner-sec-shop px-lg-4 px-3">
            <h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout</h3>
                        <div class="checkout-right">
                            <h4>Your shopping cart contains:
                                <span>3 Products</span>
                            </h4>
                            <table class="timetable_sub">
                                <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th style="    width: 45%!important; ">Product</th>
                                    <th>Quantity</th>
                                    <th>Product Name</th>

                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i=1;$i<count($_POST)/6;$i++){?>
                                     <tr class="rem1">
                                    <td class="invert"><?php echo $i;?></td>
                                    <td class="invert-image">
                                        <a href="single.html">
                                            <img src="<?php echo ($_POST["img_".$i])?>" alt="" class="img-responsive">
                                            <span><?php// echo ($_POST["img_".$i])?></span>
                                        </a>
                                    </td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus">&nbsp;</div>
                                                <div class="entry value">
                                                    <span><?php echo($_POST["quantity_".$i])?></span>
                                                </div>
                                                <div class="entry value-plus active">&nbsp;</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert"><?php echo($_POST["googles_item_".$i])?> </td>

                                <td class="invert"><?php echo($_POST["amount_".$i]*$_POST["quantity_".$i])?></td>
                                <td class="invert">
                                    <div class="rem">
                                        <button type="button" class="sbmincart-remove" data-sbmincart-idx="0">×</button>
                                    </div>

                                </td>
                                </tr>
                                <?php }?>

                                </tbody>
                            </table>
                        </div>
                        <div class="checkout-left row">
                            <div class="col-md-4 checkout-left-basket">
                                <h4>Continue to basket</h4>
                                <ul>
                                    <?php for ($i=1;$i<count($_POST)/6;$i++){?>
                                    <li><?php echo($_POST["googles_item_".$i])?>
                                        <i>-</i>
                                        <span><?php echo($_POST["amount_".$i])?></span>
                                    </li>
<?php }?>
                                </ul>
                            </div>
                            <div class="col-md-8 address_form">
                                <h4>Add a new Details</h4>
                                <form action="send.php" method="POST" class="creditly-card-form agileinfo_form">
                                    <section class="creditly-wrapper wrapper">
                                        <div class="information-wrapper">
                                            <div class="first-row form-group">
                                                <div class="controls">
                                                    <label class="control-label">Full name: </label>
                                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                                </div>
                                                <div class="card_number_grids">
                                                    <div class="card_number_grid_left">
                                                        <div class="controls">
                                                            <label class="control-label">Mobile number:</label>
                                                            <input class="form-control" name="phone" type="text" placeholder="Mobile number">
                                                            <?php for ($i=1;$i<count($_POST)/6;$i++){?>
                                                            <input class="form-control" name="product[]" type="hidden" value="<?php echo $_POST['googles_item_'.$i] ?>">
                                                            <input class="form-control" name="quantity[]" type="hidden" value="<?php echo $_POST["quantity_".$i] ?>">

                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class="clear"> </div>
                                                </div>
                                            </div>
                                            <input type="submit" class="submit check_out">PAYMENT</input>
                                        </div>
                                    </section>
                                </form>
<!--                                <div class="checkout-right-basket">-->
<!--                                    <a href="payment.html">Make a Payment </a>-->
<!--                                </div>-->
                            </div>

                            <div class="clearfix"> </div>

                        </div>
<!--            <table border="1" width="100%" cellpadding="5">-->
<!--                <tr>-->
<!--                    <th>--><?php //echo($_POST["googles_item_1"])?><!--</th>-->
<!--                    <th>Ячейка 2</th>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Ячейка 3</td>-->
<!--                    <td>Ячейка 4</td>-->
<!--                </tr>-->
<!--            </table>-->
            <?php


            ////            $n=1;
            //            for ($n=1;$n<=count($_POST['googles_item_'.$n.'']);$n++){
            //                echo 'Название: '.$_POST['googles_item_'.$n.''];
            //            }
            ?>
        </div>
        <!---728x90--->

    </div>
</section>
<!--//checkout-->
<!---728x90--->

<!--footer -->
<footer class="py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top-w3layouts">
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>About Us</h3>
                </div>
                <div class="footer-text">
                    <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur
                        sed, convallis at
                        tellus. Nulla porttitor accumsana tincidunt.</p>
                    <ul class="footer-social text-left mt-lg-4 mt-3">

                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-linkedin-in"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fas fa-rss"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Get in touch</h3>
                </div>
                <div class="contact-info">
                    <h4>Location :</h4>
                    <p>0926k 4th block building, king Avenue, New York City.</p>
                    <div class="phone">
                        <h4>Contact :</h4>
                        <p>Phone : +121 098 8907 9987</p>
                        <p>Email :
                            <a href="mailto:info@example.com">ultimathule@i.ua</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Quick Links</h3>
                </div>
                <ul class="links">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="404.html">Error</a>
                    </li>
                    <li>
                        <a href="shop.html">Shop</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Sign up for your offers</h3>
                </div>
                <div class="footer-text">
                    <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                    <form action="#" method="post">
                        <input class="form-control" type="email" name="Email" placeholder="Enter your email..."
                               required="">
                        <button class="btn1">
                            <i class="far fa-envelope" aria-hidden="true"></i>
                        </button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-4">
            <p class="copy-right text-center ">© 2018 Goggles. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> W3layouts </a>
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->
<!--jQuery-->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- newsletter modal -->
<!--search jQuery-->
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie-search.js"></script>
<script src="js/demo1-search.js"></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    googles.render();

    googles.cart.on('googles_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<div id="staplesbmincart" class="test   ">
    <form method="post" class="" action="checkout.php" target="">
        <button type="button" class="sbmincart-closer">×</button>
        <ul>
            <li class="sbmincart-item">
                <div class="sbmincart-details-name"><a class="sbmincart-name"
                                                       href="https://p.w3layouts.com/demos_new/template_demo/07-08-2018/goggles-web_Free/1521872807/web/index.html">Kenneth
                        Cole</a>
                    <ul class="sbmincart-attributes"></ul>
                </div>
                <div class="sbmincart-details-quantity"><input class="sbmincart-quantity" data-sbmincart-idx="0"
                                                               name="quantity_1" type="text" pattern="[0-9]*" value="1"
                                                               autocomplete="off"></div>
                <div class="sbmincart-details-remove">
                    <button type="button" class="sbmincart-remove" data-sbmincart-idx="0">×</button>
                </div>
                <div class="sbmincart-details-price"><span class="sbmincart-price">$575.00</span></div>
                <input type="hidden" name="googles_item_1" value="Kenneth Cole"> <input type="hidden" name="amount_1"
                                                                                        value="575"> <input
                        type="hidden" name="shipping_1" value="undefined"> <input type="hidden" name="shipping2_1"
                                                                                  value="undefined"></li>
        </ul>
        <div class="sbmincart-footer">
            <div class="sbmincart-subtotal"> Subtotal: $575.00 USD</div>
            <button class="sbmincart-submit" type="submit" data-sbmincart-alt="undefined">Check Out</button>
        </div>
        <input type="hidden" name="cmd" value="_cart"> <input type="hidden" name="upload" value="1"> <input
                type="hidden" name="bn" value="sbmincart_AddToCart_WPS_US"></form>
</div>
<!-- //cart-js -->
<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!-- carousel -->
<!-- easy-responsive-tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<div id="_vdo_ads_player_ai_"></div>
<script id="_vdo_ads_deps_5654_" src="https://vdo.ai/core/dependencies_bs/vdo.min.js"></script>
<script id="_vdo_ads_sdk_5654_" src="https://imasdk.googleapis.com/js/sdkloader/ima3.js"></script>
<script id="_vdo_ads_frame_5654_" src="https://vdo.ai/core/w3layouts//adframe.js?k=44"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!--quantity-->
<script>
    $('.value-plus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
    });
</script>
<!--quantity-->
<!--close-->
<script>
    $(document).ready(function (c) {
        $('.close1').on('click', function (c) {
            $('.rem1').fadeOut('slow', function (c) {
                $('.rem1').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function (c) {
        $('.close2').on('click', function (c) {
            $('.rem2').fadeOut('slow', function (c) {
                $('.rem2').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function (c) {
        $('.close3').on('click', function (c) {
            $('.rem3').fadeOut('slow', function (c) {
                $('.rem3').remove();
            });
        });
    });
</script>
<!--//close-->

<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function () {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->


<script src="js/bootstrap.js"></script>
<!-- js file -->


<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span>To Top</a></body>