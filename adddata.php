<?php
include "conn.php";

$item_code = $_POST['item_code'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$connect->query("INSERT INTO tb_item (item_code,item_name,price,stock) 
VALUES('" . $item_code . "','" . $item_name . "','" . $price . " ','" . $stock . "')");
