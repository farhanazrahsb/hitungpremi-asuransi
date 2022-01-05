<?php

require('fpdf181/fpdf.php');

require "../../koneksi/koneksi.php";

$pdf= new FPDF('p','mm','A4');
$pdf->AddPage();

$pdf->Image('images/back1.png',-15,120,200);


//header
$id_order = $_GET['id_order'];
$query = mysql_query ("SELECT * FROM polis_keb WHERE id_order='$id_order'");
$no=1;
while ($var=mysql_fetch_array($query)) {
	$premi= $var['harga_pertanggungan'] * $var['id_rate'] / 1000;
	$total = $premi + $var['biaya_polis'] + $var['biaya_materai'];

	$okupasi=mysql_fetch_array(mysql_query("SELECT keterangan FROM okupasi WHERE id_okupasi='$var[id_okupasi]'"));
    $kelas=mysql_fetch_array(mysql_query("SELECT kelas FROM kelas_konstruksi WHERE id_kelas='$var[id_kelas]'"));
    $tanggal = date('d-M-Y');

$pdf->Image('images/back.png',10,10,20);
$pdf->Image('images/garis.png',3,7,205);
$pdf->SetFont('Arial','B','14');
$pdf->Cell(20,5,'',0,0);
$pdf->Cell(110,5,'PT Asuransi Jasindo',0,1);
$pdf->SetFont('Arial','','11');
$pdf->Cell(20,5,'',0,0);
$pdf->Cell(110,5,'Jl. Jend. Sudirman, No.196 B',0,0);
$pdf->Cell(59,5,'',0,1);
$pdf->Cell(20,5,'',0,0);
$pdf->Cell(90,5,'Purwokerto, Jawa Tengah 53116',0,0);
$pdf->Cell(20,5,'',0,0);
$pdf->Cell(34,5,'',0,1);


$pdf->Cell(20,5,'',0,0);
$pdf->Cell(110,5,'Telepon : (0281) 628587',0,0);
$pdf->Cell(25,5,'',0,0);
$pdf->Cell(189,10,'',0,1);

$pdf->SetFont('Arial','U','10');
$pdf->Cell(47 ,5,'',0,0);
$pdf->Cell(100,10,'POLIS STANDAR ASURANSI KEBAKARAN INDONESIA',0,1);



$pdf->SetFont('Arial','','10');
$pdf->Cell(60,10,'No Polis',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['id_order'],0,1,'L');
$pdf->Cell(60,10,'Nama Tertanggung',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['nama'],0,1,'L');
$pdf->Cell(60,10,'Alamat Tertanggung',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['alamat'],0,1,'L');
$pdf->Cell(60,10,'Jangka Waktu Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['awal_pertanggungan'],0,0,'L');
$pdf->Cell(-73,10,'s.d',0,0,'R');
$pdf->Cell(10,10,$var['akhir_pertanggungan'],0,1);
$pdf->Cell(60,10,'Lokasi Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['alamat_okupasi'],0,1);
$pdf->Cell(60,10,'Penerangan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['jenis_penerangan'],0,1,'L');
$pdf->Cell(60,10,'Konstruksi Kelas',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$kelas['kelas'],0,1,'L');
$pdf->Cell(60,10,'Jenis Okupasi',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$okupasi['keterangan'],0,1,'L');

$pdf->SetFont('Arial','','10');
$pdf->Cell(60,10,'Harta benda dan atau kepentingan yang dipertanggungkan :',0,1,'L');

$pdf->Cell(13,5,'No',1,0,'C');
$pdf->Cell(75,5,'Okupasi',1,0,'C');
$pdf->Cell(40,5,'Harga Pertanggungan',1,0,'C');
$pdf->Cell(20,5,'Rate',1,0,'C');
$pdf->Cell(35,5,'Premi',1,1,'C');

$pdf->Cell(13,5,$no,1,0,'C');
$pdf->Cell(75,5,$okupasi['keterangan'],1,0,'C');
$pdf->Cell(40,5,$var['harga_pertanggungan'],1,0,'C');
$pdf->Cell(20,5,$var['id_rate'],1,0,'C');
$pdf->Cell(35,5,$premi,1,1,'C');
$no++;

$pdf->Cell(13,5,'',0,0,'C');
$pdf->Cell(75,5,'',0,0,'C');
$pdf->Cell(40,5,'',0,0,'C');
$pdf->Cell(20,5,'Total',1,0,'C');
$pdf->Cell(35,5,$premi,1,1,'C');

$pdf->Cell(60,5,'',0,1);
$pdf->Cell(60,5,'',0,1);
$pdf->Cell(60,5,'Premi',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$premi,0,1,'L');
$pdf->Cell(60,5,'Biaya Polis',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['biaya_polis'],0,1,'L');
$pdf->Cell(60,5,'Biaya Materai',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['biaya_materai'],0,1,'L');
$pdf->Cell(60,-4,'__________________________________________ +',0,1,'L');
$pdf->Cell(60,15,'Sub Total',0,0,'L');
$pdf->Cell(5,15,':',0,0,'L');
$pdf->Cell(100,15,$total,0,1,'L');

$pdf->Cell(166,5,'',0,1);
$pdf->Cell(166,5,'',0,1);
$pdf->Cell(163,5,'Dibuat di PURWOKERTO',0,1,'R');
$pdf->Cell(145,5,'Pada Tanggal,',0,0,'R');
$pdf->Cell(-57,5,$tanggal,0,1);
$pdf->Cell(166,5,'',0,1);
$pdf->Cell(166,5,'',0,1);
$pdf->Cell(166,5,'',0,1);
$pdf->Cell(166,5,'',0,1);
$pdf->Cell(173,5,'(.......................................................)',0,1,'R');
$pdf->Cell(166,5,'ADANG NURYADI, S.SOS',0,1,'R');
$pdf->Cell(154,5,'KEPALA CABANG',0,1,'R');

$pdf->SetFont('Arial','','8');
$pdf->Cell(60,10,'',0,1);
$pdf->Cell(60,10,'',0,1);
$pdf->Cell(60,3,'Note :',0,1,'L');
$pdf->Cell(60,3,'* Tanpa Dibubuhi Tanda Tangan dan Stempel Polis ini Tetap Berlaku ',0,1,'L');
$pdf->Output();
}
?>