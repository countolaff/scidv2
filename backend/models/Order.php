<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
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
 * @property double $total_value
 * @property string $invoice
 * @property string $observation
 * @property string $detail_order_id
 * @property string $detail_order_product_id
 * @property string $detail_order_id1
 * @property string $detail_order_product_id1
 *
 * @property DetailOrder $detailOrderId1
 * @property OrderRecord[] $orderRecords
 * @property PackagesControl[] $packagesControls
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'detail_order_id', 'detail_order_product_id', 'detail_order_id1', 'detail_order_product_id1'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['deleted'], 'integer'],
            [['total_value'], 'number'],
            [['id', 'customerid', 'assigned_user', 'created_by', 'updated_by', 'invoice', 'detail_order_id', 'detail_order_product_id', 'detail_order_id1', 'detail_order_product_id1'], 'string', 'max' => 45],
            [['name'], 'string', 'max' => 100],
            [['description', 'observation'], 'string', 'max' => 500],
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
            'total_value' => Yii::t('backend', 'Total Value'),
            'invoice' => Yii::t('backend', 'Invoice'),
            'observation' => Yii::t('backend', 'Observation'),
            'detail_order_id' => Yii::t('backend', 'Detail Order ID'),
            'detail_order_product_id' => Yii::t('backend', 'Detail Order Product ID'),
            'detail_order_id1' => Yii::t('backend', 'Detail Order Id1'),
            'detail_order_product_id1' => Yii::t('backend', 'Detail Order Product Id1'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailOrderId1()
    {
        return $this->hasOne(DetailOrder::className(), ['id' => 'detail_order_id1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderRecords()
    {
        return $this->hasMany(OrderRecord::className(), ['order_id' => 'id', 'order_detail_order_id' => 'detail_order_id', 'order_detail_order_product_id' => 'detail_order_product_id', 'order_detail_order_id1' => 'detail_order_id1', 'order_detail_order_product_id1' => 'detail_order_product_id1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackagesControls()
    {
        return $this->hasMany(PackagesControl::className(), ['order_id' => 'id', 'order_detail_order_id' => 'detail_order_id', 'order_detail_order_product_id' => 'detail_order_product_id', 'order_detail_order_id1' => 'detail_order_id1', 'order_detail_order_product_id1' => 'detail_order_product_id1']);
    }

    /**
     * @inheritdoc
     * @return OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderQuery(get_called_class());
    }
}
