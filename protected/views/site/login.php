<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-center">
                    <h3 class="font-weight-light my-4">Login to Your Account</h3>
                </div>
                <div class="card-body">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'login-form',
                        'enableClientValidation' => true,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                    )); ?>

                    <p class="text-muted">Please fill out the following form with your login credentials:</p>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'username', array('class' => 'form-label')); ?>
                        <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'username', array('class' => 'invalid-feedback')); ?>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'password', array('class' => 'form-label')); ?>
                        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'password', array('class' => 'invalid-feedback')); ?>
                    </div>

                    <div class="form-group form-check">
                        <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'form-check-input')); ?>
                        <?php echo $form->label($model, 'rememberMe', array('class' => 'form-check-label')); ?>
                        <?php echo $form->error($model, 'rememberMe', array('class' => 'invalid-feedback')); ?>
                    </div>

                    <div class="form-group">
                        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary btn-block')); ?>
                    </div>

                    <?php $this->endWidget(); ?>
                </div>
                <div class="card-footer text-center">
                    <p class="small">Don't have an account? <a href="<?php echo $this->createUrl('site/register'); ?>">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optionally include custom styles -->
<style>
    .card {
        border-radius: 15px;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>
