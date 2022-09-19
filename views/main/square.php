<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'number',
        'places',
        'square',
        'type',
        'departament',
        ['class' => 'yii\grid\ActionColumn'],
    ]
]); 

?>