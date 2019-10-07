<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                if (isset($message)):
                    ?>
                    <div class="text-danger" role="alert">
                        <h5><?= $message ?></h5>
                    </div>
                <?php
                endif;
                ?>
                <h4>Thêm khách hàng</h4>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="add_save">
                    <input type="hidden" name="controller" value="UserController">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="content">
                                <div class="form-group">
                                    <label>ID (Auto)</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Passwprd</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="form-control pro-edt-select form-control-primary">
                                        <option value="0">Member</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-warning" type="submit" name="ok" value="Add">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>