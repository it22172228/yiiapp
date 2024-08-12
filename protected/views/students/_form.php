<?php
/* @var $this StudentsController */
/* @var $model Students */
/* @var $form CActiveForm */
/* @var $courses array */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'students-form',
    'htmlOptions' => array('class' => 'form-horizontal'), // Add Bootstrap form-horizontal class
    'enableAjaxValidation' => false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); // Add Bootstrap alert class ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger')); // Add Bootstrap text-danger class ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'email', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'course_id', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'course_id', $courses, array('class' => 'form-control', 'prompt' => 'Select a course')); ?>
            <?php echo $form->error($model, 'course_id', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group ">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary  ')); // Larger and full-width button ?>
    </div>
</div>


<?php $this->endWidget(); ?>

</div><!-- form -->
