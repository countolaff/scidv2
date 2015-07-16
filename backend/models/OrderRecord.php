<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_record".
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
 * @property string $approved_by
 * @property integer $state
 * @property string $order_id
 * @property string $order_detail_order_id
 * @property string $order_detail_order_product_id
 * @property string $order_detail_order_id1
 * @property string $order_detail_order_product_id1
 *
 * @property Order $order
 */
class OrderRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'order_id', 'order_detail_order_id', 'order_detail_order_product_id', 'order_detail_order_id1', 'order_detail_order_product_id1'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['deleted', 'state'], 'integer'],
            [['id', 'customerid', 'assigned_user', 'created_by', 'updated_by', 'approved_by', 'order_id', 'order_detail_order_id', 'order_detail_order_product_id', 'order_detail_order_id1', 'order_detail_order_product_id1'], 'string', 'max' => 45],
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
            'approved_by' => Yii::t('backend', 'Approved By'),
            'state' => Yii::t('backend', 'State'),
            'order_id' => Yii::t('backend', 'Order ID'),
            'order_detail_order_id' => Yii::t('backend', 'Order Detail Order ID'),
            'order_detail_order_product_id' => Yii::t('backend', 'Order Detail Order Product ID'),
            'order_detail_order_id1' => Yii::t('backend', 'Order Detail Order Id1'),
            'order_detail_order_product_id1' => Yii::t('backend', 'Order Detail Order Product Id1'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id', 'detail_order_id' => 'order_detail_order_id', 'detail_order_product_id' => 'order_detail_order_product_id', 'detail_order_id1' => 'order_detail_order_id1', 'detail_order_product_id1' => 'order_detail_order_product_id1']);
    }

    /**
     * @inheritdoc
     * @return OrderRecordQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderRecordQuery(get_called_class());
    }
}
