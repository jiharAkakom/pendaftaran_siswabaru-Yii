<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2016-10-19 16:53:58
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('no_pend')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_pend),array('view','id'=>$data->no_pend)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asal_sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->asal_sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ind')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ind); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ing')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_mtk')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_mtk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ipa')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ipa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prestasi')); ?>:</b>
	<?php echo CHtml::encode($data->prestasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thn_ajar_id')); ?>:</b>
	<?php echo CHtml::encode($data->thn_ajar_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_diterima')); ?>:</b>
	<?php echo CHtml::encode($data->status_diterima); ?>
	<br />

	*/ ?>

</div>