<?php include "./Views/Common/header.php" ?>
<?php include "./Views/Common/menu.php" ?>
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(Assets/images/bg_default.jpg);">
    <h2 class="l-text2 t-center">
        <?= $cate['name_category'] ?>
    </h2>
    <p class="m-text13 t-center">
        Các mẫu giày mới nhất 2019
    </p>
</section>
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        Các loại giày
                    </h4>

                    <ul class="p-b-54"><?php foreach ($categories as $category): ?>

                            <li class="p-t-4">
                                <a href="?controller=ProductController&action=list_cate&category_id=<?= $category['id'] ?>"
                                   class="s-text13">
                                    <?= $category['name_category'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="search-product pos-relative bo4 of-hidden">
                        <form action="" method="get">
                            <input type="hidden" name="action" value="find">
                            <input type="hidden" name="controller" value="ProductController">
                            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="name"
                                   placeholder="Tìm sản phẩm...">

                            <button type="submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

                <!-- Product -->
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
                                            <input type="hidden" name="controller" value="CartController"/>
                                            <input type="hidden" name="action" value="add"/>
                                            <input type="hidden" name="product_id"
                                                   value="<?= $product['id'] ?>"/>
                                            <input type="hidden" name="quantity" value="1" size="2"/>

                                            <button type="submit"
                                                    class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
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

                <!-- Pagination -->
                <div class="pagination flex-m flex-w p-t-26">
                    <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                    <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./Views/Common/footer.php" ?>
