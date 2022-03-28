<?php
session_start();

//membuat koneksi ke Database
$conn = mysqli_connect("localhost","root","","esp32");

//menambah barang baru manual
// if(isset($_POST['addnewbarang'])){
//     $kodebarcode = $_POST['kodebarcode'];
//     $kategori = $_POST['kategori'];
//     $perusahaan = $_POST['perusahaan'];
//     $jumlah = $_POST['jumlah'];

//     $addtotable = mysqli_query($conn, "INSERT INTO addnewbarang (`kodebarcode`, `kategori`, `perusahaan`, `jumlah`) VALUES(' ','$kodebarcode','$kategori','$perusahaan','$jumlah')");
//     if($addtotable){
//         header('location:index.php');
//     } else {
//         echo 'gagal';
//         header('location:index.php');
//     }
// }

//Menambah barang masuk

//menambah barang keluar

?>