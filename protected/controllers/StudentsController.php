<?php

class StudentsController extends Controller
{
    public $layout='//layouts/column2';

    public function filters()
    {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('index',),
                'users'=>array('*'),
            ),
            array('allow',
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow',
                'actions'=>array('admin', 'delete', 'view', 'generateReport', 'downloadReport'),
                'users'=>array('admin'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }

    public function actionView($id)
    {
        if (Yii::app()->user->name !== 'admin') {
            throw new CHttpException(403, 'You are not authorized to perform this action.');
        }
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    public function actionCreate()
    {
        $model = new Students;

        if (isset($_POST['Students'])) {
            $model->attributes = $_POST['Students'];

            $ruleEngine = new RuleEngine();
            $ruleEngine->addRule(new MaxStudentsInCourseRule());

            if ($ruleEngine->applyRules($model) && $model->save()) {
                $this->redirect(array('view','id'=>$model->id));
            }
        }

        $courses = CHtml::listData(Course::model()->findAll(), 'course_id', 'course_name');

        $this->render('create',array(
            'model'=>$model,
            'courses' => $courses,
        ));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['Students'])) {
            $model->attributes = $_POST['Students'];

            $ruleEngine = new RuleEngine();
            $ruleEngine->addRule(new MaxStudentsInCourseRule());

            if ($ruleEngine->applyRules($model) && $model->save()) {
                $this->redirect(array('view','id'=>$model->id));
            }
        }

        $courses = CHtml::listData(Course::model()->findAll(), 'course_id', 'course_name');

        $this->render('update',array(
            'model'=>$model,
            'courses' => $courses,
        ));
    }

    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        if (!isset($_GET['ajax'])) {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Students');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Students('search');
        $model->unsetAttributes();

        if (isset($_GET['Students'])) {
            $model->attributes = $_GET['Students'];
        }

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    public function loadModel($id)
    {
        $model = Students::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404,'The requested page does not exist.');
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'students-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateReport()
    {
        $model = new Students;
        $reportData = $model->getReportData();

        $this->render('report', array(
            'reportData' => $reportData,
        ));
    }

    public function actionDownloadReport()
    {
        $model = new Students;
        $reportData = $model->getReportData();

        Yii::import('application.extensions.tcpdf.TCPDF');

        $pdf = new TCPDF();

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Student Report');
        $pdf->SetSubject('Student Report');

        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);

        $html = '<h1>Student Report</h1>';
        $html .= '<table border="1" cellpadding="4">';
        $html .= '<tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                  </tr>';

        foreach ($reportData as $student) {
            $html .= '<tr>
                        <td>' . CHtml::encode($student->id) . '</td>
                        <td>' . CHtml::encode($student->name) . '</td>
                        <td>' . CHtml::encode($student->email) . '</td>
                        <td>' . CHtml::encode($student->course_id) . '</td>
                      </tr>';
        }

        $html .= '</table>';

        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->Output('student_report.pdf', 'D');
        Yii::app()->end();
    }
	public function actionSetDarkMode()
{
    if (isset($_POST['darkMode'])) {
        $isDarkMode = $_POST['darkMode'] === 'true';
        Yii::app()->user->setState('darkMode', $isDarkMode);
    }
    Yii::app()->end();
}

}
