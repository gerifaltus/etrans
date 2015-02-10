<?php

/**
 * This is the model class for table "{{storage_layout}}".
 *
 * The followings are the available columns in table '{{storage_layout}}':
 * @property integer $idstorage_layout
 * @property integer $idstorage_units
 * @property string $long_unit
 * @property string $width_unit
 * @property integer $qty_plataform
 * @property integer $qty_unity
 * @property integer $parentid
 * @property integer $divlong
 * @property integer $divwidth
 * @property integer $idstore
 * @property string $type_rack
 * @property string $width_rack
 * @property string $long_rack
 * @property string $deep_rack
 *
 * The followings are the available model relations:
 * @property StorageUnits $idstorageUnits
 * @property Store $idstore0
 */
class StorageLayout extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StorageLayout the static model class
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
		return '{{storage_layout}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idstorage_units, qty_plataform, qty_unity, parentid, divlong, divwidth, idstore', 'numerical', 'integerOnly'=>true),
			array('long_unit, width_unit, width_rack, long_rack, deep_rack', 'length', 'max'=>6),
			array('type_rack', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idstorage_layout, idstorage_units, long_unit, width_unit, qty_plataform, qty_unity, parentid, divlong, divwidth, idstore, type_rack, width_rack, long_rack, deep_rack', 'safe', 'on'=>'search'),
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
			'R_storageUnits' => array(self::BELONGS_TO, 'StorageUnits', 'idstorage_units'),
			'R_store' => array(self::HAS_ONE, 'Store', 'idstore'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idstorage_layout' => 'Idstorage Layout',
			'idstorage_units' => 'Idstorage Units',
			'long_unit' => 'Long Unit',
			'width_unit' => 'Width Unit',
			'qty_plataform' => 'Qty Plataform',
			'qty_unity' => 'Qty Unity',
			'parentid' => 'Parentid',
			'divlong' => 'Divlong',
			'divwidth' => 'Divwidth',
			'idstore' => 'Idstore',
			'type_rack' => 'Type Rack',
			'width_rack' => 'Width Rack',
			'long_rack' => 'Long Rack',
			'deep_rack' => 'Deep Rack',
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

		$criteria->compare('idstorage_layout',$this->idstorage_layout);
		$criteria->compare('idstorage_units',$this->idstorage_units);
		$criteria->compare('long_unit',$this->long_unit,true);
		$criteria->compare('width_unit',$this->width_unit,true);
		$criteria->compare('qty_plataform',$this->qty_plataform);
		$criteria->compare('qty_unity',$this->qty_unity);
		$criteria->compare('parentid',$this->parentid);
		$criteria->compare('divlong',$this->divlong);
		$criteria->compare('divwidth',$this->divwidth);
		$criteria->compare('idstore',$this->idstore);
		$criteria->compare('type_rack',$this->type_rack,true);
		$criteria->compare('width_rack',$this->width_rack,true);
		$criteria->compare('long_rack',$this->long_rack,true);
		$criteria->compare('deep_rack',$this->deep_rack,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}