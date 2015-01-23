<?php

/**
 * This is the model class for table "{{clients}}".
 *
 * The followings are the available columns in table '{{clients}}':
 * @property integer $idclient
 * @property string $address
 * @property string $rfc
 * @property string $businessname
 * @property string $tel
 * @property string $email
 * @property string $name_client
 */
class Clients extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clients the static model class
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
		return '{{clients}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('rfc, businessname, email, name_client', 'required', 'message' => 'El campo {attribute} es requerido'),
			array('address, businessname, name_client', 'length', 'max'=>45),
                        array('tel', 'numerical', 'integerOnly'=>true,'message'=>'El {attribute} debe ser númerico'),
			array('rfc, tel', 'length', 'max'=>20),
			//array('email', 'length', 'max'=>25),
                        array('email', 'email', 'message'=>'El {attribute} ingresa es incorrecto'),
                        array('email', 'unique', 'message'=>'El {attribute} ingresado ya existe en el sistema'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idclient, address, rfc, businessname, tel, email, name_client', 'safe', 'on'=>'search'),
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
			'idclient' => 'Idclient',
			'address' => 'Domicilio',
			'rfc' => 'RFC',
			'businessname' => 'Razón Social',
			'tel' => 'Teléfono',
			'email' => 'Email',
			'name_client' => 'Nombre Comercial',
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

		$criteria->compare('idclient',$this->idclient);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('businessname',$this->businessname,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name_client',$this->name_client,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}