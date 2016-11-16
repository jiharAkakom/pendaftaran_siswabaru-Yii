 <?php
/********************************************************
 * dibuat oleh : Badiyanto
 * CRUD generator : Yii Bootstrap
 * tanggal     : 2016-10-19 16:53:58
 ********************************************************/
?>

 <?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Calons'),
));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('calon-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'helpdialog',
    'options'=>array(
        'title'=>'Bantuan',
        'autoOpen'=>false,
        'modal'=>true,
        'show'=>'slide',
		'hide'=>'slide',
    ),
));
echo $this->renderPartial('_help');
$this->endWidget();
?>

<legend>
Menampilkan Data  Calons
</legend>
<div class="form">

<center>
<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/daftar.png'),
            array('index'),array('title'=>'Daftar Detail')); ?>

<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/cari.png'),'#',
            array('class'=>'search-button','title'=>'Pencarian Data')); ?>

<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/petunjuk.png'),'#',
            array('title'=>'Bantuan','onclick'=>"$('#helpdialog').dialog('open')",)); ?>
 <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/tambah.png'),
            array('create'),array('title'=>'Menambah Data')); ?>

</center>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'calon-grid',
	'type'=>'bordered striped condensed',
	'dataProvider'=>$model->search(),
	'selectableRows'=>2,
	'template'=>'{items}{summary}{pager}',
	'columns'=>array(
	     array( //nomor urut
	       'header'=>'NO',
		   'value'=>'$this->grid->dataProvider->pagination->currentPage *
		   $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		   'htmlOptions'=>array('width'=>'3%','style'=>'text-align:center'),
		),
		array(
			'name'=>'no_pend',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->no_pend)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'nama',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->nama)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'alamat',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->alamat)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'jenis_kelamin',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->jenis_kelamin)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'tanggal_lahir',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->tanggal_lahir)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'asal_sekolah',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->asal_sekolah)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'nilai_ind',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->nilai_ind)',
			'htmlOptions'=>array('width'=>''),
		),

		array(
			'name'=>'nilai_ing',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->nilai_ing)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'nilai_mtk',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->nilai_mtk)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'nilai_ipa',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->nilai_ipa)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'prestasi',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->prestasi)',
			'htmlOptions'=>array('width'=>''),
		),
    array(
			'name'=>'total',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->total())',
			'htmlOptions'=>array('width'=>''),
		),
  /*
		array(
			'name'=>'thn_ajar_id',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->thn_ajar_id)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'user_id',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->user_id)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'tanggal',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->tanggal)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'status',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->status)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'status_diterima',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->status_diterima)',
			'htmlOptions'=>array('width'=>''),
		),
		*/
		array(
		    'header'=>'AKSI',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width:50px','style'=>'text-align:center'),
        ),

	),
)); ?>
