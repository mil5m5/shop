<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $topProducts frontend\controllers\SiteController */

?>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Best Sellers</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= $this->render('_limited-list-products', ['products' => $topProducts]);?>
        </div>
    </div>
</section>
