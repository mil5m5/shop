<?php
use \yii\helpers\Url;
?>

<section id="home-section" class="hero">
    <div class="home-slider js-fullheight owl-carousel">
        <?php foreach ($slides as $slide) :?>
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight" style="background-image: url(<?= $slide->img ?>);">
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Winkel eCommerce Shop</span>
                            <div class="horizontal">
                                <h3 class="vr" style="background-image: url(images/divider.jpg);">Stablished Since 2000</h3>
                                <h1 class="mb-4 mt-3"><?= $slide->title?></h1>
                                <p><?= $slide->description?></p>

                                <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>