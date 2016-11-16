<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2016-10-19 16:55:25
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('User'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail User #<?php echo $model->id; ?></legend>

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
			'name'=>'nama',
			'type'=>'html',
			'value'=>$model->nama,
		   ),
 
		 array(
			'name'=>'nama_lengkap',
			'type'=>'html',
			'value'=>$model->nama_lengkap,
		   ),
 
		 array(
			'name'=>'password',
			'type'=>'html',
			'value'=>$model->password,
		   ),
 
		 array(
			'name'=>'status',
			'type'=>'html',
			'value'=>$model->status,
		   ),
   ),
)); ?>
 



