<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $products backend\controllers\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <pre>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email:email',
            'created_at',
            'total',
            'address',
            'status',
        ],
    ]) ?>
        <h3>Order Products</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                </tr>
            </thead>
        <?php foreach ($products as $product) :?>
            <tr>
                <td><?= $product->id?></td>
                <td><?= $product->title?></td>
                <td><?= $product->price?></td>
                <td><a href="<?= Url::toRoute(['/products/view/', 'id' => $product->id])?>"><button class="btn">View</button></a></td>
            </tr>
        <?php endforeach;?>
        </table>
        <a href="<?= Url::toRoute(['/order/download/', 'id'=> $model->id])?>" download><button class="button button-success">Download PDF</button></a>

</div>

