<?php

/**
 * This is the model class for table "thn_ajar".
 *
 * The followings are the available columns in table 'thn_ajar':
 * @property integer $id
 * @property string $tahun_ajaran
 * @property string $tanggal_awal_pend
 * @property string $tanggal_akhir_pend
 * @property integer $quota
 *
 * The followings are the available model relations:
 * @property Calon[] $calons
 */
class ThnAjar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'thn_ajar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tahun_ajaran, tanggal_awal_pend, tanggal_akhir_pend, quota', 'required'),
			array('quota', 'numerical', 'integerOnly'=>true),
			array('tahun_ajaran', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tahun_ajaran, tanggal_awal_pend, tanggal_akhir_pend, quota', 'safe', 'on'=>'search'),
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
			'calons' => array(self::HAS_MANY, 'Calon', 'thn_ajar_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tahun_ajaran' => 'Tahun Ajaran',
			'tanggal_awal_pend' => 'Tanggal Awal Pend',
			'tanggal_akhir_pend' => 'Tanggal Akhir Pend',
			'quota' => 'Quota',
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
		$criteria->compare('tahun_ajaran',$this->tahun_ajaran,true);
		$criteria->compare('tanggal_awal_pend',$this->tanggal_awal_pend,true);
		$criteria->compare('tanggal_akhir_pend',$this->tanggal_akhir_pend,true);
		$criteria->compare('quota',$this->quota);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ThnAjar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
