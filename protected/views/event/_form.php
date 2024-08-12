<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'event-form',
    'htmlOptions' => array('class' => 'form-horizontal'), // Add Bootstrap form-horizontal class
    'enableAjaxValidation' => false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); // Bootstrap alert for errors ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'details', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'details', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'details', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'event_date', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'event_date', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'event_date', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'event_time', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'event_time', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'event_time', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'venue', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'venue', array('class' => 'form-control', 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'venue', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'capacity', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'capacity', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'capacity', array('class' => 'text-danger')); ?>
        </div>
    </div>

    <div class="form-group">
    <?php echo $form->labelEx($model, 'status', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo $form->dropDownList(
            $model,
            'status',
            array(
				'Select' => 'Select',
                'Upcoming' => 'Upcoming',
                'Ongoing' => 'Ongoing',
                'Completed' => 'Completed',
                'Canceled' => 'Canceled'
            ),
            array('class' => 'form-control')
        ); ?>
        <?php echo $form->error($model, 'status', array('class' => 'text-danger')); ?>
    </div>
</div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
