
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2016-10-19 16:53:58 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Calon'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data Calon </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>