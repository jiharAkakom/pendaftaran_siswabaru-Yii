<?php 
/********************************************************
* dibuat oleh : Badiyanto 
* CRUD generator : Yii Bootstrap  
* tanggal     : 2016-10-19 16:53:58
********************************************************/
?>
<br>
<?php 
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
  )); ?>

    <?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'jenis_kelamin',array('class'=>'span5','maxlength'=>9)); ?>

    <?php echo $form->textFieldRow($model,'tanggal_lahir',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'asal_sekolah',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'nilai_ind',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'nilai_ing',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'nilai_mtk',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'nilai_ipa',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'prestasi',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'thn_ajar_id',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'tanggal',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'status_diterima',array('class'=>'span5')); ?>

	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
