<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2016-10-19 16:54:53
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajaran')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_ajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_awal_pend')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_awal_pend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_akhir_pend')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_akhir_pend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quota')); ?>:</b>
	<?php echo CHtml::encode($data->quota); ?>
	<br />


</div>