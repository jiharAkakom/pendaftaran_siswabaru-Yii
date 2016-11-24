<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2016-10-19 16:53:58
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Calon'=>array('index'), $model->no_pend),
));
?>

<legend>Tanda Bukti Pendaftaran</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
   'data'=>$model,
   'type'=>'bordered striped condensed',
   'attributes'=>array(

		 array(
			'name'=>'no_pend',
      'labal'=>'Nomor Ferifikasi',
			'type'=>'html',
			'value'=>$model->no_pend,
		   ),

		 array(
			'name'=>'nama',
			'type'=>'html',
			'value'=>$model->nama,
		   ),

		 array(
			'name'=>'alamat',
			'type'=>'html',
			'value'=>$model->alamat,
		   ),

		 array(
			'name'=>'jenis_kelamin',
			'type'=>'html',
			'value'=>$model->jenis_kelamin=='Laki-Laki' ? 'Laki-Laki' : 'Perempuan',
		   ),

		 array(
			'name'=>'tanggal_lahir',
			'type'=>'html',
			'value'=>$model->tanggal_lahir,
		   ),

		 array(
			'name'=>'asal_sekolah',
			'type'=>'html',
			'value'=>$model->asal_sekolah,
		   ),

		 array(
			'name'=>'nilai_ind',
			'type'=>'html',
			'value'=>$model->nilai_ind,
		   ),

		 array(
			'name'=>'nilai_ing',
			'type'=>'html',
			'value'=>$model->nilai_ing,
		   ),

		 array(
			'name'=>'nilai_mtk',
			'type'=>'html',
			'value'=>$model->nilai_mtk,
		   ),

		 array(
			'name'=>'nilai_ipa',
			'type'=>'html',
			'value'=>$model->nilai_ipa,
		   ),

		 array(
			'name'=>'prestasi',
			'type'=>'html',
			'value'=>$model->prestasi,
		   ),

		 array(
			'name'=>'thn_ajar_id',
			'type'=>'html',
			'value'=>$model->thnAjar->tahun_ajaran,
		   ),
/*
		 array(
			'name'=>'user_id',
			'type'=>'html',
			'value'=>$model->user_id,
		   ),
*/
		 array(
			'name'=>'tanggal',
			'type'=>'html',
			'value'=>$model->tanggal,
		   ),
/*
		 array(
			'name'=>'status',
			'type'=>'html',
			'value'=>$model->status,
		   ),

		 array(
			'name'=>'status_diterima',
			'type'=>'html',
			'value'=>$model->status_diterima,
		   ),
*/
   ),
)); ?>

<b>Keterangan :</b> <br />
Seialhkan melakakan ferifikasi pendaftaran ke loket pendaftaran di sekolah dengan membawa pesyaratan : <br />
<ul>
  <li>SKHUN (asli)</li>
  <li>Akta kelahiran (foto copy)</li>
  <li>Kartu KK</li>
</ul>
<table>
  <tr>
    <td>Yogyakarta tanggal, <?php echo date("d-m-Y"); ?><br />Calon Siswa</td>
    <td>Menyetujui Orang tua/wali,</td>
  </tr>
  <tr><td></td><td></td></tr>
  <tr><td></td><td></td></tr>
  <tr>
    <td><?php echo $model->nama;?></td>
    <td>...........................................</td>
  </tr>
</table>

<div class="from-action">
  <?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=>'link',
    'type'=>'primary',
    'label'=>'Cetak',
    'url'=> array('cetak','no_pend'=>$model->no_pend),
  )); ?>
</div>
