<?php
/* @var $this StudentsController */
/* @var $data Students */
?>

<div class="card mb-4 shadow-lg border-light rounded">
    <div class="card-body">
        <h4 class="card-title text-primary mb-3"><?php echo CHtml::encode($data->name); ?></h4>
        
        <div class="list-group">
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span class="font-weight-bold"><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</span>
                <span><?php echo CHtml::encode($data->name); ?></span>
            </div>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span class="font-weight-bold"><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</span>
                <span><?php echo CHtml::encode($data->email); ?></span>
            </div>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span class="font-weight-bold"><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</span>
                <span><?php echo CHtml::encode($data->course_id); ?></span>
            </div>
        </div>
        
        
    </div>
</div>
