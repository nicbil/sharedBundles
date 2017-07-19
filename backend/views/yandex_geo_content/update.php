<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\YandexGeoContent */

$this->title = 'Update Yandex Geo Content: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yandex Geo Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yandex-geo-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
