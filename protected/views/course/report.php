<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'download-pdf-form',
    'action' => Yii::app()->createUrl('course/downloadReport'),
    'method' => 'post',
));
?>

<!-- Enhanced Download PDF Button -->
<?php echo CHtml::submitButton('Download PDF', array('class' => 'btn btn-primary btn-lg btn-custom')); ?>

<?php $this->endWidget(); ?>

<table class="table table-bordered">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>DISCRIPTION</th>
      
    </tr>
    </thead>
    <?php foreach ($reportData as $course): ?>
        <tr>
            <td><?php echo CHtml::encode($course->course_id ); ?></td>
            <td><?php echo CHtml::encode($course->course_name); ?></td>
            <td><?php echo CHtml::encode($course->discription); ?></td>
            
        </tr>
    <?php endforeach; ?>
</table>

<!-- Custom CSS for Button -->
<style>
    .btn-custom {
        background-color: #007bff; /* Primary color */
        border-color: #007bff; /* Border color */
        color: #fff; /* Text color */
        border-radius: 0.5rem; /* Rounded corners */
        padding: 0.75rem 1.5rem; /* Padding */
        font-size: 1.125rem; /* Font size */
        font-weight: 600; /* Bold text */
        text-transform: uppercase; /* Uppercase text */
        letter-spacing: 0.05rem; /* Spacing between letters */
        transition: background-color 0.3s, border-color 0.3s, box-shadow 0.3s; /* Transition effects */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        border: 2px solid transparent; /* Transparent border for consistent sizing */
    }

    .btn-custom:hover {
        background-color: #0056b3; /* Darker background on hover */
        border-color: #004085; /* Darker border on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Larger shadow on hover */
    }

    .btn-custom:focus, .btn-custom:active {
        outline: none; /* Remove outline */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Larger shadow on focus/active */
        border-color: #004085; /* Border color on focus/active */
    }

    .btn-custom:disabled {
        background-color: #c0c0c0; /* Gray background for disabled state */
        border-color: #c0c0c0; /* Gray border for disabled state */
        color: #6c757d; /* Text color for disabled state */
        box-shadow: none; /* No shadow for disabled state */
    }
</style>
