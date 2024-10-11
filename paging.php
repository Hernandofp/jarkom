<head>
	 
</head>
<?php 
include 'koneksi.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiwa");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_mahasiswa = mysqli_query($koneksi, "SELECT * FROM tb_mahasiwa LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;

if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];

	$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE nama LIKE '%".$cari."%'");
}else{
	$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiwa");
}





while ($row=mysqli_fetch_array($data_mahasiswa)) {
	



 ?>

  <tr>
                                         
                                                <td><?php echo $row['id_mhs']; ?></td>
                                                <td><?php echo $row['nama_mhs']; ?></td>
                                                <td><?php echo $row['ttl_mhs']; ?></td>
                                                <td><?php echo $row['agama_mhs']; ?></td>
                                                <td><?php echo $row['alamat_mhs']; ?></td>
                                                <td><?php echo $row['no_tel_mhs']; ?></td>
                                                <td><?php echo $row['jabatan_mhs']; ?></td>
                                                    <td><img src="images/<?php echo $row['foto'];?>" ></td>



                                                <td><a href="karyawan_edit.php?id_mhs=<?php echo $row['id_mhs']; ?>"><button class="btn btn-primary">Ubah</button></a> <a href="hapus.php?id_mhs=<?php echo $row['id_mhs']; ?>"><button class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?');">Hapus</button></a></td>


                                                
                                            </tr>
                                        <?php } ?>

