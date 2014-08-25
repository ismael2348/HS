<?php

/**
 * This is the model class for table "articulos".
 *
 * The followings are the available columns in table 'articulos':
 * @property integer $id
 * @property integer $id_cat
 * @property string $nombre
 * @property string $marca
 * @property string $modelo
 * @property string $medida
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property ArtLocalizacion[] $artLocalizacions
 * @property ArtStock[] $artStocks
 * @property ArtCategorias $idCat
 */
class Articulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cat, nombre, marca, descripcion', 'required'),
			array('id_cat', 'numerical', 'integerOnly'=>true),
			array('nombre, marca, modelo, medida', 'length', 'max'=>20),
			array('descripcion', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_cat, nombre, marca, modelo, medida, descripcion', 'safe', 'on'=>'search'),
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
			'artLocalizacions' => array(self::HAS_MANY, 'ArtLocalizacion', 'id_art'),
			'artStocks' => array(self::HAS_MANY, 'ArtStock', 'id_art'),
			'idCat' => array(self::BELONGS_TO, 'ArtCategorias', 'id_cat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_cat' => 'Id Cat',
			'nombre' => 'Nombre',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'medida' => 'Medida',
			'descripcion' => 'Descripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_cat',$this->id_cat);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('medida',$this->medida,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articulos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
