<?php 
//per penyakit
$total = 0;
$total1 = "SELECT * FROM tumbuhan_obat";
foreach ($dbh -> query($total1) as $totalan) {
	$total++;

}


$sub = [];
$sub[0] = 0;
$sub[1] = 0;
$sub[2] = 0;
$sub[3] = 0;
$sub[4] = 0;
$sub[5] = 0;
$sub[6] = 0;
$sub[7] = 0;
$sub[8] = 0;
$sub[9] = 0;
$sub[10] = 0;
$sub[11] = 0;
$sub[12] = 0;
$sub[13] = 0;
$sub[14] = 0;
$sub[15] = 0;
$sub[16] = 0;
$sub[17] = 0;
$sub[18] = 0;
$sub[19] = 0;
$sub[20] = 0;
$sub[21] = 0;
$sub[22] = 0;
$sub[23] = 0;
$sub[24] = 0;
//ahp

$ahp1 = "SELECT * FROM tumbuhan_obat";
foreach($dbh->query($ahp1) as $data) :
	
	if($data['jenis_tumbuhan'] == "Pohon") {
		$sub[0]++;
	}elseif($data['jenis_tumbuhan'] == "Perdu"){
		$sub[1]++;
	}elseif ($data['jenis_tumbuhan'] == "Liana") {
		$sub[2]++;
	}elseif ($data['jenis_tumbuhan'] == "Rumput") {
		$sub[3]++;
	}elseif ($data['jenis_tumbuhan'] == "Herba") {
		$sub[4]++;
	}elseif ($data['jenis_tumbuhan'] == "Paku - Pakuan") {
		$sub[23]++;
	}

	if($data['cara_pengolahan'] == "Ditumbuk") {
		$sub[5]++;
	}elseif($data['cara_pengolahan'] == "Direbus") {
		$sub[6]++;
	}elseif($data['cara_pengolahan'] == "Langsung") {
		$sub[7]++;
	}elseif($data['cara_pengolahan'] == "Diparut") {
		$sub[8]++;
	}elseif($data['cara_pengolahan'] == "Diperas") {
		$sub[9]++;
	}

	if($data['cara_penggunaan']== "Dimakan") {
		$sub[10]++;
	
	}elseif($data['cara_penggunaan']== "Diminum") {
		$sub[12]++;
	
	}elseif($data['cara_penggunaan']== "Mandi") {
		$sub[14]++;
	}

	if($data['bagian_tumbuhan'] == "Daun") {
		$sub[15]++;
	}elseif($data['bagian_tumbuhan'] == "Akar") {
		$sub[16]++;
	}elseif($data['bagian_tumbuhan'] == "Buah") {
		$sub[17]++;
	}elseif($data['bagian_tumbuhan'] == "Rimpang") {
		$sub[18]++;
	}elseif($data['bagian_tumbuhan'] == "Batang") {
		$sub[19]++;
	}elseif($data['bagian_tumbuhan'] == "Getah") {
		$sub[20]++;
	}elseif($data['bagian_tumbuhan'] == "Bunga") {
		$sub[21]++;
	}elseif($data['bagian_tumbuhan'] == "Kulit Batang") {
		$sub[22]++;
	}elseif($data['bagian_tumbuhan'] == "Herba") {
		$sub[24]++;
	}

endforeach;

	$ahp1 = array();
    $ahp2 = array();
    $ahp3 = array();
    $ahp4 = array();
    $tahp = array();
                            
    //bobot default
    $total1 = "SELECT * FROM bobot where id=1";
    foreach ($dbh -> query($total1) as $totalan) :
                            
    $ahp1[0] = $totalan['a11'];
    $ahp1[1] = $totalan['a12'];
    $ahp1[2] = $totalan['a13'];
    $ahp1[3] = $totalan['a14'];

    $ahp2[0] = $totalan['a21'];
    $ahp2[1] = $totalan['a22'];
    $ahp2[2] = $totalan['a23'];
    $ahp2[3] = $totalan['a24'];

    $ahp3[0] = $totalan['a31'];
    $ahp3[1] = $totalan['a32'];
    $ahp3[2] = $totalan['a33'];
    $ahp3[3] = $totalan['a34'];

    $ahp4[0] = $totalan['a41'];
    $ahp4[1] = $totalan['a42'];
    $ahp4[2] = $totalan['a43'];
    $ahp4[3] = $totalan['a44'];

    $tahp[0] = $ahp1[0]+$ahp2[0]+$ahp3[0]+$ahp4[0];
    $tahp[1] = $ahp1[1]+$ahp2[1]+$ahp3[1]+$ahp4[1];
    $tahp[2] = $ahp1[2]+$ahp2[2]+$ahp3[2]+$ahp4[2];
    $tahp[3] = $ahp1[3]+$ahp2[3]+$ahp3[3]+$ahp4[3];



endforeach;



 ?>