<?php
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $products frontend\controllers\SiteController */

?>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4"><a href="<?=Url::toRoute('/product/products/')?>">Products</a></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= $this->render('_limited-list-products', ['products' => $products]);?>
        </div>
    </div>
</section>
