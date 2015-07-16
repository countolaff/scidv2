<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detail_order".
 *
 * @property string $id
 * @property string $customerid
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $assigned_user
 * @property integer $deleted
 * @property string $created_by
 * @property string $updated_by
 * @property integer $quantity_purchased
 * @property double $price
 * @property string $product_id
 *
 * @property Product $product
 * @property Order[] $orders
 */
class DetailOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['deleted', 'quantity_purchased'], 'integer'],
            [['price'], 'number'],
            [['id', 'customerid', 'assigned_user', 'created_by', 'updated_by', 'product_id'], 'string', 'max' => 45],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'customerid' => Yii::t('backend', 'Customerid'),
            'name' => Yii::t('backend', 'Name'),
            'description' => Yii::t('backend', 'Description'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
            'assigned_user' => Yii::t('backend', 'Assigned User'),
            'deleted' => Yii::t('backend', 'Deleted'),
            'created_by' => Yii::t('backend', 'Created By'),
            'updated_by' => Yii::t('backend', 'Updated By'),
            'quantity_purchased' => Yii::t('backend', 'Quantity Purchased'),
            'price' => Yii::t('backend', 'Price'),
            'product_id' => Yii::t('backend', 'Product ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['detail_order_id1' => 'id']);
    }

    /**
     * @inheritdoc
     * @return DetailOrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DetailOrderQuery(get_called_class());
    }
}
