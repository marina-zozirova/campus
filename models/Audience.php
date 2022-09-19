<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audience".
 *
 * @property int|null $id
 * @property int|null $number
 * @property int|null $floor
 * @property float|null $width
 * @property float|null $length
 * @property int|null $places
 */
class Audience extends \yii\db\ActiveRecord
{
    public $square;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audience';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number', 'floor', 'places'], 'integer'],
            [['width', 'length'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {http://localhost:8080/index.php?r=main/
        return [
            'id' => 'ID',
            'number' => 'Number',
            'floor' => 'Floor',
            'width' => 'Width',
            'length' => 'Length',
            'places' => 'Places',
        ];
    }

    public function getType()
    {
        return $this->hasOne(Type::class, ['id' => 'idType']);
    }

    public function getCorps()
    {
        return $this->hasOne(Corps::class, ['id' => 'idCorps']);
    }

    public function getDepartament()
    {
        return $this->hasOne(Departament::class, ['id' => 'idDepartament']);
    }
}
