<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\YandexGeoContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yandex-geo-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_page')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6])->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'clientOptions' => [
            'allowedContent' => true
        ],
    ]); ?>

    <?= $form->field($model, 'url')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'active')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
