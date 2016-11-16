<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2016-10-19 16:55:25
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('User'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data User</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>