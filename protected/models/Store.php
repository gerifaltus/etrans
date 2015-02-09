<?php

/**
 * This is the model class for table "{{store}}".
 *
 * The followings are the available columns in table '{{store}}':
 * @property integer $idstore
 * @property string $namestore
 * @property integer $hrsbday
 * @property integer $inihrsbday
 * @property integer $finhrsbday
 * @property string $status
 * @property integer $idtypestore
 * @property integer $idcomplex
 * @property string $address
 * @property string $colony
 * @property integer $cp
 * @property integer $idcountry
 * @property integer $idstate
 * @property integer $idcity
 * @property string $dimensions
 * @property string $tel
 * @property string $email
 *
 * The followings are the available model relations:
 * @property StoreTypestore $idtypestore0
 * @property StoreComplex $idcomplex0
 * @property StorePlataform[] $storePlataforms
 */
class Store extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Store the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{store}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('email, name_store, idtypestore, idcomplex, idcountry, idstate, idcity', 'required'),
            array('tel, hrsbday, inihrsbday, finhrsbday, idtypestore, idcomplex, cp, idcountry, idstate, idcity', 'numerical', 'integerOnly' => true),
            array('name_store, address, colony', 'length', 'max' => 45),
            array('long, width', 'match', 'pattern' => '/^([0-9]+)(\.){1}([0-9]+)*$/', 'message'=>'El {attribute} solo recibe numeros enteros o con decimales'), //valida numeros con decimales
            array('tel', 'length', 'max' => 13),
            array('long, width', 'length', 'max' => 10),
            array('cp', 'length', 'max' => 5),
            array('email', 'email', 'message'=>'El {attribute} ingresa es incorrecto'),
            array('email', 'unique', 'message'=>'El {attribute} ingresado ya existe en el sistema'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idstore, namestore, hrsbday, inihrsbday, finhrsbday, status, idtypestore, idcomplex, address, colony, cp, idcountry, idstate, idcity, tel, email, long, width', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'R_typestore' => array(self::BELONGS_TO, 'TypeStore', 'idtypestore'),
            'R_complex' => array(self::BELONGS_TO, 'Complex', 'idcomplex'),
            'R_plataform' => array(self::HAS_MANY, 'Plataform', 'idstore'),
            'R_country' => array(self::BELONGS_TO, 'Country', 'idcountry'),
            'R_state' => array(self::BELONGS_TO, 'State', 'idstate'),
            'R_city' => array(self::BELONGS_TO, 'City', 'idcity'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idstore' => 'Idstore',
            'name_store' => 'Almacén',
            'hrsbday' => 'Horas',
            'inihrsbday' => 'Incio',
            'finhrsbday' => 'Fin',
            'is_inactive' => 'Status',
            'idtypestore' => 'Idtypestore',
            'idcomplex' => 'Idcomplex',
            'address' => 'Calle y número',
            'colony' => 'Colonia',
            'cp' => 'C.P.',
            'idcountry' => 'Idcountry',
            'idstate' => 'Idstate',
            'idcity' => 'Idcity',
            'tel' => 'Tel',
            'email' => 'Email',
            'width' => 'Ancho',
            'long' => 'Alto',
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

        $criteria->compare('idstore', $this->idstore);
        $criteria->compare('name_store', $this->namestore, true);
        $criteria->compare('hrsbday', $this->hrsbday);
        $criteria->compare('inihrsbday', $this->inihrsbday);
        $criteria->compare('finhrsbday', $this->finhrsbday);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('idtypestore', $this->idtypestore);
        $criteria->compare('idcomplex', $this->idcomplex);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('colony', $this->colony, true);
        $criteria->compare('cp', $this->cp);
        $criteria->compare('idcountry', $this->idcountry);
        $criteria->compare('idstate', $this->idstate);
        $criteria->compare('idcity', $this->idcity);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('width', $this->width, true);
        $criteria->compare('long', $this->long, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getAllStore() {
        $criteria = new CDbCriteria;
        $criteria->select = 't.idstore, t.name_store, t.address, t.colony, t.cp, t.width, t.long';
        $criteria->with = array(
                                'R_complex'=>array('together'=>true, 'select'=>array("CONCAT_WS(' - ',name_short, name_complex) AS name_complex")),
                                'R_typestore'=>array('together'=>true, 'select'=>array('name_typestore')),
                                'R_country'=>array('together'=>true, 'select'=>array('name_country')),
                                'R_state'=>array('together'=>true, 'select'=>array('name_state')),
                                'R_city'=>array('together'=>true, 'select'=>array('name_city')),
                                );
        $criteria->condition = 't.is_inactive=:inactive';
        $criteria->params = array(':inactive' => 0);
        return Self::model()->findAll($criteria);
    }

}
