<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'course-form',
    'htmlOptions' => array('class' => 'form-horizontal'), // Add Bootstrap form-horizontal class
    'enableAjaxValidation' => false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); // Add Bootstrap alert class ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'course_id', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'course_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'course_id', array('class' => 'text-danger')); // Add Bootstrap text-danger class ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'course_name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'course_name', array('class' => 'form-control', 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'course_name', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'discription', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'discription', array('class' => 'form-control', 'maxlength' => 1000)); ?>
            <?php echo $form->error($model, 'discription', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); // Add Bootstrap btn and btn-primary classes ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
