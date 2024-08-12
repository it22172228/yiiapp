<?php

/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property integer $course_id
 * @property string $course_name
 * @property string $discription
 */
class Course extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_id, course_name, discription', 'required'),
			array('course_id', 'numerical', 'integerOnly'=>true),
			array('course_name', 'length', 'max'=>100),
			array('discription', 'length', 'max'=>1000),
			array('course_name', 'unique'), // Ensure the email is unique
			array('course_id', 'unique'), // Ensure the email is unique
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('course_id, course_name, discription', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'students' => array(self::HAS_MANY, 'Students', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_id' => 'Course ID',
			'course_name' => 'Course Name',
			'discription' => 'Discription',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('course_name',$this->course_name,true);
		$criteria->compare('discription',$this->discription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Course the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getReportData()
    {
        // Example query to fetch data for the report
        $criteria = new CDbCriteria();
        $criteria->select = 'course_id, course_name, discription';
        $criteria->with = array('students'); // Include related course data
        $criteria->order = 'name ASC'; // Sort by name, for example

        return $this->findAll($criteria);
    }
}
	

