<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departament".
 *
 * @property int|null $id
 * @property string|null $departament
 */
class Departament extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departament';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['departament'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'departament' => 'Departament',
        ];
    }
}
