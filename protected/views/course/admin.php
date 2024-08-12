<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
    'Courses'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List Course', 'url'=>array('index')),
    array('label'=>'Create Course', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#course-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1>Manage Courses</h1>

<?php
// Check for error messages
if (Yii::app()->user->hasFlash('error')) {
    echo '<div class="alert alert-danger">' . Yii::app()->user->getFlash('error') . '</div>';
}
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'course-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'course_id',
        'course_name',
        'discription',
        array(
            'class'=>'CButtonColumn',
            'deleteConfirmation'=>"js:'Are you sure you want to delete this course?'", // Confirmation message
            'afterDelete'=>'function(link,success,data){ 
                if(success) {
                    alert("Delete completed successfully");
                } else {
                    alert(data);
                }
            }',
        ),
    ),
)); ?>
