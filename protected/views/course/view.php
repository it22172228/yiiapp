<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
    'Courses'=>array('index'),
    $model->course_name,
);

$this->menu=array(
    array('label'=>'List Course', 'url'=>array('index')),
    array('label'=>'Create Course', 'url'=>array('create')),
    
    array('label'=>'Manage Course', 'url'=>array('admin')),
);
?>

<h1>        <?php echo $model->course_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'course_id',
        'course_name',
        'discription',
    ),
)); ?>

<h2>Enrolled Students</h2>
<ul>
    <?php foreach ($model->students as $student): ?>
        <li><?php echo CHtml::encode($student->name); ?> (<?php echo CHtml::encode($student->email); ?>)</li>
    <?php endforeach; ?>
</ul>
