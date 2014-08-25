<?php

/**
 * This is the model class for table "art_localizacion".
 *
 * The followings are the available columns in table 'art_localizacion':
 * @property integer $id
 * @property integer $id_art
 * @property integer $id_area
 * @property integer $id_persona
 * @property integer $cantidad
 * @property string $fecha_ingreso
 *
 * The followings are the available model relations:
 * @property Articulos $idArt
 * @property Areas $idArea
 * @property Personas $idPersona
 */
class ArtLocalizacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'art_localizacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_art, id_area, id_persona, cantidad, fecha_ingreso', 'required'),
			array('id_art, id_area, id_persona, cantidad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_art, id_area, id_persona, cantidad, fecha_ingreso', 'safe', 'on'=>'search'),
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
			'idArt' => array(self::BELONGS_TO, 'Articulos', 'id_art'),
			'idArea' => array(self::BELONGS_TO, 'Areas', 'id_area'),
			'idPersona' => array(self::BELONGS_TO, 'Personas', 'id_persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_art' => 'Id Art',
			'id_area' => 'Id Area',
			'id_persona' => 'Id Persona',
			'cantidad' => 'Cantidad',
			'fecha_ingreso' => 'Fecha Ingreso',
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
		$criteria->compare('id_art',$this->id_art);
		$criteria->compare('id_area',$this->id_area);
		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArtLocalizacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
