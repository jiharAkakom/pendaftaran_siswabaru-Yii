<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2016-10-19 16:54:53
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('ThnAjar'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail ThnAjar #<?php echo $model->id; ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
   'data'=>$model,
   'type'=>'bordered striped condensed',
   'attributes'=>array(
 
		 array(
			'name'=>'id',
			'type'=>'html',
			'value'=>$model->id,
		   ),
 
		 array(
			'name'=>'tahun_ajaran',
			'type'=>'html',
			'value'=>$model->tahun_ajaran,
		   ),
 
		 array(
			'name'=>'tanggal_awal_pend',
			'type'=>'html',
			'value'=>$model->tanggal_awal_pend,
		   ),
 
		 array(
			'name'=>'tanggal_akhir_pend',
			'type'=>'html',
			'value'=>$model->tanggal_akhir_pend,
		   ),
 
		 array(
			'name'=>'quota',
			'type'=>'html',
			'value'=>$model->quota,
		   ),
   ),
)); ?>
 



