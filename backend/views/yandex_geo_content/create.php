<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YandexGeoContent */

$this->title = 'Create Yandex Geo Content';
$this->params['breadcrumbs'][] = ['label' => 'Yandex Geo Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yandex-geo-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
