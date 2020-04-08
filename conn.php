<?php
$connect = new mysqli("localhost", "root", "root", "tokoku");
if ($connect) {
    echo "Koneksi sukses";
} else {
    echo "Koneksi gagal";
    exit;
}
