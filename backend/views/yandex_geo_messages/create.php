<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YandexGeoMessages */

$this->title = 'Create Yandex Geo Messages';
$this->params['breadcrumbs'][] = ['label' => 'Yandex Geo Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yandex-geo-messages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
