<?php
namespace frontend\controllers;
use \yii\web\Cookie;
use yii\web\Controller;
use Yii;

class CheckController extends Controller
{
    public function actionCookie()
    {
        $id = \Yii::$app->request->post('id');
        $favorites = \Yii::$app->request->cookies->getValue('favorite');
        print_r($favorites);
        if (!is_array($favorites)) {
            $favorites = [];
        }
        if (!in_array($id, $favorites)) {
            $favorites[$id] = 1;
        }
        $cookie = new Cookie([
           'name' => 'favorite',
           'value' => $favorites,
        ]);
        if (Yii::$app->response->cookies->add($cookie)) {
           return true;
        }
    }

    public function actionQuant($id, $quantity)
    {
        $quant = \Yii::$app->request->cookies->getValue('favorite');
        if (!is_array($quant)) {
            $quant = [];
        }
        $quant[$id] = $quantity;

        print_r(\Yii::$app->request->cookies->getValue('favorite'));
        $cookie = new Cookie([
            'name' => 'favorite',
            'value' => $quant,
        ]);
        \Yii::$app->response->cookies->add($cookie);
    }

}