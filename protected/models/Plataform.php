<?php

/**
 * This is the model class for table "{{store_plataform}}".
 *
 * The followings are the available columns in table '{{store_plataform}}':
 * @property integer $idplataform
 * @property integer $idstore
 * @property string $name_plataform
 * @property string $is_inactive
 *
 * The followings are the available model relations:
 * @property Store $idstore0
 */
class Plataform extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Plataform the static model class
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
		return '{{store_plataform}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idstore', 'required'),
			array('idstore', 'numerical', 'integerOnly'=>true),
			array('name_plataform', 'length', 'max'=>45),
			array('is_inactive', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idplataform, idstore, name_plataform, is_inactive', 'safe', 'on'=>'search'),
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
			'idstore0' => array(self::BELONGS_TO, 'Store', 'idstore'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idplataform' => 'Idplataform',
			'idstore' => 'Idstore',
			'name_plataform' => 'Name Plataform',
			'is_inactive' => 'Is Inactive',
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

		$criteria->compare('idplataform',$this->idplataform);
		$criteria->compare('idstore',$this->idstore);
		$criteria->compare('name_plataform',$this->name_plataform,true);
		$criteria->compare('is_inactive',$this->is_inactive,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}