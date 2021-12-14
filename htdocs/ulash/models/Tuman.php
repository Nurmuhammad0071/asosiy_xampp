<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuman".
 *
 * @property int $id
 * @property string $tnomi
 * @property int $viloyatid
 *
 * @property Viloyat[] $viloyats
 */
class Tuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tnomi', 'viloyatid'], 'required'],
            [['viloyatid'], 'integer'],
            [['tnomi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tnomi' => 'Tnomi',
            'viloyatid' => 'Viloyatid',
        ];
    }

    /**
     * Gets query for [[Viloyats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViloyats()
    {
        return $this->hasMany(Viloyat::className(), ['id' => 'viloyatid']);
    }
}
