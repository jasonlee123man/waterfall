<?php
/* @var $this PhotoController */
/* @var $model Photo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
		<?php
		 $this->widget('CMultiFileUpload', array(
		     'model'=>$model,
		     'attribute'=>'photos',
		     'accept'=>'jpg|gif|png',
		     'options'=>array(
		         //'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
		         //'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
		         //'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
		        // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
		        // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
		        // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
		     ),
		     'denied'=>'File is not allowed',
		     'max'=>10, // max 10 files
		  ));
		?>
		<?php //echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topic_id'); ?>
		<?php echo $form->textField($model,'topic_id'); ?>
		<?php echo $form->error($model,'topic_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->