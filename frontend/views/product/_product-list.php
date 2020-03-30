<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="col-sm-12 col-md-4 col-lg-3 ftco-animate">
    <div class="product">
        <a href="<?= $model->productPage;?>" class="img-prod"><img class="img-fluid" src="<?= $model->img?>">
        <?php if ($model->discount != 0) :?>
            <span class="status"><?= $model->discount?>%</span>
        <?php endif;?>
            <div class="overlay"></div>
        </a>
        <div class="text py-3 px-3">
            <h3 class="text-hidden"><a href="#"><?= $model->title?></a></h3>
            <div class="d-flex">
                <div class="pricing">
                    <p class="price">
                        <span class="price-sale">$<?= $model->cost['price'];?></span>
                        <span style='text-decoration: line-through; color: #adadad;' class='mr-2 price-dc'><?= $model->cost['old_price'];?></span>
                    </p>
                </div>
                <div class="rating">
                </div>
            </div>
            <p class="bottom-area d-flex px-3">
                <a class="add_cart add-to-cart text-center py-2 mr-1" data-id="<?= $model->id?>">
                    <?= Html::hiddenInput(Yii :: $app->getRequest()->csrfParam, Yii :: $app->getRequest()->getCsrfToken(), []); ?>
                    <span>Add to cart <i class="ion-ios-add ml-1"></i></span>
                </a>
            </p>
        </div>
    </div>
</div>
