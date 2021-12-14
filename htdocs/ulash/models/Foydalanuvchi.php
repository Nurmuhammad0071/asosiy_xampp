<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foydalanuvchi".
 *
 * @property int|null $id
 * @property string $ism
 * @property string $familiya
 * @property string $ochestva
 * @property string $viloyat
 * @property int $tuman
 */
class Foydalanuvchi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foydalanuvchi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tuman'], 'integer'],
            [['ism', 'familiya', 'ochestva', 'viloyat', 'tuman'], 'required'],
            [['ism', 'familiya', 'ochestva', 'viloyat'], 'string', 'max' => 255],
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
            'familiya' => 'Familiya',
            'ochestva' => 'Ochestva',
            'viloyat' => 'Viloyat',
            'tuman' => 'Tuman',
        ];
    }
}
