<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "package_control".
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
 * @property string $observation
 * @property integer $state
 * @property string $freight_id
 * @property string $order_id
 * @property string $order_detail_order_id
 * @property string $order_detail_order_product_id
 * @property string $order_detail_order_id1
 * @property string $order_detail_order_product_id1
 *
 * @property Freight $freight
 * @property Order $order
 */
class PackageControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'package_control';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'freight_id', 'order_id', 'order_detail_order_id', 'order_detail_order_product_id', 'order_detail_order_id1', 'order_detail_order_product_id1'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['deleted', 'state'], 'integer'],
            [['id', 'customerid', 'assigned_user', 'created_by', 'updated_by', 'freight_id', 'order_id', 'order_detail_order_id', 'order_detail_order_product_id', 'order_detail_order_id1', 'order_detail_order_product_id1'], 'string', 'max' => 45],
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
            'observation' => Yii::t('backend', 'Observation'),
            'state' => Yii::t('backend', 'State'),
            'freight_id' => Yii::t('backend', 'Freight ID'),
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
    public function getFreight()
    {
        return $this->hasOne(Freight::className(), ['id' => 'freight_id']);
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
     * @return PackageControlQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PackageControlQuery(get_called_class());
    }
}
