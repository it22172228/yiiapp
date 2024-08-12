<?php
// Ensure CHtml is available
Yii::import('zii.widgets.CMenu');
?>

<div class="site-index">

    <!-- Jumbotron with a background image and centered text -->
    <div class="jumbotron jumbotron-fluid text-center  bg-primary  text-white">
        <div class="container">
        <h1 class="display-4" style="font-weight: bold;">!!!!!!WELCOME!!!!!!!</h1>


            <p class="lead bg-primary">Manage your students and courses efficiently</p>
            
        </div>
    </div>

    <!-- Body content section with cards -->
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <p class="card-text">Manage and view the list of students enrolled in your courses.</p>
                        <a href="<?php echo Yii::app()->createUrl('students/index'); ?>" class="btn btn-primary">View Students</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Courses</h5>
                        <p class="card-text">View and manage all the courses available in the system.</p>
                        <a href="<?php echo Yii::app()->createUrl('course/index'); ?>" class="btn btn-secondary">View Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Optional: Add custom CSS for further styling -->
<style>
    .jumbotron {
        background-image: url('https://example.com/your-image.jpg'); /* Replace with your actual image URL */
        background-size: cover;
        color: #ffffff;
        padding: 4rem 2rem;
        background-position: center;
    }
    .card {
        border-radius: 10px;
    }
    .btn-custom {
        margin: 10px;
    }
</style>
