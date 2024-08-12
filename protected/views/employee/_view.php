<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_name')); ?>:</b>
	<?php echo CHtml::encode($data->emp_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_email')); ?>:</b>
	<?php echo CHtml::encode($data->emp_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_salary')); ?>:</b>
	<?php echo CHtml::encode($data->emp_salary); ?>
	<br />


</div>