<?php
namespace frontend\controllers;
use common\models\Category;
use common\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ProductController extends Controller
{
    public function getProductsLimitedQuantities($limit)
    {
        return Product::find()->orderBy(['id' => SORT_DESC])->limit($limit)->all();
    }

    public function getTopProductsLimitedQuantities($limit)
    {
        return Product::find()->orderBy(['sold' => SORT_DESC])->limit($limit)->all();
    }

    public function actionAssessment($assessment, $id)
    {
        $post = Product::findOne($id);
        $post->updateCounters(['rating' => $assessment]);
        $post->updateCounters(['number_of_voters' => 1]);
        return true;
    }

    public function actionProduct($id)
    {
        $product = Product::findOne($id);
        return $this->render('product', compact('product'));
    }

    public function actionProducts($id = '')
    {
        if($id == '') {
            $products = Product::find();
        }else {
            $model = Category::findOne($id);
            $products = $model->getProducts();
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $products,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('products', compact('dataProvider'));
    }
}