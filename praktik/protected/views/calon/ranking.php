<?php
$thnId=Komponen::getThnJarId();

$con=Yii::app()->db;
	$sql=" SELECT * ,nilai_ind+nilai_ing+nilai_mtk+nilai_ipa+prestasi as total
		FROM calon
		WHERE thn_ajar_id='$thnId' AND status=1 AND status_diterima=1
		ORDER BY nilai_ind+nilai_ing+nilai_mtk+nilai_ipa+prestasi DESC,
				 nilai_ind DESC, nilai_ing DESC, nilai_mtk DESC, nilai_ipa DESC";
		$hs=$con->createCommand($sql)->queryAll();
?>

<div class="p">
	<table class="table table-bordered">
		<caption>
			<center><h2>DAFTAR HASIL SELEKSI SEMENTARA</h2></center>
		</caption>
		<thead>
			<tr>
				<th width="20">NO</th>
				<th width="20">NO_PEND</th>
				<th width="128">NAMA</th>
				<th width="42">IND</th>
				<th width="42">ING</th>
				<th width="42">MTK</th>
				<th width="42">IPA</th>
				<th width="42">PRES</th>
				<th width="42">TOTAL</th>
			</tr>
		</thead>
		<tbody>

		<?php
			$no=0;
			foreach($hs as $m)
			{
			$no++;

		?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $m['no_pend'];?></td>
				<td><?php echo $m['nama'];?></td>
				<td><div align="right"><?php echo $m['nilai_ind'];?></div></td>
				<td><div align="right"><?php echo $m['nilai_ing'];?></div></td>
				<td><div align="right"><?php echo $m['nilai_mtk'];?></div></td>
				<td><div align="right"><?php echo $m['nilai_ipa'];?></div></td>
				<td><div align="right"><?php echo $m['prestasi'];?></div></td>
				<td><div align="right"><?php echo $m['total'];?></div></td>
			</tr>
		<?php } ?>
	</table>
		<?php
		$nilai=new Calon;
			echo "Nilai Tertinggi: ".$nilai->nilaiMiMax($thnId)->nilMaksimal; //nilMaksimal;
			echo "<br>";
			echo "Nilai Terendah : ". $nilai->nilaiMiMax($thnId)->nilMinimal; //nilMinimal;
		?>
</div>
