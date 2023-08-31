<?php 
include "../../koneksi.php";
session_start();
$id = $_GET['pohon'];
$query=mysqli_query($dbh,"select * from tumbuhan_obat where id_tumbuhan='$id'");
$data=mysqli_fetch_array($query);

 
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT SIRKULASI DARAH</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../../asset/index.css">
    </head>
    <body>



        <div class="wrapper" >
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #dac292">
                <div class="sidebar-header" style="background-color: #dac292">
                    <a href="../index-admin.php">
                   <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</center></h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components" style="background-color: #dac292">
                    <li>
                        <a href="data-tanaman-admin.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Data Tanaman Obat
                        </a>
                        <a href="../perhitungan/hitungan.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Perhitungan
                        </a>
                    </li>

                <ul class="list-unstyled CTAs">
                    <hr>
                    <center>
                        <h4>  <?php echo date('Y') ?></h4>
                    </center>
                    <hr>  
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-warning navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <p></p><div class="dropdown"> <!-- warna dropdown menu diubah-->
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama']; ?>
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><?php $id = $_SESSION['id_amin'] ?>
                                        <a href="../edit-profil.php?siapa=<?php echo $id ?>">Ubah</a></li>
                                    
                                    <li><a href="../logout.php">Log out</a></li>
                                 </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Tambah Data Tanaman</h2>
                </div>
              </center>
                <!-- 
                - disini pake perulangan dari database, tapi databasenya harus diubah agar bisa manggil dari database
                = dan juga formnya akan nambahkan gambar yang diperlukan jika perlu
                - gambar diedit diluar biar ukurannya seragam
                -->
                  
                <div class="panel panel-body">
                 <form class="form" action="merawat.php?pohon=<?php echo $data['id_tumbuhan'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                       <label>Nama Tumbuhan</label>
                      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_tumbuhan'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="sel1">Jenis Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="jenis">
                         <option value="Pohon"<?php if($data['jenis_tumbuhan'] == 'Pohon') { ?> selected="selected"<?php } ?>>Pohon</option>
                         <option value="Liana"<?php if($data['jenis_tumbuhan'] == 'Liana') { ?> selected="selected"<?php } ?>>Liana</option>
                         <option value="Herba"<?php if($data['jenis_tumbuhan'] == 'Herba') { ?> selected="selected"<?php } ?>>Herba</option>
                         <option value="Perdu"<?php if($data['jenis_tumbuhan'] == 'Perdu') { ?> selected="selected"<?php } ?>>Perdu</option>
                         <option value="Rumput"<?php if($data['jenis_tumbuhan'] == 'Rumput') { ?> selected="selected"<?php } ?>>Rumput</option>
                         <option value="Paku - Pakuan"<?php if($data['jenis_tumbuhan'] == 'Paku - Pakuan') { ?> selected="selected"<?php } ?>>Paku - Pakuan</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label for="sel1">Bagian Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="bagian">
                         <option value="Daun"<?php if($data['bagian_tumbuhan'] == 'Daun') { ?> selected="selected"<?php } ?>>Daun</option>
                         <option value="Akar"<?php if($data['bagian_tumbuhan'] == 'Akar') { ?> selected="selected"<?php } ?>>Akar</option>
                         <option value="Buah"<?php if($data['bagian_tumbuhan'] == 'Buah') { ?> selected="selected"<?php } ?>>Buah</option>
                         <option value="Rimpang"<?php if($data['bagian_tumbuhan'] == 'Rimpang') { ?> selected="selected"<?php } ?>>Rimpang</option>
                         <option value="Batang"<?php if($data['bagian_tumbuhan'] == 'Batang') { ?> selected="selected"<?php } ?>>Batang</option>
                         <option value="Bunga"<?php if($data['bagian_tumbuhan'] == 'Bunga') { ?> selected="selected"<?php } ?>>Bunga</option>
                         <option value="Kulit Batang"<?php if($data['bagian_tumbuhan'] == 'Kulit Batang') { ?> selected="selected"<?php } ?>>Kulit Batang</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sel1">Cara Pengolahan:</label>
                      <select class="form-control" id="sel1" name="diolah">
                        <option value="Langsung"<?php if($data['cara_pengolahan'] == 'Langsung') { ?> selected="selected"<?php } ?>>Langsung</option>
                        <option value="Ditumbuk"<?php if($data['cara_pengolahan'] == 'Ditumbuk') { ?> selected="selected"<?php } ?>>Ditumbuk</option>
                        <option value="Diparut"<?php if($data['cara_pengolahan'] == 'Diparut') { ?> selected="selected"<?php } ?>>Diparut</option>
                        <option value="Diperas"<?php if($data['cara_pengolahan'] == 'Diperas') { ?> selected="selected"<?php } ?>>Diperas</option>
                        <option value="Direbus"<?php if($data['cara_pengolahan'] == 'Direbus') { ?> selected="selected"<?php } ?>>Direbus</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Cara Penggunaan:</label>
                      <select class="form-control" id="sel1" name="digunakan">
                        <option value="Diminum"<?php if($data['cara_penggunaan'] == 'Diminum') { ?> selected="selected"<?php } ?>>Diminum</option>
                        <option value="Dimakan"<?php if($data['cara_penggunaan'] == 'Dimakan') { ?> selected="selected"<?php } ?>>Dimakan</option>
                        <option value="Mandi"<?php if($data['cara_penggunaan'] == 'Mandi') { ?> selected="selected"<?php } ?>>Saat Mandi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Penyakit:</label>
                      <select class="form-control" id="sel1" name="khasiat">
                        
                        <option value="Diabetes"<?php if($data['khasiat'] == 'Diabetes') { ?> selected="selected"<?php } ?>>Diabetes</option>
                        <option value="Ginjal"<?php if($data['khasiat'] == 'Ginjal') { ?> selected="selected"<?php } ?>>Ginjal</option>
                        <option value="Malaria"<?php if($data['khasiat'] == 'Malaria') { ?> selected="selected"<?php } ?>>Malaria</option>

                        <option value="Batuk"<?php if($data['khasiat'] == 'Batuk') { ?> selected="selected"<?php } ?>>Batuk</option>

                        <option value="Demam"<?php if($data['khasiat'] == 'Demam') { ?> selected="selected"<?php } ?>>Demam</option>

                        <option value="Hipertensi"<?php if($data['khasiat'] == 'Hipertensi') { ?> selected="selected"<?php } ?>>Hipertensi</option>

                        <option value="Flu"<?php if($data['khasiat'] == 'Flu') { ?> selected="selected"<?php } ?>>Flu</option>

                        <option value="DBD"<?php if($data['khasiat'] == 'DBD') { ?> selected="selected"<?php } ?>>Demam Berdarah</option>

                        <option value="Struk"<?php if($data['khasiat'] == 'Struk') { ?> selected="selected"<?php } ?>>Struk</option>

                        <option value="Kaki Bengkak"<?php if($data['khasiat'] == 'Kaki Bengkak') { ?> selected="selected"<?php } ?>>Kaki Bengkak</option>

                        <option value="Bengkak Hati"<?php if($data['khasiat'] == 'Bengkak Hati') { ?> selected="selected"<?php } ?>>Bengkak Hati</option>
                        
                        <option value="Hepatitis"<?php if($data['khasiat'] == 'Hepatitis') { ?> selected="selected"<?php } ?>>Hepatitis</option>

                        

                        
                      </select>
                    </div>
                     <div class="form-group">
                      <label>Latin</label>
                      <input type="text" name="latin" cols="60" rows="10" class="form-control" value="<?php echo $data['latin']; ?>">   
                    </div>
                    <div class="form-group">
                      <label>Resep</label>
                      <textarea name="resep" cols="60" rows="10" class="form-control"> <?php echo $data['resep']; ?></textarea>  
                    </div>
                    <div class="form-group">
                      <label> gambar </label>
                      <input type="file" name="gambar" class="form-control" value="<?php echo $data['gambar']?>">
                    </div>
                    <div class="form-group">
              <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
              <input type="submit" required name="nanam" value = "Simpan" class="btn btn-success btn-fill" onclick="return confirm('Apa anda yakin dengan Penambahan data Tumbuhan?');">
        </div>
                  </form>
          
          
                  
                

                </div>



                
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
