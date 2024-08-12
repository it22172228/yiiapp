<?php
/* @var $this CourseController */
/* @var $data Course */
?>

<div class="container my-4">
    <div class="card border-primary">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title mb-0"><?php echo CHtml::encode($data->course_name); ?></h4>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-4"><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</dt>
                <dd class="col-sm-8"><?php echo CHtml::encode($data->course_id); ?></dd>
                
                <dt class="col-sm-4"><?php echo CHtml::encode($data->getAttributeLabel('course_name')); ?>:</dt>
                <dd class="col-sm-8"><?php echo CHtml::encode($data->course_name); ?></dd>
                
                <dt class="col-sm-4"><?php echo CHtml::encode($data->getAttributeLabel('discription')); ?>:</dt>
                <dd class="col-sm-8"><?php echo CHtml::encode($data->discription); ?></dd>
            </dl>
            
            <h5 class="mt-4">Enrolled Students</h5>
            <div class="list-group">
                <?php foreach ($data->students as $student): ?>
                    <a href="<?php echo Yii::app()->user->name === 'admin' ? Yii::app()->createUrl('students/view', array('id' => $student->id)) : 'javascript:void(0);' ?>" class="list-group-item list-group-item-light" onclick="<?php if (Yii::app()->user->name !== 'admin') { echo 'alert(\'You are not authorized to perform this action.\');'; } ?>">
                        <h6 class="mb-1"><?php echo CHtml::encode($student->name); ?></h6>
                        <p class="mb-1 text-muted"><?php echo CHtml::encode($student->email); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card-footer text-muted">
            <small>Last updated: <?php echo date('F j, Y'); ?></small>
        </div>
    </div>
</div>
