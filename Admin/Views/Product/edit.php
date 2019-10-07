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
                <h4>Update Product</h4>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="edit_save">
                    <input type="hidden" name="controller" value="ProductController">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="content">
                                <div class="form-group">
                                    <label>ID (Auto)</label>
                                    <input name="id" type="text" class="form-control" value="<?= !is_object($product)?$product['id']: $product->Id ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>ID Category</label>
                                    <select name="category_id" class="form-control pro-edt-select form-control-primary">
                                        <option value="<?= !is_object($product)?$product['category_id']: $product->CategoryId ?>"><?= !is_object($product)?$product['category_id']: $product->CategoryId ?></option>
                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?=$category['id']?>"><?=$category['name_category']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="<?= !is_object($product)?$product['name']: $product->Name ?>">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" class="form-control" value="<?= !is_object($product)?$product['price']: $product->Price ?>">
                                </div>
                                <div class="form-group">
                                    <label>Sale</label>
                                    <input type="text" name="sale" class="form-control" value="<?= !is_object($product)?$product['sale']: $product->Sale ?>">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="file">
                                    <input type="hidden" name="image" value="<?= !is_object($product)?$product['image']: $product->Image ?>">
                                     ( <?= !is_object($product)?$product['image']: $product->Image ?> )
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" value="<?= !is_object($product)?$product['date']: $product->Date ?>">
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" name="amount" class="form-control" value="<?= !is_object($product)?$product['amount']: $product->Amount ?>">
                                    <input type="hidden" name="view" value="0" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="content">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="editor1" name="description" cols="6" rows="6"><?= !is_object($product)?$product['description']: $product->Description ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="content">
                                    <input type="submit" name="ok" value="Update" class="btn btn-warning">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>