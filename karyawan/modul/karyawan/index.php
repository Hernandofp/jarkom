<?php

include_once "sesi_mahasiswa.php";

$modul = (isset($_GET['s'])) ? $_GET['s'] : "awal";
switch ($modul) {
	case 'awal':
	default:
		include "modul/mahasiswa/title.php";
		break;
	case 'profil':
		include 'modul/mahasiswa/profil.php';
		break;
	case 'edit':
		include 'modul/mahasiswa/edit.php';
		break;
	case 'update':
		include 'modul/mahasiswa/update.php';
		break;
	case 'index':
		include 'awal.php';
}
