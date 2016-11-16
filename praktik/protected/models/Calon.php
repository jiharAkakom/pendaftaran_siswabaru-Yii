<?php

/**
 * This is the model class for table "calon".
 *
 * The followings are the available columns in table 'calon':
 * @property integer $no_pend
 * @property string $nama
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $asal_sekolah
 * @property double $nilai_ind
 * @property double $nilai_ing
 * @property double $nilai_mtk
 * @property double $nilai_ipa
 * @property double $prestasi
 * @property integer $thn_ajar_id
 * @property integer $user_id
 * @property string $tanggal
 * @property integer $status
 * @property integer $status_diterima
 *
 * The followings are the available model relations:
 * @property User $user
 * @property ThnAjar $thnAjar
 */
class Calon extends CActiveRecord
{
	var $nilMaksimal;
	var $nilMinimal;

	public function nilaiMiMax($thnId){
		$con=Yii::app()->db;
		$sql="SELECT min(nilai_ind+nilai_ing+nilai_mtk+nilai_ipa+prestasi) as minimal,
								 max(nilai_ind+nilai_ing+nilai_mtk+nilai_ipa+prestasi) as maksimal
							 FROM calon
						 	 WHERE status=1 ";
							 $hs = $con->createCommand($sql)->queryAll();
							 $quota = Komponen::getQuota();
							 foreach ($hs as $hasil) {
							 	$this->nilMinimal = $hasil['minimal'];
								$this->nilMaksimal = $hasil['maksimal'];
							 }
							 return $this;
	}
	public function ranking($thnId){
		$con=Yii::app()->db;
		$sql="SELECT * FROM calon WHERE status=1
					ORDER BY nilai_ind+nilai_ing+nilai_mtk+nilai_ipa DESC,
					nilai_ind DESC, nilai_ing DESC, nilai_mtk DESC, nilai_ipa DESC";
		$hs = $con->createCommand($sql)->queryAll();
		$quota = Komponen::getQuota();
		$i=0;
		foreach ($hs as $hasil) {
			$i++;
			if($i<$quota){
				$con->createCommand("UPDATE calon SET status_diterima=1 WHERE calon.no_pend=".$hasil['no_pend'])->execute();
			}else{
				$con->createCommand("UPDATE calon SET status_diterima=0 WHERE calon.no_pend=".$hasil['no_pend'])->execute();
			}
		}
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'calon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, jenis_kelamin, tanggal_lahir, asal_sekolah, nilai_ind, nilai_ing, nilai_mtk, nilai_ipa', 'required'),
			array('thn_ajar_id, user_id, status, status_diterima', 'numerical', 'integerOnly'=>true),
			array('nilai_ind, nilai_ing, nilai_mtk, nilai_ipa, prestasi', 'numerical'),
			array('nama, alamat, asal_sekolah', 'length', 'max'=>50),
			array('jenis_kelamin', 'length', 'max'=>9),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_pend, nama, alamat, jenis_kelamin, tanggal_lahir, asal_sekolah, nilai_ind, nilai_ing, nilai_mtk, nilai_ipa, prestasi, thn_ajar_id, user_id, tanggal, status, status_diterima', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'thnAjar' => array(self::BELONGS_TO, 'ThnAjar', 'thn_ajar_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_pend' => 'No Pend',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tanggal_lahir' => 'Tanggal Lahir',
			'asal_sekolah' => 'Asal Sekolah',
			'nilai_ind' => 'Nilai Ind',
			'nilai_ing' => 'Nilai Ing',
			'nilai_mtk' => 'Nilai Mtk',
			'nilai_ipa' => 'Nilai Ipa',
			'prestasi' => 'Prestasi',
			'thn_ajar_id' => 'Thn Ajar',
			'user_id' => 'User',
			'tanggal' => 'Tanggal',
			'status' => 'Status',
			'status_diterima' => 'Status Diterima',
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

		$criteria->compare('no_pend',$this->no_pend);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('asal_sekolah',$this->asal_sekolah,true);
		$criteria->compare('nilai_ind',$this->nilai_ind);
		$criteria->compare('nilai_ing',$this->nilai_ing);
		$criteria->compare('nilai_mtk',$this->nilai_mtk);
		$criteria->compare('nilai_ipa',$this->nilai_ipa);
		$criteria->compare('prestasi',$this->prestasi);
		$criteria->compare('thn_ajar_id',$this->thn_ajar_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('status_diterima',$this->status_diterima);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Calon the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function total(){
		return $this->nilai_ipa + $this->nilai_ind + $this->nilai_mtk + $this->nilai_ing + $this->prestasi;
	}
	protected function beforeSave(){
		if (parent::beforeSave()){
			if($this->isNewRecord){
				$this->tanggal= date ('Y-m-d');
				$this->thn_ajar_id = Komponen::getThnJarId();

			}else {
				$this->tanggal=date('Y-m-d');
			}
			return true;
		}else {
			return false;
		}
	}
}
