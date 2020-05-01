<?php
 require_once('koneksii.php');
 
 $permintaan = $_REQUEST['permintaan'];
 $jumlah_tukang = $_REQUEST['jumlah_tukang'];
 $waktu_pengerjaan = $_REQUEST['waktu_pengerjaan'];
 $harga = $_REQUEST['harga'];
 $alamat = $_REQUEST['alamat'];
 $pemilik_properti = $_REQUEST['pemilik_properti'];
 $jenis_paket = $_REQUEST['jenis_paket'];
 
 // insert comment
 $query = mysqli_query($db, "INSERT INTO paket ( permintaan, jumlah_tukang, waktu_pengerjaan, harga, alamat, pemilik_properti,jenis_paket) VALUES ('$permintaan','$jumlah_tukang','$waktu_pengerjaan','$harga','$alamat','$pemilik_properti','Besar')");
 
 if($query) {
     echo json_encode(array( 'response'=>'success' ));
 } else {
     echo json_encode(array( 'response'=>'failed' ));
 }
?>
