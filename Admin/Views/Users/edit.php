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
                <h4>Cập nhập khách hàng</h4>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="edit_save">
                    <input type="hidden" name="controller" value="UserController">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="content">
                                <div class="form-group">
                                    <label>ID (Auto)</label>
                                    <input type="text" name="id" class="form-control" readonly value="<?= !is_object($user)?$user['id'] : $user->Id ?>">
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="username" class="form-control" value="<?= !is_object($user)?$user['username'] : $user->Username ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?= !is_object($user)?$user['email'] : $user->Email ?>">
                                </div>
                                <div class="form-group">
                                    <label>Passwprd</label>
                                    <input type="password" name="password" class="form-control" value="<?= !is_object($user)?$user['password'] : $user->Password ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" class="form-control" value="<?= !is_object($user)?$user['fullname'] : $user->Fullname ?>">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="file"><input type="hidden" name="image" value="<?= !is_object($user)?$user['image'] : $user->Image ?>"> ( <?= !is_object($user)?$user['image'] : $user->Image ?> )
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="form-control pro-edt-select form-control-primary">
                                        <option value="<?= !is_object($user)?$user['role'] : $user->Role ?>">
                                            <?php if(!is_object($user)?$user['role'] : $user->Role == 0) {
                                                echo 'Menber';
                                            } else {
                                                echo 'Admin';
                                            }
                                            ?>
                                        </option>
                                        <option value="0">Member</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-warning" type="submit" name="ok" value="Cập nhập">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>