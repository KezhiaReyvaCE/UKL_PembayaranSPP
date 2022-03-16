<?php
// include database connection file
$conn = mysqli_connect('localhost','root','','pembayaran_spp');
 
// Get id from URL to delete that user
$id_spp = $_GET['id_spp'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM spp WHERE id_spp=$id_spp");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:data_spp.php");
?>