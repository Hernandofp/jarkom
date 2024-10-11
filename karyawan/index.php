<?php
session_start();
include_once "sesi_mahasiswa.php";
$modul = (isset($_GET['m'])) ? $_GET['m'] : "awal";
$jawal = "Login mahasiswa || informasi mahasiswa";
switch ($modul) {
    case 'awal':
    default:
        $aktif = "Beranda";
        $judul = "Beranda $jawal";
        include "awal.php";
        break;
    case 'mahasiswa':
        $aktif = "mahasiswa";
        $judul = "Modul mahasiswa $jawal";
        include "modul/mahasiswa/index.php";
        break;
}
