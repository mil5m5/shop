<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Slide */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slide-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'title')->widget(CKEditor::class,[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]);?>

    <?= $form->field($model, 'description')->widget(CKEditor::class,[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
