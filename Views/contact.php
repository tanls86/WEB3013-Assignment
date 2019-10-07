<?php include "./Views/Common/header.php" ?>
<?php include "./Views/Common/menu.php" ?>
    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-b-30">
                    <div class="p-r-20 p-r-0-lg">
                        <div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781"
                             data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1">
                            <iframe class="contact-map size21"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.793123234352!2d108.16698401466346!3d16.07622164352108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6e0975b07%3A0xcaff29dfb73f0ac!2zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyBGUFQgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1551405879411"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <form action="." method="post" class="leave-comment">
                        <input type="hidden" name="action" value="send_mail">
                        <input type="hidden" name="controller" value="Controller">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            From liên hệ
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name"
                                   placeholder="Tên của bạn">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email"
                                   placeholder="Email của bạn">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="subject"
                                   placeholder="Tiêu đề">
                        </div>

                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message"
                                  placeholder="Message"></textarea>

                        <div class="w-size25"><?php if (isset($_SESSION['user'])): ?>
                                <!-- Button -->
                                <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Gửi
							</button><?php endif; ?><?php if (!isset($_SESSION['user'])): ?>
                                <p>Bạn cần đăng nhập</p>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include "./Views/Common/footer.php" ?>