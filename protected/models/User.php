<?php

/**
 * This is the model class for table '{{user}}'.
 *
 * The followings are the available columns in table 'user':
 * @property integer $iduser
 * @property integer $idcompany
 * @property string $user
 * @property string $password
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property integer $idusertype
 * @property integer $idprofile
 * @property string $active
 *
 * The followings are the available model relations:
 * @property Company $idcompany0
 * @property Profile $idprofile0
 * @property Usertype $idusertype0
 */
class User extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        //return 'user';
        return '{{user}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idcompany, username, idusertype, idprofile', 'required'),
            array('idcompany, idusertype, idprofile', 'numerical', 'integerOnly' => true),
            array('username', 'length', 'max' => 10),
            array('password, password2', 'length', 'max' => 50),
            array('name, lastname, email, flag_resetpwd', 'length', 'max' => 45),
            array('active, resetpwd', 'length', 'max' => 1),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('iduser, idcompany, username, password, name, lastname, email, idusertype, idprofile, active', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        //traduccion - un usuario esta ligado a una compañia: un usuario pertenece a una compañia
        return array(
            'Rcompany' => array(self::BELONGS_TO, 'Company', 'idcompany'),
            'idprofile0' => array(self::BELONGS_TO, 'Profile', 'idprofile'),
            'idusertype0' => array(self::BELONGS_TO, 'Usertype', 'idusertype'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'iduser' => 'Iduser',
            'idcompany' => 'Idcompany',
            'username' => 'Username',
            'password' => 'Password',
            'password2' => 'Password2',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'idusertype' => 'Idusertype',
            'idprofile' => 'Idprofile',
            'active' => 'Active',
            'flag_resetpwd' => 'HashPwd',
            'resetpwd' => 'ResetPwd',
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

        $criteria->compare('iduser', $this->iduser);
        $criteria->compare('idcompany', $this->idcompany);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('lastname', $this->lastname, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('idusertype', $this->idusertype);
        $criteria->compare('idprofile', $this->idprofile);
        $criteria->compare('active', $this->active, true);
        $criteria->compare('flag_resetpwd', $this->flag_resetpwd, true);
        $criteria->compare('resetpwd', $this->resetpwd, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getUserList() {
       
        $criteria = new CDbCriteria;
        $criteria->select = array('username', 'name', 'lastname', 'email', "IF (active = 1, 'Activo', 'Inactivo') As active");
        $criteria->with = array(
            'Rcompany' => array(
                'together'=>true,
                'select' => array('businessname'),
            ),
        );
               
        
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
        
    }
    
    public function getUserPwd($email)
    {
        $criteria=new CDbCriteria;
        $criteria->select='iduser, username, name, lastname, email, flag_resetpwd, resetpwd';  
        $criteria->condition='email=:email';
        $criteria->params=array(':email'=>$email);
        return User::model()->find($criteria);
    }

}
