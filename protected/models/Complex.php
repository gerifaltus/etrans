<?php

/**
 * This is the model class for table "{{store_complex}}".
 *
 * The followings are the available columns in table '{{store_complex}}':
 * @property integer $idcomplex
 * @property string $name
 * @property string $name_short
 * @property string $date_created
 * @property string $iduser
 */
class Complex extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Complex the static model class
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
		return '{{store_complex}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, name_short, iduser', 'required'),
			array('name', 'length', 'max'=>25),
			array('name_short', 'length', 'max'=>5),
			array('date_created, iduser', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcomplex, name, name_short, date_created, iduser', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcomplex' => 'Idcomplex',
			'name' => 'Name',
			'name_short' => 'Name Short',
			'date_created' => 'Date Created',
			'iduser' => 'Iduser',
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

		$criteria->compare('idcomplex',$this->idcomplex);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('name_short',$this->name_short,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('iduser',$this->iduser,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}