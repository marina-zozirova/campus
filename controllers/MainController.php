<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Audience;
use yii\data\SqlDataProvider;

class MainController extends Controller {

    //общая таблица со всеми данными
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Audience::find()->leftJoin('type', 'type.id = audience.idType')->leftJoin('corps', 'corps.id = audience.idCorps')->leftJoin('departament', 'departament.id = audience.idDepartament'),
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    //список лекционных аудиторий с указанием площади помещения, количества посадочных мест и подразделения, за которым закреплено помещение
    public function actionSquare() {
        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT audience.length * audience.width as square, audience.places, type.type, departament.departament, audience.number FROM audience INNER JOIN corps ON audience.idCorps = corps.id INNER JOIN type ON audience.idType = type.id INNER JOIN departament ON audience.idDepartament = departament.id WHERE type.id = 1',
        ]);

        return $this->render('square', ['dataProvider' => $dataProvider]);
    }

    //список корпусов университета с указанием количества лекционных аудиторий, аудиторий для практических занятий и компьютерных классов
    public function actionList() {
        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT corps.name, type.type, count(*) AS list FROM type INNER JOIN audience ON type.id = audience.idType INNER JOIN corps ON audience.idCorps = corps.id GROUP BY type.id, audience.idCorps ORDER BY corps.name'
        ]);

        return $this->render('list', ['dataProvider' => $dataProvider]);
    }


}