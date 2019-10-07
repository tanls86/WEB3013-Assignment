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
            <div class="card">
                <div class="header"><h4>Đơn hàng</h4></div>
                <table class="table table-hover">
                    <thead>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>SĐT</th>
                    <th>Địa chỉ</th>
                    <th>Trạng thái</th>
                    <th>Tổng tiền</th>
                    <th>Ngày</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($orders as $order):
                        ?>
                        <tr>
                            <td><?= $order['id'] ?></td>
                            <td><?= $order['name'] ?></td>
                            <td><?= $order['telephone'] ?></td>
                            <td><?= $order['address'] ?></td>
                            <td>
                                <?php if ($order['status'] == 0): ?>
                                    <input type="text" class="btn btn-info" disabled placeholder="Company"
                                           value="Đã thanh toán">
                                <?php endif; ?>
                                <?php if ($order['status'] == 1): ?>
                                    <a class="btn btn-danger" href="?controller=OrderController&action=update&id=<?= $order['id'] ?>">Chưa thanh toán</a>
                                <?php endif; ?>
                            </td>
                            <td><?= number_format($order['total']) ?> VND</td>
                            <td><?= $order['date'] ?></td>
                            <td class="td-actions text-right">
                                <a rel="tooltip" title=""
                                   class="btn btn-info btn-simple btn-sm"
                                   data-original-title="View"
                                   href="?controller=OrderController&action=view&id=<?= $order['id'] ?>"><i
                                            class="pe-7s-look"></i></a>
                                <a rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs"
                                   data-original-title="Delete"
                                   href="?controller=OrderController&action=delete&id=<?= $order['id'] ?>"><i
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
</div>
