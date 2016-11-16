
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2016-10-19 16:54:53 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('ThnAjar'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data ThnAjar </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>