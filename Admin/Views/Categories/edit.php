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
                    <div class="content">
                        <form action="index.php" method="post">
                            <input type="hidden" name="action" value="edit_save">
                            <input type="hidden" name="controller" value="CategoryController">
                            <div class="form-group">
                                <label>ID (Auto)</label>
                                <input type="text" class="form-control" name="id" readonly
                                       value="<?= !is_object($category)?$category['id']: $category->Id ?>">
                            </div>
                            <div class="form-group">
                                <label>Name Category</label>
                                <input type="text" name="name_category" class="form-control" value="<?= !is_object($category)?$category['name_category']: $category->NameCategory ?>">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-warning" type="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
