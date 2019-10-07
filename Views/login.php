
<?php include "./Views/Common/header.php" ?>
<?php include "./Views/Common/menu.php" ?>

<div class="col-md-4" style="margin: 0 auto">
    <form class="leave-comment" action="index.php" method="post">
        <input type="hidden" name="action" value="login_process">
        <input type="hidden" name="controller" value="UserController">
        <h4 style="text-align: center" class="m-text26 p-b-36 p-t-15">
            Đăng nhập
        </h4>

        <div class="bo4 of-hidden size15 m-b-20">
            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="username" placeholder="User Name">
        </div>

        <div class="bo4 of-hidden size15 m-b-20">
            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
        </div>
        <div class="m-b-20">
            <input class="p-l-22" type="checkbox" name="remember" value="remember" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Remember Password?
            </label>
        </div>
        <div class="w-size25">
            <!-- Button -->
            <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4 m-b-20">
								Login
							</button>
        </div>
    </form>
</div>
<?php include "./Views/Common/footer.php" ?>