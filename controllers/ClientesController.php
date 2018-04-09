<?php

namespace app\controllers;

use app\models\Clientes;

class ClientesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Clientes();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
        return $this->redirect('/');
    }

        return $this->render('index', [
            'model' => $model
        ]);
    }

}
