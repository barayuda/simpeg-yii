<?php
/* @var $this Cms_master_ppkController */
/* @var $model Ppk */

$this->breadcrumbs=array(
	'Ppk'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Data Ppk', 'url'=>array('index')),
	array('label'=>'Tambah Ppk', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ppk-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Ppk</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ppk-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'nama_ppk',
		'parent_satuan_kerja',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
