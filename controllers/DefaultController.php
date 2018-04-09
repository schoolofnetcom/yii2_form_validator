<?php

namespace app\controllers;

use app\models\forms\ProdutoForm;
use yii\helpers\VarDumper;
use yii\web\Response;
use yii\widgets\ActiveForm;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $request = \Yii::$app->request;

        if ($request->isPost) {
            $nome = $request->post('nome');
            $cidade = $request->post('cidade');

            return $this->render('mostrar-dados', [
                'nome' => $nome,
                'cidade' => $cidade
            ]);
        }

        return $this->render('index');
    }

    public function actionProduto()
    {
        $form = new ProdutoForm();

//        $form->nome = "Notebook";
//        $form->email = "teste@email.com";
//        $form->preco = 1800.00;
//        $form->url = "http://schoolofnet.com";
//        $form->descricao = "Notebook bem bacana e legal";
//        $form->status = ProdutoForm::PRODUTO_STATUS_ATIVO;

//        if ($form->load(\Yii::$app->request->post()) && $form->validate()) {
//
//        } else {
//
//            return $this->render('produto', [
//                'model' => $form
//            ]);
//        }


        if (\Yii::$app->request->isAjax && $form->load(\Yii::$app->request->post())) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            if ($form->validate()) {
                return ['status' => 'success'];
            } else {
                return ActiveForm::validate($form);
            }
        } else {
            return $this->render('produto', [
                'model' => $form
            ]);
        }

    }

}
