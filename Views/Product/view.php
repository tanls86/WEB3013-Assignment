<?php include "./Views/Common/header.php" ?>
<?php include "./Views/Common/menu.php" ?>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="slick3 slick-initialized slick-slider slick-dotted">
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 1503px;">
                            <div class="item-slick3 slick-slide slick-current slick-active"
                                 data-thumb="images/thumb-item-01.jpg" data-slick-index="0" aria-hidden="false"
                                 tabindex="0" role="tabpanel" id="slick-slide10"
                                 aria-describedby="slick-slide-control10"
                                 style="width: 501px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                <div class="wrap-pic-w">
                                    <img src="Admin/Assets/img/products/<?=$product['image']?>" alt="IMG-PRODUCT">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?=$product['name']?>
            </h4>

            <span class="m-text17">
					<?=number_format($product['price'])?> VND
				</span>

            <p class="s-text8 p-t-10">
<!--                Giày đẹp-->
            </p>

            <!--  -->
            <div class="p-t-33 p-b-60">
                <form action="index.php" method="get">
                    <input type="hidden" name="controller" value="CartController" />
                    <input type="hidden" name="action" value="add" />
                    <input type="hidden" name="product_id"
                           value="<?=$product['id']?>" />
                <div class="flex-r-m flex-w p-t-10">
                    <div class="w-size16 flex-m flex-w">

                        <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                            </button>

                            <input class="size8 m-text18 t-center num-product" type="number" name="quantity"
                                   value="1">

                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                            </button>

                        </div>

                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                            <!-- Button -->
                            <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="p-b-45">
                <span class="s-text8">Số lượng: <?=$product['amount']?></span>
            </div>
            <div class="p-b-45">
                <span class="s-text8">Loại hàng: <?=$category['name_category']?></span>
            </div>

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Mô tả sản phẩm
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        <?=$product['description']?>
                    </p>
                </div>
            </div>

            <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Nhật xét
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed
                        velit. Proin gravida arcu nisl, a dignissim mauris placerat
                    </p>
                </div>
            </div>

            <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Reviews (0)
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed
                        velit. Proin gravida arcu nisl, a dignissim mauris placerat
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./Views/Common/footer.php"?>