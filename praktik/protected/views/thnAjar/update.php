<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2016-10-19 16:54:53
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('ThnAjar'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data ThnAjar</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>