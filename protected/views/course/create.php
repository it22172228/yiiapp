<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Manage Course', 'url'=>array('admin')),
);
?>

<h1>Create Course</h1>
<div class="button-container">
    <?php
    echo CHtml::link('Course List', array('index'), array('class' => 'btn btn-primary'));
    echo CHtml::link('Manage Course', array('admin'), array('class' => 'btn btn-secondary', 'style' => 'margin-left: 10px;'));
    ?>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>