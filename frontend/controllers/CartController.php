<?php
namespace frontend\controllers;
use common\models\Product;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    public function actionFavorite()
    {
        $session = Yii::$app->session;
        $total = 0;
        if($favorites = Yii::$app->request->cookies->getValue('favorite')) {
            foreach ($favorites as $id => $quantity) {
                $product = Product::findOne($id);
                $total = $total + ($product->cost['price'] * $quantity);
                $session->set('cartTotal', $total);
            }
            $favorites = array_keys($favorites);
            $products = Product::find()->where(['in', 'id', $favorites])->all();

            return $this->render('favorites', compact('products', 'total'));
        }else {
            echo 'Cart is empty!';
        }
    }
}