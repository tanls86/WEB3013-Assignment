<?php include "./Views/Common/header.php" ?>
<?php include "./Views/Common/menu.php" ?>
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(Assets/images/sl1.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22"
                        data-appear="fadeInUp">
                        Giày Raf Simons
                    </h2>

                    <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33"
                          data-appear="fadeInDown">
							Bộ sưu tập mới 2018
						</span>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url(Assets/images/sl2.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22"
                        data-appear="rollIn">
                        Giày Nike
                    </h2>

                    <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33"
                          data-appear="lightSpeedIn">
							Bộ sưu tập mới 2019
						</span>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url(Assets/images/sl3.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22"
                        data-appear="rotateInDownLeft">
                        Giày Jordan
                    </h2>

                    <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33"
                          data-appear="rotateInUpRight">
							Bộ sưu tập mới 2018
						</span>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Banner -->
<div class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="Assets/images/banner01.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?controller=ProductController&action=list_cate&category_id=9" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Giày tây
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="Assets/images/banner02.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?controller=ProductController&action=list_cate&category_id=10" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Giày thể thao
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="Assets/images/banner03.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?controller=ProductController&action=list_cate&category_id=11" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Giày lười
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our product -->
<section class="bgwhite p-t-45 p-b-58">
    <div class="container">
        <div class="sec-title p-b-22">
            <h3 class="m-text5 t-center">
                Sản phẩm
            </h3>
        </div>

        <!-- Tab01 -->
        <div class="tab01">

            <!-- Tab panes -->
            <div class="tab-content p-t-35">
                <div class="row"><?php foreach ($products as $product): ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="Admin/Assets/img/products/<?= $product['image'] ?>" alt="IMG-PRODUCT">

                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <form action="index.php" method="get">
                                            <input type="hidden" name="controller" value="CartController" />
                                            <input type="hidden" name="action" value="add" />
                                            <input type="hidden" name="product_id"
                                                   value="<?=$product['id']?>" />
                                            <input type="hidden" name="quantity" value="1" size="2" />

                                        <button type="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Thêm vào giỏ
												</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="?controller=ProductController&action=view&id=<?= $product['id'] ?>"
                                   class="block2-name dis-block s-text3 p-b-5">
                                    <?= $product['name'] ?>
                                </a>

                                <span class="block2-price m-text6 p-r-5">
											<?= number_format($product['price']) ?> VND
										</span>
                            </div>
                        </div>
                        </div><?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./Views/Common/footer.php" ?>
