<?php 
session_start();
if(! isset($_SESSION['login']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pilih paket</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 23px;
  left: 350px;
  border: 3px solid #f1f1f1;
  z-index: 9;

}

/* Add styles to the form container */
.form-container {
 padding: 30px;
  width: 674px;
  background-color: #F7F7F7;
  margin: 0 auto 10px;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
   height: 34px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
body {
  background: url('bg4.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    box-sizing: border-box;
}
.nav {
  overflow: hidden;
  background-color: white;
}
.nav a {
  float: left;
  color: black;
  text-align: center;
  padding: 20px 26px;
  text-decoration: none;
}
.login{
  background-color: #F9F871;
}
.nav a:hover {
  background-color: #F9F871;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
footer {
    background:black;
}

ul {
    display:grid;
    list-style-type:none;
    margin:0;padding:0;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(2, auto);
}
ul li {
    padding: 2em;
    color: white;
}
ul li span {
    display:grid;
    font-size:1.4em;
    margin-bottom:1em;
}

</style>
</head>
<body>
	
		<div class="nav">
			<a href="#">Home</a>
			<a href="#">About</a>
			<a href="#">Kontak</a>
			<nav style="float:right"><a class="login" href="logout.php">Logout</a>
			<nav style="float:right"><a class="login" href="logout.php"><?php echo $_SESSION['nama'];?></a>
		<!-- akhir bagian menu -->
		</div>
		<!-- Main Konten -->
				<center>
					<br><br>
        <table bgcolor="black" width="600px" style="box-shadow: 2px 2px 4px #000000; border-radius: 20%;color: white;">
          <tr>
            <td>
				<b><h1><center>Pilih Paket</center></h1></b></td></tr>
				</table>
        <center>

          <br><br>

        <table width="150px" style="box-shadow: 2px 2px 4px #000000; border-radius: 20%;">
          <tr>
            <td>
              <center><button onclick="openFormkecil()"><img src="kecil.png" style="width: 100px"></button></center>
            </td></tr></table></center>

           <!-- Paket Kecil -->
        <div class="form-popup" id="myFormkecil">
        <form action="inputdata.php" method = post class="form-container">
        <h1>Paket Kecil</h1>
        <table>
        <tr>
        <td><label for="permintaan"><b>Jenis Pelayanan</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Permintaan.." name="permintaan" id="permintaan"></td></tr>
        <tr>
        <td><label for="jumlah_tukang"><b>Jumlah Tukang</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Jumlah Tukang.." name="jumlah_tukang" id="jumlah_tukang"></td></tr>
        <tr>
        <td><label for="waktu_pengerjaan"><b>Waktu Pengerjaan</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Waktu Pengerjaan" name="waktu_pengerjaan" id="waktu_pengerjaan"></td>
        <td>/hari</td></tr>
        <tr>
        <td><label for="harga"><b>Harga</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Harga.." name="harga" id="harga"></td></tr>
        <tr>
        <td><label for="alamat"><b>Alamat</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Alamat.." name="alamat" id="alamat"></td></tr>
        <tr>
        <td><label for="pemilik_properti"><b>Pemilik Properti</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Nama.." name="pemilik_properti" id="pemilik_properti"></td></tr>
        <tr>
        <td><button type="submit" class="btn" name="simpan">Save</button></td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn cancel" onclick="closeFormkecil()">Cancel</button></td></tr></table>
  </form>
</div>

            <br><br>

        <table width="150px" style="box-shadow: 2px 2px 4px #000000; border-radius: 20%;color: white;"/>
          <tr>
            <td>
        <center><button onclick="openFormsedang()"><img src="sedang.png" style="width: 100px"/></button></center></td></tr>
        </table>

         <!-- Paket Sedang -->
   <div class="form-popup" id="myFormsedang">
        <form action="inputdata1.php" class="form-container">
        <h1>Paket Sedang</h1>

        <table>
        <tr>
        <td><label for="permintaan"><b>Jenis Pelayanan</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Penambahan Ruangan.." name="permintaan" id="permintaan"></td></tr>
        <tr>
        <td><label for="jumlah_tukang"><b>Jumlah Tukang</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Jumlah Tukang.." name="jumlah_tukang" id="jumlah_tukang"></td></tr>
        <tr>
        <td><label for="waktu_pengerjaan"><b>Waktu Pengerjaan</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Waktu Pengerjaan" name="waktu_pengerjaan" id="waktu_pengerjaan"></td>
        <td>/hari</td></tr>
        <tr>
        <td><label for="harga"><b>Harga</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Harga.." name="harga" id="harga"></td></tr>
        <tr>
        <td><label for="alamat"><b>Alamat</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Alamat.." name="alamat" id="alamat"></td></tr>
        <tr>
        <td><label for="pemilik_properti"><b>Pemilik Properti</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Nama.." name="pemilik_properti" id="pemilik_properti"></td></tr>
        <tr>
        <td><button type="submit" class="btn" name="simpan">Save</button></td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn cancel" onclick="closeFormsedang()">Close</button></td></tr></table>
  </form>
</div>

            <br><br>

        <table width="150px" style="box-shadow: 2px 2px 4px #000000; border-radius: 20%;">
          <tr>
            <td>
        <center><button onclick="openFormbesar()"><img src="besar.png" style="width: 100px"/></button></center></td></tr>
        </table>

          <!-- Paket Besar -->
    <div class="form-popup" id="myFormbesar">
        <form action="inputdata2.php" class="form-container">
        <h1>Paket Besar</h1>

        <table>
        <tr>
        <td><label for="permintaan"><b>Jenis Pelayanan</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Pembangun.." name="permintaan" id="permintaan"></td></tr>
        <tr>
        <td><label for="jumlah_tukang"><b>Jumlah Tukang</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Jumlah Tukang.." name="jumlah_tukang" id="jumlah_tukang"></td></tr>
        <tr>
        <td><label for="waktu_pengerjaan"><b>Waktu Pengerjaan</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Waktu Pengerjaan" name="waktu_pengerjaan" id="waktu_pengerjaan"></td>
        <td>/hari</td></tr>
        <tr>
        <td><label for="harga"><b>Harga</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Harga.." name="harga" id="harga"></td></tr>
        <tr>
        <td><label for="alamat"><b>Alamat</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Alamat.." name="alamat" id="alamat"></td></tr>
        <tr>
        <td><label for="pemilik_properti"><b>Pemilik Properti</b></label></td>
        <td>:</td>
        <td><input type="text" placeholder="Nama.." name="pemilik_properti" id="pemilik_properti"></td></tr>
        <tr>
        <td><button type="submit" class="btn" name="input">Save</button></td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn cancel" onclick="closeFormbesar()">Close</button></td></tr></table>
  </form>

</center>
</div>  
    <script>
function openFormkecil() {
  document.getElementById("myFormkecil").style.display = "block";
}

function closeFormkecil() {
  document.getElementById("myFormkecil").style.display = "none";
}

function openFormsedang() {
  document.getElementById("myFormsedang").style.display = "block";
}

function closeFormsedang() {
  document.getElementById("myFormsedang").style.display = "none";
}

function openFormbesar() {
  document.getElementById("myFormbesar").style.display = "block";
}

function closeFormbesar() {
  document.getElementById("myFormbesar").style.display = "none";
}

</script>

    <br>
		<footer>
		<ul>
                <li>
                  <span>
                    <table bgcolor="white" width="150px" style="box-shadow: 2px 2px 4px #000000; border-radius: 20%;">
                      <tr>
                        <td>
                          <center><img src="kecil.png" style="width: 100px"></td></tr></table></center></span>
                      Paket kecil<br>
                      Paket kecil memberikan layanan kepada pengguna untuk memperbaiki atau instalasi(memasang) suatu bagian bangunan seperti perbaikan AC atau instalasi TV.
                </li>
                <li>
                    <span>
                      <table bgcolor="white" width="150px" style="box-shadow: 2px 2px 4px #000000; border-radius: 20%;">
                      <tr>
                        <td>
                          <center><img src="sedang.png" style="width: 100px"></td></tr></table></center></span>
                    </span>
                    Paket Sedang<br>
                    Paket sedang memberikan layanan kepada pengguna untuk membangun atau memperbarui beberapa bagian bangunan.
                </li>
                <li>
                    <span>
                      <table bgcolor="white" width="150px" style="box-shadow: 2px 2px 4px #000000; border-radius: 20%;">
                      <tr>
                        <td>
                          <center><img src="besar.png" style="width: 100px"></td></tr></table></center></span>
                    </span>
                    Paket Besar<br>
                    Paket Besar memberikan layanan kepada pengguna untuk membangun atau merenovasi keseluruhan bangunan.
                </li>
               </ul>
           </footer>


</body>
</html>
