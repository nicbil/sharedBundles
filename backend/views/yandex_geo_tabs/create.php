<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YandexGeoTabs */

$this->title = 'Create Yandex Geo Tabs';
$this->params['breadcrumbs'][] = ['label' => 'Yandex Geo Tabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yandex-geo-tabs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
