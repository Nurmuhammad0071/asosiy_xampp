<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yangliklar".
 *
 * @property int $id
 * @property string $sarlavhe
 * @property string $matn
 */
class Yangliklar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yangliklar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sarlavhe', 'matn'], 'required'],
            [['matn'], 'string'],
            [['sarlavhe'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sarlavhe' => 'Sarlavhe',
            'matn' => 'Matn',
        ];
    }
}
