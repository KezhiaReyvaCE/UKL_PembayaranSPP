<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');

if (isset($_POST['tambahkelas'])) {
    $id_kelas = $_POST['id_kelas'];
    $jurusan = $_POST['jurusan'];
    $nama_kelas = $_POST['nama_kelas'];
    $angkatan = $_POST['angkatan'];


    $query_run = mysqli_query($conn, "INSERT INTO kelas (id_kelas, nama_kelas, jurusan, angkatan) VALUES ('$id_kelas', '$nama_kelas', '$jurusan', '$angkatan')");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_kelas.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_kelas.php');
    }
}
?>