<?php
/* @var $this CasesController */
/* @var $model Cases */

$this->breadcrumbs=array(
	'Cases'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cases', 'url'=>array('index')),
	array('label'=>'Create Cases', 'url'=>array('create')),
	array('label'=>'View Cases', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cases', 'url'=>array('admin')),
);
?>

<h1>Update Cases <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>