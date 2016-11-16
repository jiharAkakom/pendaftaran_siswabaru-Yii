<?php
/********************************************************
 * dibuat oleh : Badiyanto
 * tanggal     : 2016-10-19 16:53:58
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Calon'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Calon</legend>
<?php echo $this->renderPartial('_formUpdate',array('model'=>$model)); ?>
