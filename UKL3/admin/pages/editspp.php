<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');


if (isset($_POST['editspp'])) {
    
    $id_spp = $_POST['id_spp'];
    $angkatan = $_POST['angkatan'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    

    $query_run = mysqli_query($conn, "UPDATE spp SET angkatan='$angkatan', tahun ='$tahun' , nominal='$nominal' WHERE id_spp = '$id_spp'");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_spp.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_spp.php');
    }
}
?>