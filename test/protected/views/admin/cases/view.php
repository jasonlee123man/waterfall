<?php
/* @var $this CasesController */
/* @var $model Cases */

$this->breadcrumbs=array(
	'Cases'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Cases', 'url'=>array('index')),
	array('label'=>'Create Cases', 'url'=>array('create')),
	array('label'=>'Update Cases', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cases', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cases', 'url'=>array('admin')),
);
?>

<h1>View Cases #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'type_id',
		'images_id',
		'dentist_id',
		'patient_id',
		'sex',
		'age',
		'status',
		'create_at',
	),
)); ?>
