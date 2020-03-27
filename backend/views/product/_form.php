<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;


/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
/* @var $categories backend\controllers\ProductController */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput(['type' => 'number', 'min' => 0, 'max' => 100]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'description')->widget(CKEditor::class,[
        'editorOptions' => [
            'preset' => 'standard',
            'inline' => false,
        ],
    ]);?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'available_quantity')->textInput() ?>

    <?= $form->field($model, 'imageFile')->fileInput()?>

    <?= $form->field($model, 'category')->dropDownList($categories) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

