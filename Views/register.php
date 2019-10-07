<?php include "./Views/Common/header.php" ?>
<?php include "./Views/Common/menu.php" ?>
    <div class="col-md-6" style="margin: 0 auto">
        <form class="form-horizontal" role="form" method="POST" action="index.php">
            <input type="hidden" name="action" value="register_save">
            <input type="hidden" name="controller" value="UserController">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Đăng ký thành viên</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">User Name</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="bo4 input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="username" class="form-control"
                                   placeholder="Username" required autofocus>
                        </div>
                    </div><?php if(isset($error_user)): ?>
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> <?=$error_user?></i>
                        </span>
                    </div><?php endif; ?>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Full Name</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="bo4 input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="fullname" class="form-control"
                                   placeholder="Full Name" required autofocus>
                        </div>
                    </div><?php if(isset($error_name)): ?>
                        <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> <?=$error_name?></i>
                        </span>
                        </div><?php endif; ?>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">E-Mail Address</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="bo4 input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="you@gmail.com" required autofocus>
                        </div>
                    </div><?php if(isset($error_email)): ?>
                        <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> <?=$error_email?></i>
                        </span>
                        </div><?php endif; ?>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="password">Password</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="bo4 input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" required>
                        </div>
                    </div><?php if(isset($error_pass)): ?>
                        <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> <?=$error_pass?></i>
                        </span>
                        </div><?php endif; ?>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
<!--                            <i class="fa fa-close"> Example Error Message</i>-->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="password">Confirm Password</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="bo4 input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-repeat"></i>
                            </div>
                            <input type="password" name="password_1" class="form-control"
                                   id="password-confirm" placeholder="Password" required>
                        </div>
                    </div><?php if(isset($error_pass_1)): ?>
                        <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> <?=$error_pass_1?></i>
                        </span>
                        </div><?php endif; ?>
                </div>
            </div>
            <input type="hidden" name="image" value="user.jpg">
            <input type="hidden" name="role" value="1">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="w-size25">
                    <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4 m-b-20"><i class="fa fa-user-plus"></i> Register</button>
                </div>
            </div>
        </form>
    </div>
<?php include "./Views/Common/footer.php" ?>