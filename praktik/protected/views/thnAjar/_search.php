<?php 
/********************************************************
* dibuat oleh : Badiyanto 
* CRUD generator : Yii Bootstrap  
* tanggal     : 2016-10-19 16:54:53
********************************************************/
?>
<br>
<?php 
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
  )); ?>

    <?php echo $form->textFieldRow($model,'tahun_ajaran',array('class'=>'span5','maxlength'=>10)); ?>

    <?php echo $form->textFieldRow($model,'tanggal_awal_pend',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'tanggal_akhir_pend',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'quota',array('class'=>'span5')); ?>

	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
