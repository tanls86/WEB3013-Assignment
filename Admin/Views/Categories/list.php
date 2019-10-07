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
                    <div class="header"><h4>Categories</h4></div>
                    <table class="table table-hover">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($categories as $category):
                            ?>
                            <tr>
                                <td><?= $category['id'] ?></td>
                                <td><?= $category['name_category'] ?></td>
                                <td class="td-actions text-right">
                                    <a rel="tooltip" title="" class="btn btn-success btn-simple btn-xs"
                                       data-original-title="Edit"
                                       href="?controller=CategoryController&action=edit&id=<?= $category['id'] ?>"><i
                                                class="fa fa-edit"></i></a>

                                    <a rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs"
                                       data-original-title="Delete"
                                       href="?controller=CategoryController&action=delete&id=<?= $category['id'] ?>"><i
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
               href="?controller=CategoryController&action=add">Add New</a>
        </div>
    </div>
</div>
