<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2016-10-19 16:55:25
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'method'=>'post',
            'type'=>'horizontal',
            'clientOptions'=>array(
             'validateOnType'=>true,
             'validateOnChange' => true,
            ),
            'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>
<br>
<p class="help-block">Yang bertanda  <span class="required">*</span> isian tidak boleh kosong.</p>
<br>

<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>15)); ?>
	<?php echo $form->textFieldRow($model,'nama_lengkap',array('class'=>'span5','maxlength'=>50)); ?>
	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>40)); ?>
	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
