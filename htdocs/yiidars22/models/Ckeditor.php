<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ckeditor".
 *
 * @property int $id
 * @property string $sarlavha
 * @property string $matn
 */
class Ckeditor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ckeditor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sarlavha', 'matn'], 'required'],
            [['matn'], 'string'],
            [['sarlavha'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sarlavha' => 'Sarlavha',
            'matn' => 'Matn',
        ];
    }
}
