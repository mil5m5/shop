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
        $session = Yii::$app->session;
        $cookies = Yii::$app->response->cookies;
        if ($total = $session->get('total')) {
            $model = new Order();
            $favorites = Yii::$app->request->cookies->getValue('favorite');
            if ($model->load(Yii::$app->request->post())) {
                $model->status = 0;
                $model->total = $total;
                if ($model->save()) {
                    foreach ($favorites as $key => $value) {
                        $post = Product::findOne($key);
                        $post->updateCounters(['sold' => 1]);
                        $order_products = new OrderProduct();
                        $order_products->order_id = $model->id;
                        $order_products->product_id = $key;
                        $order_products->quantity = $value;
                        if( $order_products->save()) {
                            $session->remove('total');
                            $cookies->remove('favorite');
                        }
                        return $this->redirect('/site/index/');
                    }
                }
            }
            return $this->render('create', compact('model'));
        }else {
            return $this->redirect('/site/index/');
        }
    }
}