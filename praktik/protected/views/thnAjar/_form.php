<?php
/********************************************************
 * dibuat oleh    : Badiyanto
 * CRUD generator : Yii Bootstrap
 * tanggal        : 2016-10-19 16:54:53
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'thn-ajar-form',
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

	<?php echo $form->textFieldRow($model,'tahun_ajaran',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->datepickerRow($model,'tanggal_awal_pend',
	array(
		'options' => array(
			'format'=>'yyyy-mm-dd',
			'showOn'=>'button',
			'keyboardNavigation'=>'true',
			'autoclose'=>'true',
			'changeMonth'=>'true',
			'changeYears'=>'true',
			'constrainInput' => 'false',
			'duration'=>'fast',
			'showAnim'=>'slide',
		),
	),
	array('hint'=>'(Klik untuk pilih tanggal)',
				'prepend'=>'<i class="icon-calendar"></i>',
			),
	array('themeUrl'=>Yii::app()->request->baseUrl.'/themes/jui',
				'theme'=>'redmond',
				'htmlOptions'=>array('size'=>20))

	); ?>


	<?php echo $form->datepickerRow($model,'tanggal_akhir_pend',
	array(
		'options' => array(
			'format'=>'yyyy-mm-dd',
			'showOn'=>'button',
			'keyboardNavigation'=>'true',
			'autoclose'=>'true',
			'changeMonth'=>'true',
			'changeYears'=>'true',
			'constrainInput' => 'false',
			'duration'=>'fast',
			'showAnim'=>'slide',
		),
	),
	array('hint'=>'(Klik untuk pilih tanggal)',
				'prepend'=>'<i class="icon-calendar"></i>',
			),
	array('themeUrl'=>Yii::app()->request->baseUrl.'/themes/jui',
				'theme'=>'redmond',
				'htmlOptions'=>array('size'=>20))

	); ?>
	<?php echo $form->textFieldRow($model,'quota',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
</div>

<?php $this->endWidget(); ?>
