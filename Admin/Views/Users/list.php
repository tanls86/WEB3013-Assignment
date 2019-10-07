
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
            <div class="col-md-8">
                <div class="card">
                    <div class="header"><h4>User</h4></div>
                    <table class="table table-hover">
                        <thead>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Passwors</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($users as $user):
                            ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['username'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['password'] ?></td>
                                <td class="td-actions text-right">
                                    <a rel="tooltip" title=""
                                       class="btn btn-info btn-simple btn-sm"
                                       data-original-title="View"
                                       href="?controller=UserController&action=view&id=<?= $user['id'] ?>"><i
                                                class="pe-7s-look"></i></a>

                                    <a rel="tooltip" title="" class="btn btn-success btn-simple btn-xs"
                                       data-original-title="Edit"
                                       href="?controller=UserController&action=edit&id=<?= $user['id'] ?>"><i
                                                class="fa fa-edit"></i></a>

                                    <a rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs"
                                       data-original-title="Delete"
                                       href="?controller=UserController&action=delete&id=<?= $user['id'] ?>"><i
                                                class="pe-7s-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <a class="btn btn-primary"
               href="?controller=UserController&action=add">Add User</a>
        </div>
    </div>
</div>
