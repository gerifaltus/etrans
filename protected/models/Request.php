<?php

/**
 * This is the model class for table "request".
 *
 * The followings are the available columns in table 'request':
 * @property integer $idrequest
 * @property string $norequest
 * @property integer $iduser
 * @property string $purchaseord
 * @property string $datetime
 * @property integer $storemode
 * @property integer $boxes
 * @property integer $pallets
 * @property string $invoice
 * @property string $status
 * @property string $comments
 * @property string $cveconfirmation
 * @property integer $idvehicle
 *
 * The followings are the available model relations:
 * @property User $iduser0
 * @property Vehicle $idvehicle0
 */
class Request extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Request the static model class
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
		return 'request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('norequest, iduser, purchaseord, storemode, invoice, status, cveconfirmation, idvehicle', 'required'),
			array('iduser, storemode, boxes, pallets, idvehicle', 'numerical', 'integerOnly'=>true),
			array('norequest', 'length', 'max'=>12),
			array('purchaseord, cveconfirmation', 'length', 'max'=>10),
			array('invoice', 'length', 'max'=>15),
			array('status', 'length', 'max'=>45),
			array('comments', 'length', 'max'=>100),
			array('datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idrequest, norequest, iduser, purchaseord, datetime, storemode, boxes, pallets, invoice, status, comments, cveconfirmation, idvehicle', 'safe', 'on'=>'search'),
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
			'ruser' => array(self::BELONGS_TO, 'User', 'iduser'),
			'rvehicle' => array(self::BELONGS_TO, 'Vehicle', 'idvehicle'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idrequest' => 'Idrequest',
			'norequest' => 'Norequest',
			'iduser' => 'Iduser',
			'purchaseord' => 'Purchaseord',
			'datetime' => 'Datetime',
			'storemode' => 'Storemode',
			'boxes' => 'Boxes',
			'pallets' => 'Pallets',
			'invoice' => 'Invoice',
			'status' => 'Status',
			'comments' => 'Comments',
			'cveconfirmation' => 'Cveconfirmation',
			'idvehicle' => 'Idvehicle',
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

		$criteria->compare('idrequest',$this->idrequest);
		$criteria->compare('norequest',$this->norequest,true);
		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('purchaseord',$this->purchaseord,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('storemode',$this->storemode);
		$criteria->compare('boxes',$this->boxes);
		$criteria->compare('pallets',$this->pallets);
		$criteria->compare('invoice',$this->invoice,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('cveconfirmation',$this->cveconfirmation,true);
		$criteria->compare('idvehicle',$this->idvehicle);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}