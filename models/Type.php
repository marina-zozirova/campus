<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property int|null $id
 * @property string|null $type
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
        ];
    }

    public function getType()
    {
        return $this->hasOne(Type::class, ['id' => 'idType']);
    }
}
