<?php

/**
 * This is the model class for table "{{state}}".
 *
 * The followings are the available columns in table '{{state}}':
 * @property integer $idstate
 * @property integer $idcountry
 * @property string $name_state
 *
 * The followings are the available model relations:
 * @property City[] $cities
 * @property Country $idcountry0
 */
class State extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return State the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{state}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcountry', 'required'),
			array('idcountry', 'numerical', 'integerOnly'=>true),
			array('name_state', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idstate, idcountry, name_state', 'safe', 'on'=>'search'),
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
			'cities' => array(self::HAS_MANY, 'City', 'idstate'),
			'idcountry0' => array(self::BELONGS_TO, 'Country', 'idcountry'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idstate' => 'Idstate',
			'idcountry' => 'Idcountry',
			'name_state' => 'Name State',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idstate',$this->idstate);
		$criteria->compare('idcountry',$this->idcountry);
		$criteria->compare('name_state',$this->name_state,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}