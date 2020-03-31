<?php
namespace frontend\controllers;

use common\models\Order;
use common\models\OrderProduct;
use common\models\Product;
use yii\web\Controller;
use Yii;

class OrderController extends Controller
{
    public function actionCreate()
    {
        $total = 0;
        $session = Yii::$app->session;
        $cookies = Yii::$app->response->cookies;
        if ($favorites = Yii::$app->request->cookies->getValue('favorite')) {
            $model = new Order();
            if ($model->load(Yii::$app->request->post())) {
                $model->status = 0;
                $model->total = $session->get('cartTotal');;
                if ($model->save()) {
                    foreach ($favorites as $key => $value) {
                        $post = Product::findOne($key);
                        $post->updateCounters(['sold' => 1]);
                        $orderProducts = new OrderProduct();
                        $orderProducts->order_id = $model->id;
                        $orderProducts->product_id = $key;
                        $orderProducts->quantity = $value;
                        if( $orderProducts->save()) {
                        }
                    }
                }
            }
            return $this->render('create', compact('model'));
        }else {
            return $this->redirect('/site/index/');
        }
    }
}