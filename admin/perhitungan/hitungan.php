<?php 
include "../../koneksi.php";
include "rumus.php";

session_start();
 
?>


<!DOCTYPE html>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #dac292">
                <div class="sidebar-header" style="background-color: #dac292">
                    <a href="index-admin.php">
                    <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT SIRKULASI DARAH</center></h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="../tanaman/data-tanaman-admin.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Data Tanaman Obat
                        </a>
                        <a href="hitungan.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Perhitungan
                        </a>
                    </li>

                <ul class="list-unstyled CTAs">
                    <hr>
                    <center>
                        <h4><?php echo date('Y') ?></h4>
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
                    <h2>Halaman Hasil Perhitungan</h2>
                </div>
                </center>
                <div class="panel-body">
                    <h3><center>Analytical Hierarchy Process (AHP)</center></h3>
                    <center>    
                    <a href="ubah-hitung.php?hitung=<?php echo $totalan['id'] ?>" class="btn btn-warning"> 
                    <i class="glyphicon glyphicon-pencil"></i>
                    <span>Ubah Hitungan</span>
                    </a>
                    </center>
                            <hr>
                            <h3>Matriks</h3>
                            <hr>
                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Kriteria</td>
                                    <td>Jenis Tumbuhan</td>
                                    <td>Cara Pengolahan</td>
                                    <td>Cara Pemanfaatan</td>
                                    <td>Bagian Tumbuhan</td>
                                </thead>
                                <tbody>
                                        <tr>
                                            <?php 

                                            $ahp1 = array();
                                            $ahp2 = array();
                                            $ahp3 = array();
                                            $ahp4 = array();
                                             ?>
                                            <td>Jenis Tumbuhan</td>
                                            <td><?php 
                                                $ahp1[0]=1;
                                                echo $ahp1[0];
                                             ?></td>
                                            <td><?php 
                                                $ahp1[1]=5;
                                                echo $ahp1[1];
                                             ?></td>
                                            <td><?php 
                                                $ahp1[2]=3;
                                                echo $ahp1[2];
                                             ?></td>
                                            <td><?php 
                                                $ahp1[3]=2;
                                                echo $ahp1[3];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cara Pengolahan</td>
                                            <td><?php 
                                                $ahp2[0]=0.20;
                                                echo $ahp2[0];
                                             ?></td>
                                            <td><?php 
                                                $ahp2[1]=1;
                                                echo $ahp2[1];
                                             ?></td>
                                            <td><?php 
                                                $ahp2[2]=0.50;
                                                echo $ahp2[2];
                                             ?></td>
                                            <td><?php 
                                                $ahp2[3]=0.33;
                                                echo $ahp2[3];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cara Pemanfaatan</td>
                                            <td><?php 
                                                $ahp3[0]=0.33;
                                                echo $ahp3[0];
                                             ?></td>
                                            <td><?php 
                                                $ahp3[1]=2;
                                                echo $ahp3[1];
                                             ?></td>
                                            <td><?php 
                                                $ahp3[2]=1;
                                                echo $ahp3[2];
                                             ?></td>
                                            <td><?php 
                                                $ahp3[3]=0.25;
                                                echo $ahp3[3];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Bagian Tumbuhan</td>
                                            <td><?php 
                                                $ahp4[0]=0.5;
                                                echo $ahp4[0];
                                             ?></td>
                                            <td><?php 
                                                $ahp4[1]=3;
                                                echo $ahp4[1];
                                             ?></td>
                                            <td><?php 
                                                $ahp4[2]=4;
                                                echo $ahp4[2];
                                             ?></td>
                                            <td><?php 
                                                $ahp4[3]=1;
                                                echo $ahp4[3];
                                             ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td><?php 
                                            $tahp[0] = $ahp1[0]+$ahp2[0]+$ahp3[0]+$ahp4[0];
                                            echo $tahp[0]; ?></td>
                                            <td><?php 
                                            $tahp[1] = $ahp1[1]+$ahp2[1]+$ahp3[1]+$ahp4[1];
                                            echo $tahp[1]; ?></td>
                                            <td><?php 
                                            $tahp[2] = $ahp1[2]+$ahp2[2]+$ahp3[2]+$ahp4[2];
                                            echo $tahp[2]; ?></td>
                                            <td><?php 
                                            $tahp[3] = $ahp1[3]+$ahp2[3]+$ahp3[3]+$ahp4[3];
                                            echo $tahp[3]; ?></td>
                                        </tr>
                                    </tbody>
                            </table>
                            </table>
                                <h3>Matriks Normalisasi</h3>
                                    <table class="table table-hovered table-bordered">
                                        <thead>
                                            <td></td>
                                            <td>C1</td>
                                            <td>C2</td>
                                            <td>C3</td>
                                            <td>C4</td>
                                            <td>Jumlah Baris</td>
                                            <td>Prioritas Eigein</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                    <td>C1</td>
                                                    <td>
                                                        <?php $cm1[0]=$ahp1[0]/$tahp[0];
                                                        echo $cm1[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm1[1]=$ahp1[1]/$tahp[1];
                                                        echo $cm1[1]; ?></td>
                                                    <td><?php $cm1[2]=$ahp1[2]/$tahp[2];
                                                        echo $cm1[2]; ?></td>
                                                    <td><?php $cm1[3]=$ahp1[3]/$tahp[3];
                                                        echo $cm1[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[0]=array_sum($cm1);
                                                    echo $baris[0];
                                                     ?></td>
                                                    <td><?php $eigen[0]=$baris[0]/4;
                                                        echo $eigen[0]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                  

                                                <td>C2</td>
<td>    
                                                        <?php $cm2[0]=$ahp2[0]/$tahp[0];
                                                        echo $cm2[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm2[1]=$ahp2[1]/$tahp[1];
                                                        echo $cm2[1]; ?></td>
                                                    <td><?php $cm2[2]=$ahp2[2]/$tahp[2];
                                                        echo $cm2[2]; ?></td>
                                                    <td><?php $cm2[3]=$ahp2[3]/$tahp[3];
                                                        echo $cm2[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[1]=array_sum($cm2);
                                                    echo $baris[1];
                                                     ?></td>
                                                    <td><?php $eigen[1]=$baris[1]/4;
                                                        echo $eigen[1]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                    

                                                <td>C3</td>
                                                    <td>
                                                        <?php $cm3[0]=$ahp3[0]/$tahp[0];
                                                        echo $cm3[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm3[1]=$ahp3[1]/$tahp[1];
                                                        echo $cm3[1]; ?></td>
                                                    <td><?php $cm3[2]=$ahp3[2]/$tahp[2];
                                                        echo $cm3[2]; ?></td>
                                                    <td><?php $cm3[3]=$ahp3[3]/$tahp[3];
                                                        echo $cm3[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[2]=array_sum($cm3);
                                                    echo $baris[2];
                                                     ?></td>
                                                    <td><?php $eigen[2]=$baris[2]/4;
                                                        echo $eigen[2]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                    

                                                <td>C4</td>
                                                   <td>
                                                        <?php $cm4[0]=$ahp4[0]/$tahp[0];
                                                        echo $cm4[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm4[1]=$ahp4[1]/$tahp[1];
                                                        echo $cm4[1]; ?></td>
                                                    <td><?php $cm4[2]=$ahp4[2]/$tahp[2];
                                                        echo $cm4[2]; ?></td>
                                                    <td><?php $cm4[3]=$ahp4[3]/$tahp[3];
                                                        echo $cm4[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[3]=array_sum($cm4);
                                                    echo $baris[3];
                                                     ?></td>
                                                    <td><?php $eigen[3]=$baris[3]/4;
                                                        echo $eigen[3]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                    <td><?php 
                                                    $tm[0] = $cm1[0]+$cm2[0]+$cm3[0]+$cm4[0];
                                                    echo $tm[0]?></td>
                                                    <td><?php 
                                                    $tm[1] = $cm1[1]+$cm2[1]+$cm3[1]+$cm4[1];
                                                    echo $tm[1]?></td>
                                                    <td><?php 
                                                    $tm[2] = $cm1[2]+$cm2[2]+$cm3[2]+$cm4[2];
                                                    echo $tm[2]?></td>
                                                    <td><?php 
                                                    $tm[3] = $cm1[3]+$cm2[3]+$cm3[3]+$cm4[3];
                                                    echo $tm[3]?></td>
                                                    <td><?php 
                                                    $tm[4]=$baris[0]+$baris[1]+$baris[2]+$baris[3];
                                                    echo $tm[4];
                                                     ?></td>
                                                    <td><?php 
                                                    $tm[5]=$eigen[0]+$eigen[1]+$eigen[2]+$eigen[3];
                                                     echo $tm[5];?></td>
                                            </tr>



                                        </tbody>
                                    </table>

                                    <table class="table table-hovered table-bordered">
                                        <thead>
                                            <td>CI</td>
                                            <td>CR</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php 
                                                    $ci = (($tahp[0]*$eigen[0])+($tahp[1]*$eigen[1])+($tahp[2]*$eigen[2])+($tahp[3]*$eigen[3]));
                                                    echo $ci;
                                                     ?>
                                                </td>
                                                
                                                <td rowspan="2"><?php 
                                                $cr = (($ci-4)/3)/0.9;
                                                echo $cr;
                                                 ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo ($ci-4)/3; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            
                            <h3>Bobot Sub Kriteria</h3>
                            <hr>
                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Jenis Tumbuhan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pohon</td>
                                        <td><?php echo $sub[0]; ?></td>
                                        <td><?php  echo $sub[0]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Perdu</td>
                                        <td><?php echo $sub[1]; ?></td>
                                        <td><?php  echo $sub[1]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Liana</td>
                                        <td><?php echo $sub[2]; ?></td>
                                        <td><?php  echo $sub[2]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Rumput</td>
                                        <td><?php echo $sub[3]; ?></td>
                                        <td><?php  echo $sub[3]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Herba</td>
                                        <td><?php echo $sub[4]; ?></td>
                                        <td><?php  echo $sub[4]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Paku - Pakuan</td>
                                        <td><?php echo $sub[23]; ?></td>
                                        <td><?php  echo $sub[23]/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Cara Pengolahan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ditumbuk</td>
                                        <td><?php echo $sub[5]; ?></td>
                                        <td><?php  echo $sub[5]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Direbus</td>
                                        <td><?php echo $sub[6]; ?></td>
                                        <td><?php  echo $sub[6]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Langsung</td>
                                        <td><?php echo $sub[7]; ?></td>
                                        <td><?php  echo $sub[7]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Diparut</td>
                                        <td><?php echo $sub[8]; ?></td>
                                        <td><?php  echo $sub[8]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Diperas</td>
                                        <td><?php echo $sub[9]; ?></td>
                                        <td><?php  echo $sub[9]/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Cara Penggunaan</td>
                                        <td>Nilai</td>
                                        <td>Jumlah</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dimakan</td>
                                            <td><?php echo $sub[10]; ?></td>
                                            <td><?php  echo $sub[10]/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Diminum</td>
                                            <td><?php echo $sub[12]; ?></td>
                                            <td><?php  echo $sub[12]/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Saat Mandi</td>
                                            <td><?php echo $sub[14]; ?></td>
                                            <td><?php  echo $sub[14]/$total ?></td>
                                        </tr>
                                    </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Bagian yang Digunakan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Daun</td>
                                        <td><?php echo $sub[15]; ?></td>
                                        <td><?php echo $sub[15]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Akar</td>
                                        <td><?php echo $sub[16]; ?></td>
                                        <td><?php echo $sub[16]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Buah</td>
                                        <td><?php echo $sub[17]; ?></td>
                                        <td><?php echo $sub[17]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Rimpang</td>
                                        <td><?php echo $sub[18]; ?></td>
                                        <td><?php echo $sub[18]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Batang</td>
                                        <td><?php echo $sub[19]; ?></td>
                                        <td><?php echo $sub[19]/$total ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Bunga</td>
                                        <td><?php echo $sub[21]; ?></td>
                                        <td><?php echo $sub[21]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kulit Batang</td>
                                        <td><?php echo $sub[22]; ?></td>
                                        <td><?php echo $sub[22]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Herba</td>
                                        <td><?php echo $sub[24]; ?></td>
                                        <td><?php echo $sub[24]/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>
                    <div class="panel-heading">
                    </div>
                    <h3><center>Additive Ratio Assessment (ARAS)</center></h3>
                    <hr>
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#Diabetes">Diabetes</a></li>
                            <li><a data-toggle="tab" href="#Ginjal">Ginjal</a></li>
                            <li><a data-toggle="tab" href="#Malaria">Malaria</a></li>
                            <li><a data-toggle="tab" href="#Batuk">Batuk</a></li>
                            <li><a data-toggle="tab" href="#Demam">Demam</a></li>
                            <li><a data-toggle="tab" href="#Hipertensi">Hipertensi</a></li>
                            <li><a data-toggle="tab" href="#Flu">Flu</a></li>
                            <li><a data-toggle="tab" href="#DBD">Demam Berdarah</a></li>
                            <li><a data-toggle="tab" href="#Struk">Struk</a></li>
                            <li><a data-toggle="tab" href="#Kaki">Kaki Bengkak</a></li>
                            <li><a data-toggle="tab" href="#Hati">Bengkak Hati</a></li>
                            <li><a data-toggle="tab" href="#Hepatitis">Hepatitis</a></li>
                        </ul>
                        <br><br>
                        <div class="tab-content">
                            <div id="Diabetes" class="tab-pane">
                                <h3><center>Diabetes</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Diabetes'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Diabetes'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Diabetes'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Diabetes' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                           
                        

                        
                            <div id="Ginjal" class="tab-pane">
                                <h3><center>Ginjal</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ginjal'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ginjal'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ginjal'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ginjal' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>

                            </div>
                        

                        
                            <div id="Malaria" class="tab-pane">
                                <h3><center>Malaria</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Malaria'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Malaria'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Malaria'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Malaria' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Batuk" class="tab-pane">
                                <h3><center>Batuk</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Batuk'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Batuk'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Batuk'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Batuk' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Demam" class="tab-pane">
                                <h3><center>Demam</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Demam'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Demam'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Demam'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Demam' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Hipertensi" class="tab-pane">
                                <h3><center>Hipertensi</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hipertensi'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hipertensi'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hipertensi'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hipertensi' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Flu" class="tab-pane">
                                <h3><center>Flu</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Flu'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Flu'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Flu'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Flu' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="DBD" class="tab-pane">
                                <h3><center>Demam Berdarah</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'DBD'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'DBD'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'DBD'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'DBD' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Struk" class="tab-pane">
                                <h3><center>Struk</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Struk'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Struk'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Struk'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Struk' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Kaki" class="tab-pane">
                                <h3><center>Kaki Bengkak</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kaki Bengkak'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kaki Bengkak'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kaki Bengkak'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kaki Bengkak' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Hati" class="tab-pane">
                                <h3><center>Hati Bengkak</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bengkak Hati'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bengkak Hati'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bengkak Hati'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bengkak Hati' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div id="Hepatitis" class="tab-pane">
                                <h3><center>Hepatitis</center></h3>
                                <hr>
                                <h3>Pembentukan Decision Making Matrix</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hepatitis'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $k3[$no] = $sub[24]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $k4[$no] = $sub[23]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $ak1 =max($k1);
                                             echo $ak1; ?></td>
                                             <td><?php $ak2 =max($k2);
                                             echo $ak2; ?></td>
                                             <td><?php $ak3 =max($k3);
                                             echo $ak3; ?></td>
                                             <td><?php $ak4 =max($k4);
                                             echo $ak4; ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jumlah</td>
                                             <td><?php echo $no ?></td>
                                             <td><?php $jk1 = array_sum($k1)+max($k1);
                                             echo $jk1; ?></td>
                                             <td><?php $jk2 = array_sum($k2)+max($k2);
                                             echo $jk2; ?></td>
                                             <td><?php $jk3 = array_sum($k3)+max($k3);
                                             echo $jk3; ?></td>
                                             <td><?php $jk4 = array_sum($k4)+max($k4);
                                             echo $jk4; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <h3><center>Normalisasi</center></h3>
                                <hr>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $norm1 = array();
                                        $norm2 = array();
                                        $norm3 = array();
                                        $norm4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hepatitis'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                            <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $norm1[$no] = $k1[$no]/$jk1;
                                                echo $norm1[$no];
                                                }else{
                                                    $norm1[$no] = 0;
                                                    echo $norm1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                echo $norm2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $norm2[$no] = $k2[$no]/$jk2;
                                                     echo $norm2[$no];
                                                 }else{
                                                    $norm2[$no] = 0;
                                                echo $norm2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }else{
                                                     $norm3[$no] = $k3[$no]/$jk3;
                                                     echo $norm3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }else{
                                                $norm4[$no] = $k4[$no]/$jk4;
                                                     echo $norm4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $nak1 =$ak1/$jk1;
                                             echo $nak1; ?></td>
                                             <td><?php $nak2 =$ak2/$jk2;
                                             echo $nak2; ?></td>
                                             <td><?php $nak3 =$ak3/$jk3;
                                             echo $nak3; ?></td>
                                             <td><?php $nak4 =$ak4/$jk4;
                                             echo $nak4; ?></td>
                                         </tr>
                                         <tr>
                                            <td>Bobot</td>
                                            <td></td>
                                            <td><?php  echo $eigen[1];?></td>
                                            <td><?php  echo $eigen[2];?></td>
                                            <td><?php  echo $eigen[3];?></td>
                                            <td><?php  echo $eigen[0];?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Penentuan Bobot dan Menentukan Nilai dari Fungsi Optimalisasi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Alertnatif</td>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>S</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $opt1 = array();
                                        $opt2 = array();
                                        $opt3 = array();
                                        $opt4 = array();
                                        $sopt = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hepatitis'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo "A".($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diperas") {
                                                    
                                                    $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }else{
                                                   $opt1[$no] = $norm1[$no]* $eigen[1];
                                                echo $opt1[$no];
                                                }
                                                 ?>    
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                      $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }else{
                                                     $opt2[$no] = $norm2[$no]* $eigen[2];
                                                echo $opt2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Herba") {
                                                     
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }else{
                                                      $opt3[$no] = $norm3[$no]* $eigen[3];
                                                echo $opt3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                 $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                               $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Rumput") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                
                                                }elseif ($datas['jenis_tumbuhan'] == "Paku - Pakuan") {
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }else{
                                                $opt4[$no] = $norm4[$no]* $eigen[0];
                                                echo $opt4[$no];
                                                }?></td>
                                                <td>
                                                    <?php $sopt[$no] = $opt1[$no]+$opt2[$no]+$opt3[$no]+$opt4[$no];
                                                    echo $sopt[$no];
                                                    $kopt[$no] = $sopt[$no]/1 ?>
                                                </td>
                                         </tr>
                                         <?php 
                                         $ranking = "update tumbuhan_obat SET qi = '$kopt[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }
                                         $no++;
                                     endforeach;
                                          ?>
                                         <tr>
                                             <td><?php echo "A0"; ?></td>
                                             <td></td>
                                             <td><?php $oak1 =$nak1*$eigen[1];
                                             echo $oak1; ?></td>
                                             <td><?php $oak2 =$nak2*$eigen[2];
                                             echo $oak2; ?></td>
                                             <td><?php $oak3 =$nak3*$eigen[3];
                                             echo $oak3; ?></td>
                                             <td><?php $oak4 =$nak4*$eigen[0];
                                             echo $oak4; ?></td>
                                             <td>
                                                 <?php $sak = $oak1+$oak2+$oak3+$oak4;
                                                 echo $sak;
                                                 $kak = $sak/1; ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Jumlah</td>
                                             <td><?php 
                                             echo array_sum($sopt)+$sak; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h3><center>Menentukan Tingkatan Peringkat Tertinggi</center></h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td></td>
                                        <td>Nama Tumbuhan</td>
                                        <td>K</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "A0"; ?></td>
                                            <td></td>
                                            <td><?php echo $kak; ?></td>
                                         </tr>
                                        <?php

                                        $no = 0;
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Hepatitis' ORDER BY qi DESC";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                        <tr>
                                            <td><?php echo ($no+1); ?></td>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php echo $datas['qi']; ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                     endforeach;
                                         ?>
                                         <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        </div>

                        </div>

                </div>
        </div>

    </body>
</html>
