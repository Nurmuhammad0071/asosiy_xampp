<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foydalanuvchi".
 *
 * @property int $id
 * @property string $login
 * @property string $parol
 * @property string $viloyat
 * @property string $status
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
            [['login', 'parol', 'viloyat', 'status'], 'required'],
            [['status'], 'string'],
            [['login', 'parol', 'viloyat'], 'string', 'max' => 255],
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
            'viloyat' => 'Viloyat',
            'status' => 'Status',
        ];
    }
}
