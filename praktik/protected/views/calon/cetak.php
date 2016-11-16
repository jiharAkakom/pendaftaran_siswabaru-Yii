<?php
// cetak tanda ferifikasi//
$no_pend = $_GET["no_pend"];
$calon = Calon::model()->findByPk($no_pend);
$total= $calon->nilai_ind+$calon->nilai_ing+$calon->nilai_mtk+$calon->nilai_ipa;
$tanggal=date("d-m-Y");
$jenisKelamin=$calon->jenis_kelamin=="Laki-Laki" ? "Laki-laki" : "Perempuan";

	$pdf = Yii::createComponent('application.extensions.tcpdf.tcpdf',
	'P', 'mm', 'F4');
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor("Badiyanto");
	$pdf->SetTitle("Bukti Ferifikasi");
	$pdf->setPrintHeader(false);
	$pdf->setPrintFooter(false);
	$pdf->AddPage();
	$pdf->SetMargins(20,0,-1,false);
	$pdf->SetTopMargin(30);
	$pdf->SetFont('Helvetica','B',14);
	$pdf->Cell(185,1,'PENDAFTARAN MAHASISWA BARU ON-LINE','',0,'C',false);
	$pdf->Ln();
	$pdf->Cell(160,1,'Tanda Bukti Ferifikasi Pendaftaran','',0,'C',false);
	$pdf->Ln();
	$pdf->SetFont('Helvetica','',11);

	$tb1 = <<<EOD
	<font face="Times New Roman" size="10">
	<table border="0.5">
	<tr><td colspan="2">No Pendaftaran</td> <td colspan="3"> $no_pend </td></tr>
	<tr><td colspan="2">Nama</td> <td colspan="3">$calon->nama</td></tr>
	<tr><td colspan="2">Alamat</td> <td colspan="3">$calon->alamat</td></tr>
	<tr><td colspan="2">Asal Sekolah</td> <td colspan="3">$calon->asal_sekolah</td></tr>
	<tr><td colspan="2">Jenis Kelamin</td> <td colspan="3">$jenisKelamin</td></tr>
	<tr><td colspan="2">Tanggal Lahir</td> <td colspan="3">$calon->tanggal_lahir</td></tr>
	<tr>
		<td colspan="5"><div align="center">Nilai SKHUN</div></td>
	</tr>
	<tr>
		<td><div align="center">Bahasa Indonesia</div></td>
		<td><div align="center">Bahasa Inggris</div></td>
		<td><div align="center">Matematika</div></td>
		<td><div align="center">IPA</div></td>
		<td><div align="center">Jumlah</div></td>
	</tr>
	<tr>
		<td><div align="center">$calon->nilai_ind</div></td>
		<td><div align="center">$calon->nilai_ing</div></td>
		<td><div align="center">$calon->nilai_mtk</div></td>
		<td><div align="center">$calon->nilai_ipa</div></td>
		<td><div align="center">$total</div></td>
	</tr>
	</table>
	</font>
EOD;
$pdf->writeHTML($tb1, true, false, false, false, '');
$tb1 = <<<EOD
<font face="Times New Roman" size="10">
<b>Keterangan :</b><br>
Silakan melakukan ferifikasi pendaftaran ke loket pendaftaran di sekolah dengan mambawa persyaratan: <br>
<lu>
<table>
	<tr>
		<td>
			Yogyakarta tanggal, $tanggal<br>
			Calon Siswa</td>
			<td>Menyetujui orang tua/wali,</td>
	</tr>
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
			<tr>
				<td>$calon->nama</td>
				<td>....................................................</td>
			</tr>
</table>
</font>
EOD;
$pdf->writeHTML($tb1, true, false, false, false, '');
$pdf->Output($no_pend.".pdf");
?>
