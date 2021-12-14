<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property string $product_name
 * @property int $product_id
 * @property float $unit_price
 * @property int $order_id
 * @property int $quantity
 *
 * @property CartItems[] $cartItems
 * @property Orders $orders
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_id', 'unit_price', 'order_id', 'quantity'], 'required'],
            [['product_id', 'order_id', 'quantity'], 'integer'],
            [['unit_price'], 'number'],
            [['product_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'product_id' => 'Product ID',
            'unit_price' => 'Unit Price',
            'order_id' => 'Order ID',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * Gets query for [[CartItems]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CartItemsQuery
     */
    public function getCartItems()
    {
        return $this->hasMany(CartItems::className(), ['product_id' => 'product_id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrdersQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\OrderItemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\OrderItemQuery(get_called_class());
    }
}
