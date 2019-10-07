<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 3/5/2019
 * Time: 7:48 AM
 */
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role'] == 1) {
        header("location: ../");
    }
}elseif (!isset($_SESSION['user'])){
    header("location: ../");
}
