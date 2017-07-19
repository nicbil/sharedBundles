<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\YandexGeoMessages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yandex-geo-messages-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6])->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'clientOptions' => [
            'enterMode' => 2,
            'forceEnterMode'=>false,
            'shiftEnterMode'=>1,
            'allowedContent' => true,
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
