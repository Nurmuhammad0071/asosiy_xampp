<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viloyat".
 *
 * @property int $id
 * @property string $vnomi
 *
 * @property Tuman[] $tumen
 */
class Viloyat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viloyat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vnomi'], 'required'],
            [['vnomi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vnomi' => 'Vnomi',
        ];
    }

    /**
     * Gets query for [[Tumen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTumen()
    {
        return $this->hasMany(Tuman::className(), ['viloyatid' => 'id']);
    }
}
