<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_name'); ?>
		<?php echo $form->textField($model,'emp_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'emp_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'emp_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_salary'); ?>
		<?php echo $form->textField($model,'emp_salary'); ?>
		<?php echo $form->error($model,'emp_salary'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->