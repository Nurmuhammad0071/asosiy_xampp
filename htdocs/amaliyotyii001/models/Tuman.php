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
 * @property Viloyat $viloyat
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
            [['viloyatid'], 'exist', 'skipOnError' => true, 'targetClass' => Viloyat::className(), 'targetAttribute' => ['viloyatid' => 'id']],
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
     * Gets query for [[Viloyat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViloyat()
    {
        return $this->hasOne(Viloyat::className(), ['id' => 'viloyatid']);
    }
}
