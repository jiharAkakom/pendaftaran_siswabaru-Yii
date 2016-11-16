<?php
class Komponen{
public $id;
public $tahunAjaran;
public $tanggalAwalPend;
public $tanggalAkhirPend;
public $quota;

public function getThnJarId(){
  $tglSkr = date('Y-m-d');
  $row = Yii::app()->db->createCommand()
  ->select('id')
  ->from('thn_ajar')
  ->where('tanggal_awal_pend<=:tgl_aw and tanggal_akhir_pend>=:tgl_ak',
  array(':tgl_aw'=>$tglSkr,':tgl_ak'=>$tglSkr))
  ->queryScalar();
  return $row;
}
public function getQuota(){
  $tglSkr = date('Y-m-d');
  $row = Yii::app()->db->createCommand()
  ->select('quota')
  ->from('thn_ajar')
  ->where('tanggal_awal_pend<=:tgl_aw and tanggal_akhir_pend>=:tgl_ak',
  array(':tgl_aw'=>$tglSkr,':tgl_ak'=>$tglSkr))
  ->queryScalar();
  return $row;
  }
}
