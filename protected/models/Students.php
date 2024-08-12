<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $course_id
 */
class Students extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, course_id', 'required'),
			array('course_id', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>100),
			array('email', 'email'), // Ensure the email is valid
            array('email', 'unique'), // Ensure the email is unique
			array('name', 'match', 'pattern' => '/^[A-Za-z\s]+$/', 'message' => 'Name can only contain alphabetic characters and spaces.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, course_id', 'safe', 'on'=>'search'),
		);
	}

	public function validateName($attribute, $params)
    {
        if (!preg_match('/^[a-zA-Z\s]+$/', $this->$attribute)) {
            $this->addError($attribute, 'Name can only contain alphabetic characters and spaces.');
        }
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'course_id' => 'Course ID',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('course_id',$this->course_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Students the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getReportData()
    {
        // Example query to fetch data for the report
        $criteria = new CDbCriteria();
        $criteria->select = 'id, name, email, course_id';
        $criteria->with = array('course'); // Include related course data
        $criteria->order = 'name ASC'; // Sort by name, for example

        return $this->findAll($criteria);
    }
}
