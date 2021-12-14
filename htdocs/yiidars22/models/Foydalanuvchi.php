<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Foydalanuvchi".
 *
 * @property int $id
 * @property string $ism
 * @property string $viloyat
 * @property string $tuman
 */
class Foydalanuvchi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Foydalanuvchi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ism', 'viloyat', 'tuman'], 'required'],
            [['ism', 'viloyat', 'tuman'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => 'Ism',
            'viloyat' => 'Viloyat',
            'tuman' => 'Tuman',
        ];
    }
}
