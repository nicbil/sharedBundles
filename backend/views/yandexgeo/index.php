<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\grid\GridView;

?>
<h1>Content</h1>
<?= GridView::widget([
    'dataProvider' => $dataProviderContent,
    'filterModel' => $searchModelContent,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'id',
        'name_page:ntext',
        //'text:ntext',
        'url:ntext',
        'active',

        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'yandex_geo_content'
        ],
    ],
]); ?>

<h1>Tabs</h1>
<?= GridView::widget([
    'dataProvider' => $dataProviderTabs,
    'filterModel' => $searchModelTabs,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'id',
        'name:ntext',
        //'text:ntext',
        'active',

        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'yandex_geo_tabs'
        ],
    ],
]); ?>

<h1>Messages</h1>
<?= GridView::widget([
    'dataProvider' => $dataProviderMessages,
    'filterModel' => $searchModelMessages,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'id',
        'code:ntext',
        'text:ntext',

        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'yandex_geo_messages'
        ],
    ],
]); ?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>
