<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $product frontend\controllers\ProductController */

?>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="../../../backend/web/index.php">Home</a></span> <span class="mr-2"><a href="../../../backend/web/index.php">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <img src="<?= $product->img?>" class="img-fluid" alt="Colorlib Template">
                <?php if ($product->discount != 0) :?>
                    <span style="position: absolute; left: 0; background-color: #ffa45c; padding: 7px 15px; color: white;"><?= $product->discount?> %</span>
                <?php endif;?>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?= $product->title?></h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2"><?= $product->ratin ?></a>
                        <?php for ($i = 1; $i <= 5; $i++) :?>
                            <?php if ($i <= $product->ratin) : ?>
                                <span style="color: orange;" class="ion-ios-star-outline assessments" name="<?= $i;?>" data-id="<?= $product->id?>" data-url="<?= $product->productAssessment?>"></span>
                            <?php else: ?>
                                <span class="ion-ios-star-outline assessments" name="<?= $i;?>" data-id="<?= $product->id?>" data-url="<?= $product->productAssessment?>"></span>
                            <?php endif; ?>
                        <?php endfor;?>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;"><?= $product->sold?> <span style="color: #bbb;">Sold</span></a>
                    </p>
                </div>
                <p class="price">
                    <span class="price-sale">$<?= $product->cost['price'];?></span>
                    <span style='text-decoration: line-through; color: #adadad;' class='mr-2 price-dc'><?= $product->cost['old_price'];?></span>
                </p>
                <p>
                    <?= $product->description?>
                </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group d-flex">
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Small</option>
                                    <option value="">Medium</option>
                                    <option value="">Large</option>
                                    <option value="">Extra Large</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">80 piece available</p>
                    </div>
                </div>
                <button class="add_cart" data-id="<?= $product->id?>">
                    <?= Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []); ?>
                    Add To Cart
                </button>
            </div>
        </div>
    </div>
</section>

