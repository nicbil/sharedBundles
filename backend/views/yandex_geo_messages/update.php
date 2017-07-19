<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\YandexGeoMessages */

$this->title = 'Update Yandex Geo Messages: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yandex Geo Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yandex-geo-errors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
