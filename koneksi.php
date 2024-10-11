<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_kelas");

if (mysqli_connect_error()) {
	echo "koneksi gagal ";
	exit();
}
