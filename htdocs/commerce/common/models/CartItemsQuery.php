<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CartItem]].
 *
 * @see CartItem
 */
class CartItemsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CartItem[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CartItem|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
