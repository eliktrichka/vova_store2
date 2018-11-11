<?php include 'header.php' ?>
<?php
session_start();
$db = mysqli_connect ("maining.mysql.tools","maining_vovastor","Nhbgktrcjujkbr",'maining_vovastor');
if(isset($_GET['page'])){
    $pages=array("products", "cart");
    if(in_array($_GET['page'], $pages)) {
        $_page=$_GET['page'];
    }else{
        $_page="products";
    }
}else{
    $_page="products";
}
?>
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Nuclear power plants
								<span> </span>
							</h3>
							<!--<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Order project</a>-->
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Big solar power system
								<span> </span>
							</h3>

						</div>
					</div>
					<div class="carousel-item item3">
						<div class="carousel-caption text-center">
							<h3>Geothermal power plants
								<span> </span>
							</h3>


						</div>
					</div>
					<div class="carousel-item item4">
						<div class="carousel-caption text-center">
							<h3>Hydroelectric power plant
								<span> </span>
							</h3>

						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
                <!---728x90--->
				<h3 class="tittle-w3layouts my-lg-4 my-4">Catalog of power plants</h3>
                <!---728x90--->
				<div class="row">
					<!-- /womens -->
                    <?php
                    $db = mysqli_connect ("maining.mysql.tools","maining_vovastor","Nhbgktrcjujkbr",'maining_vovastor');
                    $sql="SELECT * FROM `maining_vovastor`.`products`";
                    $query=mysqli_query($db,$sql) or die("error");
                    if($query){
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-md-3 product-men women_two" style="margin-bottom: 35px!important;">
                            <div class="product-googles-info googles">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="<?php echo $row['picture'] ?>" class="img-fluid" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="/single.php?c=products&id_product=<?php echo $row['id_product'] ?>" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="item-info-product">

                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <h4>
                                                        <a href="/single.php?c=products&id_product=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?></a>
                                                    </h4>
                                                    <div class="grid-price mt-2">
                                                        <span class="money "><?php echo $row['price'] ?> $</span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <?php //echo $row['picture']; die;?>
                                            <div class="googles single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="img" value="<?php echo $row['picture'] ?>">
                                                    <input type="hidden" name="googles_item" value="<?php echo $row['name'] ?>">
                                                    <input type="hidden" name="amount" value="<?php echo $row['price'] ?>">
                                                    <button type="submit" class="googles-cart pgoogles-cart">
                                                        <i class="fas fa-cart-plus"></i>
                                                    </button>

                                                    <?php //echo '<pre>';
//                                                    var_dump($_POST);
//                                                    echo '</pre>'; die;?>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    }else{
                        echo 'error';
                    }
                    ?>

                </div>
				<!-- //womens -->
				<!-- /mens -->


				<!--//row-->

                <!---728x90--->

				<!--/slide-->

				<!-- //testimonials -->
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!-- /clients-sec -->

			</div>
		</div>
	</section>
	<!-- about -->
	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2018  STORE. Developer Vladimir |
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

<script>
    $(document).ready(function () {
        $("#myModal").modal();
    });
</script>
<!-- // modal -->

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

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
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
<!-- Count-down -->
<script src="js/simplyCountdown.js"></script>
<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
<script>
    var d = new Date();
    simplyCountdown('simply-countdown-custom', {
        year: d.getFullYear(),
        month: d.getMonth() + 2,
        day: 25
    });
</script>
<!--// Count-down -->
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                900: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>

<!-- //end-smooth-scrolling -->


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
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
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
</body>
<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/07-08-2018/goggles-web_Free/1521872807/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 08:49:53 GMT -->
</html>