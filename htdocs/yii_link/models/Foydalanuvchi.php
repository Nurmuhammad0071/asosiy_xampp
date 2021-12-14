<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foydalanuvchi".
 *
 * @property int $id
 * @property string $login
 * @property string $parol
 * @property string $status
 * @property string $sana
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
            [['login', 'parol', 'status', 'sana'], 'required'],
            [['status'], 'string'],
            [['sana'], 'safe'],
            [['login', 'parol'], 'string', 'max' => 255],
            [['login'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'parol' => 'Parol',
            'status' => 'Status',
            'sana' => 'Sana',
        ];
    }
}
