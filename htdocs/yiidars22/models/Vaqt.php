<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vaqt".
 *
 * @property int $id
 * @property string $vaqt
 */
class Vaqt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vaqt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vaqt'], 'required'],
            [['vaqt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vaqt' => 'Vaqt',
        ];
    }
}
