<?php

class MaxStudentsInCourseRule implements RuleInterface
{
    protected $maxStudents;
    protected $errorMessage;

    public function __construct($maxStudents = 5)
    {
        $this->maxStudents = $maxStudents;
    }

    public function apply($model)
    {
        $studentsInCourse = Students::model()->countByAttributes(array('course_id' => $model->course_id));
        if ($studentsInCourse >= $this->maxStudents) {
            $this->errorMessage = 'This course already has the maximum number of students.';
            return false;
        }
        return true;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}
