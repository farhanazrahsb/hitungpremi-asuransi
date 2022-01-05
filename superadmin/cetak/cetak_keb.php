<?php

require('fpdf181/fpdf.php');

require "../../koneksi/koneksi.php";

$pdf= new FPDF('p','mm','A4');
$pdf->AddPage();

$pdf->Image('images/back1.png',-15,120,200);


//header
$no = $_GET['no'];
$query = mysql_query ("SELECT * FROM order_kebakaran WHERE no='$no'");
while ($var=mysql_fetch_array($query)) {

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
$pdf->Cell(34,5,'No SPPA :',0,0);
$pdf->Cell(-2,5,$var['id_order'],0,0,'R');
$pdf->Cell(189,10,'',0,1);

$pdf->SetFont('Arial','U','10');
$pdf->Cell(47 ,5,'',0,0);
$pdf->Cell(100,10,'SURAT PERMOHONAN PENUTUPAN ASURANSI KEBAKARAN',0,1);



$pdf->SetFont('Arial','','10');
$pdf->Cell(60,10,'1. Nama Tertanggung',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['nama'],0,1,'L');
$pdf->Cell(60,10,'2. Alamat Tertanggung',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['alamat'],0,1,'L');
$pdf->Cell(60,10,'3. Harga Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['harga_pertanggungan'],0,1);
$pdf->Cell(60,5,'4. Keterangan Lengkap Mengenai Konstruksi Bangunan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,'',0,1);
$pdf->Cell(60,5,'a. Dinding',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['jenis_dinding'],0,1,'L');
$pdf->Cell(60,5,'b. Lantai',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['jenis_lantai'],0,1,'L');
$pdf->Cell(60,5,'c. Tiang/Kerangka',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['jenis_tiang'],0,1,'L');
$pdf->Cell(60,5,'d. Banyak Tingkat',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['banyak_tingkat'],0,1,'L');
$pdf->Cell(60,10,'5. Jenis Penerangan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['jenis_penerangan'],0,1,'L');
$pdf->Cell(60,10,'6. Okupasi Bangunan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['okupasi_bangunan'],0,1,'L');
$pdf->Cell(60,5,'7. Jarak Bangunan Yang Dipertanggungkan Dengan Sekitar Serta Penggunanya',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,'',0,1,'L');
$pdf->Cell(60,5,'a. Sebelah Kiri',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['batas_kiri'],0,0,'L');
$pdf->Cell(-50,5,'m',0,1,'R');
$pdf->Cell(60,5,'b. Sebelah Kanan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['batas_kanan'],0,0,'L');
$pdf->Cell(-50,5,'m',0,1,'R');
$pdf->Cell(60,5,'c. Bagian Belakang',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['batas_belakang'],0,0,'L');
$pdf->Cell(-50,5,'m',0,1,'R');
$pdf->Cell(60,5,'d. Bagian Depan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['batas_depan'],0,0,'L');
$pdf->Cell(-50,5,'m',0,1,'R');
$pdf->Cell(60,10,'8. Lokasi Obyek Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['alamat_okupasi'],0,1,'L');
$pdf->Cell(60,10,'9. Jenis Alat Pemadam Kebakaran',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['alat_pemadam'],0,1,'L');
$pdf->Cell(60,10,'10. Harta Benda Dekat Dengan Pasar',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['lokasi_okupasi'],0,1,'L');
$pdf->Cell(60,10,'11. Awal Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['awal_pertanggungan'],0,1,'L');
$pdf->Cell(60,10,'12. Akhir Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['akhir_pertanggungan'],0,1,'L');
}

$pdf->SetFont('Arial','','10');
$pdf->Cell(60,5,'Demikian surat permohonan kami buat dengan sebenarnya sepanjang sepengetahuan kami',0,1,'L');
$pdf->Cell(60,5,'dan dasar/ merupakan bagian yang terpisahkan dari polis yang akan di buat.',0,1,'L');
$pdf->Cell(153,10,'Pemohon,',0,1,'R');
$pdf->Cell(173,40,'(.......................................................)',0,1,'R');
$pdf->Cell(178,-25,'Tanda Tangan, Nama Lengkap & Stempel',0,1,'R');
$pdf->Output();

?>
