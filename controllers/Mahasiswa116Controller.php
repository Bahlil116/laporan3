<?php

namespace app\controllers;

use app\models\Mahasiswa116;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa116Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa116::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mahasiswa116;
        $mhs->nim = '60200121116';
        $mhs->nama = 'deril';
        $mhs->kelas = 'A';
        $mhs->status = 'baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }

    }

    public function actionUpdate($id)
    {
        $mhs =Mahasiswa116::findOne(['id' => $id]);
        if ($mhs !== null){
            $mhs->kelas = 'A';
            $mhs->status ='Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa116::findOne(['id' => $id]);
        if ($mhs->delete()){
            Yii::$app->session->setFlash('danger', 'Data terhapus');
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
    
        $mhs = Mahasiswa116::findOne($id);
        return $this->render('view',['mhs' => $mhs]);
    }



}
