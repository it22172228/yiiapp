<?php
/* @var $this CourseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Courses',
);
?>

<div class="container mt-4">
    <h1 class="mb-4">Courses</h1>

    <div class="d-flex justify-content-between mb-4">
        <div>
            <?php echo CHtml::link('Create a Course', array('create'), array('class' => 'btn btn-primary')); ?>
        </div>
        
        <div>
            <?php echo CHtml::link('Manage Courses', array('admin'), array('class' => 'btn btn-secondary')); ?>
        </div>
        <div>
        <?php echo CHtml::link('Generate Report', array('generateReport'), array('class' => 'btn btn-info')); ?> 
        </div>
    </div>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>
