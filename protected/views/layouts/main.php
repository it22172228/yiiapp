<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <style>
        /* Custom CSS for navbar styling */
        .navbar-custom {
            background-color: #343a40; /* Dark background */
            border-bottom: 2px solid #495057; /* Subtle bottom border */
        }
        .navbar-custom .navbar-brand {
            color: #f8f9fa; /* Light text color for brand */
            font-weight: bold; /* Bold brand name */
        }
        .navbar-custom .navbar-nav .nav-link {
            color: #f8f9fa; /* Light text color for links */
            padding: 0.75rem 1.25rem; /* Add padding for better spacing */
            font-weight: 500; /* Medium weight font */
            border-radius: 0.25rem; /* Rounded corners */
            transition: background-color 0.3s, color 0.3s; /* Smooth transitions */
        }
        .navbar-custom .navbar-nav .nav-link:hover,
        .navbar-custom .navbar-nav .nav-link.active {
            color: #ffffff; /* White text color on hover */
            background-color: #495057; /* Dark background on hover */
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        }
        .navbar-custom .nav-link i {
            margin-right: 0.5rem; /* Space between icon and text */
        }
        .navbar-custom .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3E%3Cpath stroke="currentColor" stroke-width="2" d="M5 7h20M5 15h20M5 23h20"/%3E%3C/svg%3E');
        }
        .navbar-custom .navbar-toggler {
            border: none; /* Remove border from the toggler */
        }
    </style>
</head>

<body>

<div class="container" id="page">

    <div id="header">
        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
    </div><!-- header -->

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('/site/index'); ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php $this->widget('zii.widgets.CMenu', array(
                'htmlOptions' => array('class' => 'navbar-nav'),
                'items' => array(
                    array('label' => '<i class="fas fa-home"></i> Home', 'url' => array('/site/index'), 'linkOptions' => array('class' => 'nav-item nav-link', 'danger' => 'false')),
                    array('label' => '<i class="fas fa-info-circle"></i> About', 'url' => array('/site/page', 'view' => 'about'), 'linkOptions' => array('class' => 'nav-item nav-link')),
                    array('label' => '<i class="fas fa-envelope"></i> Contact', 'url' => array('/site/contact'), 'linkOptions' => array('class' => 'nav-item nav-link')),
                    array('label' => '<i class="fas fa-sign-in-alt"></i> Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest, 'linkOptions' => array('class' => 'nav-item nav-link')),
                    array('label' => '<i class="fas fa-sign-out-alt"></i> Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest, 'linkOptions' => array('class' => 'nav-item nav-link')),
                ),
                'encodeLabel' => false, // Ensure HTML is not encoded
            )); ?>
        </div>
    </nav><!-- mainmenu -->

    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
            'htmlOptions' => array('class' => 'breadcrumb'),
        )); ?><!-- breadcrumbs -->
    <?php endif ?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer" class="text-center">
        Copyright &copy; <?php echo date('Y'); ?> HETA DAWASE WEERAYO.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>
