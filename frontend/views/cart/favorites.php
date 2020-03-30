<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $products frontend\controllers\SiteControllere */
/* @var $total frontend\controllers\SiteControllere */
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="../../../backend/web/index.php">Home</a></span> <span>Cart</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product) :?>
                            <tr class="text-center" id="<?=$product->id?>">
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod"><div class="img" style="background-image:url(<?= Url::to('@web/uploads/products/') . $product->image;?>);"></div></td>

                                <td class="product-name">
                                    <h3><a href="<?= $product->productPage?>"><?= $product->title?></a></h3>
                                    <p><?= $product->description?></p>
                                </td>
                                <td class="price">
                                    <span style='text-decoration: line-through; color: #adadad;' class='mr-2 price-dc'><?= $product->cost['old_price'];?></span>
                                    <?=  $product->cost['price']?> $
                                </td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="<?=$product->id?>" data-url="<?= Url::to('check/quant/');?>" class="quantit form-control input-number" value="<?= $product->quantit?>" min="1" max="100">
                                        <?= Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []); ?>
                                    </div>
                                </td>

                                <td class="total"><?= $product->sumTotal?></td>
                            </tr><!-- END TR-->
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span class="total"><?= $total?></span>
                    </p>
                </div>
                <p class="text-center">
                    <a href="<?= Url::toRoute('order/create/');?>">
                        <button class="btn btn-primary py-3 px-4">
                            Proceed to Checkout
                        </button>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
