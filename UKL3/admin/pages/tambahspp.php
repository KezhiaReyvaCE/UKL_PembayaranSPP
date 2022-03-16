<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');

if (isset($_POST['tambahspp'])) {

    $id_spp = $_POST['id_spp'];
    $angkatan = $_POST['angkatan'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    
    

    $cek = mysqli_query($conn, "SELECT * FROM spp WHERE id_spp = '$id_spp'") or die(mysqli_error($conn));

    $query_run = mysqli_query($conn, "INSERT INTO spp (id_spp, angkatan, tahun, nominal) VALUES ('$id_spp', '$angkatan', '$tahun', '$nominal')");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_spp.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_spp.php');
    }
}
?>