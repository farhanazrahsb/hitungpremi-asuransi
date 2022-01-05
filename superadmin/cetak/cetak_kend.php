<?php

require('fpdf181/fpdf.php');

require "../../koneksi/koneksi.php";

$pdf= new FPDF('p','mm','A4');
$pdf->AddPage();

$pdf->Image('images/back1.png',-15,120,200);


//header
$no = $_GET['no'];
$query = mysql_query ("SELECT * FROM order_kendaraan WHERE no='$no'");
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
$pdf->Cell(30 ,5,'',0,0);
$pdf->Cell(100,10,'SURAT PERMOHONAN PENUTUPAN ASURANSI KENDARAAN BERMOTOR',0,1);


$pdf->SetFont('Arial','','10');
$pdf->Cell(60,10,'1. Nama Tertanggung',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['nama'],0,1,'L');
$pdf->Cell(60,10,'2. Alamat Tertanggung',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['alamat'],0,1,'L');
$pdf->Cell(60,5,'3. Obyek Pertanggungan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,'',0,1);
$pdf->Cell(60,5,'a. Merk Kendaraan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['merk_kend'],0,1,'L');
$pdf->Cell(60,5,'b. Tipe Kendaraan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['tipe_kend'],0,1,'L');
$pdf->Cell(60,5,'c. Tahun Pembuatan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['tahun_kend'],0,1,'L');
$pdf->Cell(60,5,'d. Nomor Polisi',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['no_polisi'],0,1,'L');
$pdf->Cell(60,5,'e. Nomor Rangka',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['no_rangka'],0,1,'L');
$pdf->Cell(60,5,'f. Nomor Mesin',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['no_mesin'],0,1,'L');
$pdf->Cell(60,5,'g. Jenis Kendaraan',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['jenis_kend'],0,1,'L');
$pdf->Cell(60,5,'h. Tempat Duduk',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['tempat_ddk'],0,1,'L');
$pdf->Cell(60,5,'i. Daya Angkut',0,0,'L');
$pdf->Cell(5,5,':',0,0,'L');
$pdf->Cell(100,5,$var['daya_angkut'],0,0,'L');
$pdf->Cell(-80,5,'Ton',0,1,'R');
$pdf->Cell(60,10,'4. Kondisi Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['kondisi_pertanggungan'],0,1,'L');
$pdf->Cell(60,10,'5. Harga Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['harga_pertanggungan'],0,1,'L');
$pdf->Cell(60,10,'6. Penggunaan Kendaraan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['penggunaan_kend'],0,1,'L');
$pdf->Cell(60,10,'7. Awal Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['awal_pertanggungan'],0,1,'L');
$pdf->Cell(60,10,'8. Akhir Pertanggungan',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['akhir_pertanggungan'],0,1,'L');
$pdf->Cell(60,10,'9. Kendaraan Dapat Disurvai di',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$var['alamat_kend'],0,1,'L');
}

$pdf->SetFont('Arial','','10');
$pdf->Cell(60,5,'Demikian surat permohonan kami buat dengan sebenarnya sepanjang sepengetahuan kami',0,1,'L');
$pdf->Cell(60,5,'dan dasar/ merupakan bagian yang terpisahkan dari polis yang akan di buat.',0,1,'L');
$pdf->Cell(153,10,'Pemohon,',0,1,'R');
$pdf->Cell(173,40,'(.......................................................)',0,1,'R');
$pdf->Cell(178,-25,'Tanda Tangan, Nama Lengkap & Stempel',0,1,'R');
$pdf->Output();

?>
