
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2016-10-19 16:55:25 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('User'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data User </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>