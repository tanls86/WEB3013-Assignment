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
                    <div class="header"><h4>Đơn hàng chi tiết</h4></div>
                    <table class="table table-hover">
                        <thead>
                        <th>ID</th>
                        <th>Mã hoá đơn</th>
                        <th>Id sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($details as $detail):
                            ?>
                            <tr>
                                <td><?= $detail['id'] ?></td>
                                <td><?= $detail['order_id'] ?></td>
                                <td><?= $detail['product_id'] ?></td>
                                <td><?= number_format($detail['price']) ?> VND</td>
                                <td><?= $detail['amount'] ?></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
