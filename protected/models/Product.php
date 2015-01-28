<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property integer $idproduct
 * @property string $datetime
 * @property integer $idclient
 * @property string $code
 * @property string $item
 * @property integer $idcategory
 * @property string $description
 * @property string $presentation
 * @property string $image
 * @property string $pu
 * @property string $pxc
 * @property string $expiration
 * @property integer $heigth
 * @property integer $depth
 * @property integer $width
 * @property integer $weight
 * @property integer $stowmax
 * @property integer $heigthpallet
 * @property integer $weightpallet
 *
 * The followings are the available model relations:
 * @property Clients $idclient0
 * @property ProductCategory $idcategory0
 */
class Product extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Product the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{product}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('datetime, idclient, code, item, idcategory, pu', 'required'),
            array('idclient, idcategory, heigth, depth, width, weight, stowmax, heigthpallet, weightpallet', 'numerical', 'integerOnly' => true),
            array('code, item', 'length', 'max' => 15),
            array('description', 'length', 'max' => 25),
            array('presentation, pxc', 'length', 'max' => 45),
            array('image', 'length', 'max' => 20),
            array('pu', 'length', 'max' => 6),
            array('expiration', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idproduct, datetime, idclient, code, item, idcategory, description, presentation, image, pu, pxc, expiration, heigth, depth, width, weight, stowmax, heigthpallet, weightpallet', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'R_idclient' => array(self::BELONGS_TO, 'Clients', 'idclient'),
            'R_idcategory' => array(self::BELONGS_TO, 'ProductCategory', 'idcategory'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idproduct' => 'Idproducto',
            'datetime' => 'Registrado',
            'idclient' => 'Proveedor',
            'code' => 'Código',
            'item' => 'Item',
            'idcategory' => 'Idcategory',
            'description' => 'Descripción',
            'presentation' => 'Presentación',
            'image' => 'Imagen',
            'pu' => 'PU',
            'pxc' => 'PxC',
            'expiration' => 'Expiration',
            'heigth' => 'Alto',
            'depth' => 'Profundidad',
            'width' => 'Ancho',
            'weight' => 'Peso',
            'stowmax' => 'Estiba Max',
            'heigthpallet' => 'Heigthpallet',
            'weightpallet' => 'Weightpallet',
            'is_inactive' => 'Inactivo',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('idproduct', $this->idproduct);
        $criteria->compare('datetime', $this->datetime, true);
        $criteria->compare('idclient', $this->idclient);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('item', $this->item, true);
        $criteria->compare('idcategory', $this->idcategory);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('presentation', $this->presentation, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('pu', $this->pu, true);
        $criteria->compare('pxc', $this->pxc, true);
        $criteria->compare('expiration', $this->expiration, true);
        $criteria->compare('heigth', $this->heigth);
        $criteria->compare('depth', $this->depth);
        $criteria->compare('width', $this->width);
        $criteria->compare('weight', $this->weight);
        $criteria->compare('stowmax', $this->stowmax);
        $criteria->compare('heigthpallet', $this->heigthpallet);
        $criteria->compare('weightpallet', $this->weightpallet);
        $criteria->compare('is_inactive', $this->is_inactive);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getAllProducts() {
        $criteria = new CDbCriteria;
        $criteria->select = 'idproduct, code, item, pu, pxc, description, presentation, category, cliente';
        $criteria->with = array('R_idcategory' => array('together' => true, 'select' => array('name_cat')),
                                'R_idclient' => array('together' => true, 'select' => array('name_client'))
                                );
        $criteria->condition = 'is_inactive=:inactive';
        $criteria->params = array(':inactive' => 0);
        return $this->findAll($criteria);
    }

}
