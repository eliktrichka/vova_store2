<?php include 'header.php'?>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container-fluid">

        <div class="inner-sec-shop px-lg-4 px-3">
            <!---728x90--->

            <h3 class="tittle-w3layouts text-center my-lg-4 my-3">ADMIN PAGE</h3>
            <!---728x90--->

            <div class="row">
                <div class="col-lg-3 customer-main">
                    <div class="card">
                        <div class="card-body">
                            <div class="customer-img">
                                <img src="https://png2.kisspng.com/20180509/sxe/kisspng-avatar-youtube-8-ball-pool-user-5af328dc4a5fe1.9082586915258851483047.png" alt=" " class="img-fluid rounded">
                            </div>

                            <div class="customer-info text-left py-lg-4 py-2">
                                <h4>ADMIN NAME</h4>
                                <h6>ADMIN THIS SITE</h6>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-9 customer-main">
                    <div class="card">
                        <div class="card-body">
                            <form action="addproduct.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="mb-2">NAME PRODUCT </label>
                                        <input type="text" name="product_name" class="form-control" id="exampleproduct_name" aria-describedby="emailHelp" placeholder="" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">PRICE PRODUCT</label>
                                        <input type="text" name="product_price" class="form-control" id="exampleproduct_price" placeholder="" required="required">
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <label class="mb-2">IMAGE PRODUCT</label>-->
<!--                                        <input type="text" name="product_image" class="form-control" id="exampleproduct_image" placeholder="" required="required">-->
<!--                                    </div>-->
                                    <div class="form-group">
                                        <label class="mb-2">IMAGE PRODUCT</label>
                                        <input type="file" name="product_image" class="form-control" id="exampleproduct_image" placeholder="" required="required">
                                    </div>
                                    <button type="submit" class="btn btn-primary submit mb-4">ADD NEW PRODUCT</button>
                                    <br>
                            </form>

                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                    <form action="updateinformation.php" method="POST">
<!--                        <div class="form-group">-->
<!--                            <label class="mb-2"> NAME</label>-->
<!--                            <input type="text" name="name" class="form-control" id="exampleproduct_name" aria-describedby="emailHelp" placeholder="" required="required">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label class="mb-2">POSITION</label>-->
<!--                            <input type="text" name="position" class="form-control" id="exampleproduct_price" placeholder="" required="required">-->
<!--                        </div>-->
                        <div class="form-group">
                            <label class="mb-2">PASSWORD</label>
                            <input type="password" name="password" class="form-control" id="exampleproduct_price" placeholder="" required="required">
                        </div>

                        <!--                                    <div class="form-group">-->
                        <!--                                        <label class="mb-2">IMAGE PRODUCT</label>-->
                        <!--                                        <input type="file" name="product_image" class="form-control" id="exampleproduct_image" placeholder="" required="required">-->
                        <!--                                    </div>-->
                        <button type="submit" class="btn btn-primary submit mb-4">UPDATE INFORMATION</button>
                        <br>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
