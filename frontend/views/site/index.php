<?php
/* @var $slides frontend\controllers\SiteController */
/* @var $topProducts frontend\controllers\SiteController */
/* @var $products frontend\controllers\SiteController */
?>



<!--slide-->
<?= $this->render('slide', compact('slides'));?>
<!--end slide-->


<!--about us-->
<?= $this->render('about-us');?>
<!--end about us-->


<!--top products-->
<?= $this->render('top-products', compact('topProducts'));?>
<!--end top products-->


<!--new products-->
<?= $this->render('new-products');?>
<!--end new products-->


<!--products-->
<?= $this->render('_products', compact('products'));?>
<!--end products-->


<!--statistics-->
<?= $this->render('statistics');?>
<!--end statistics-->


<!--customer opinion-->
<?= $this->render('customer-opinion');?>
<!--end customer opinion-->


<!--newsletter subscription-->
<?= $this->render('newsletter-subscription');?>
<!--end newsletter subscription-->