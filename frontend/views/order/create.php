<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $model frontend\controllers\OrderController */

?>
<div class="container">
    <?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'name')->textInput()?>

    <?= $form->field($model, 'email')->textInput()?>

    <?= $form->field($model, 'address')->textInput()?>

    <?= $form->field($model, 'phone')->textInput()?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    <?php $form = ActiveForm::end();?>
</div>