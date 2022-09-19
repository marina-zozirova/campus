<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'name',
        'type',
        'list',
        ['class' => 'yii\grid\ActionColumn'],
    ]
]); 

?>