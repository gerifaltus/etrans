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
    
    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->date_created = date('Y-m-d H:i:s',time());
                $this->iduser = Yii::app()->user->username;
            }else{
                $this->date_created = date('Y-m-d H:i:s',time());
            }
            
            return true;
            
        }else{
            
            return false;
        }
        
    }
    
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Complex the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{store_complex}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, name_short,', 'required', 'message' => 'El campo {attribute} es requerido'),
            array('name', 'length', 'max' => 20, 'message' => 'El {attribute} debe contener menos de 20 caracteres.'),
            array('name_short', 'length', 'max' => 5, 'message' => 'El campo {attribute} debe contener 5 caracteres'),
            //array('date_created', 'date', 'format' => 'yyyyMMdd H:m:s'),
            //array('iduser', 'numerical', 'integerOnly'=>true,'message'=>'El {attribute} debe ser númerico'), 
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            //array('idcomplex, name, name_short, date_created, iduser', 'safe', 'on'=>'search'),
            array('name, name_short', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idcomplex' => 'idcomplex',
            'name' => 'Nombre',
            'name_short' => 'Clave',
            'date_created' => 'Fecha Creación',
            'iduser' => 'Creado por',
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

        $criteria->compare('idcomplex', $this->idcomplex);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('name_short', $this->name_short, true);
        //$criteria->compare('date_created',$this->date_created,true);
        //$criteria->compare('iduser',$this->iduser,true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    
    public function getAllComplex()
    {
        $criteria=new CDbCriteria;
        $criteria->select='idcomplex, name, name_short, date_created, iduser'; 
        $criteria->condition='is_active=:active';
        $criteria->params=array(':active'=>1);
        return Complex::model()->findAll($criteria);
    }

}
