<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'number',
        'floor',
        'width',
        'length',
        'places',
        'departament.departament',
        'corps.name',
        'type.type',

        ['class' => 'yii\grid\ActionColumn'],
    ]
    
]); 

?>