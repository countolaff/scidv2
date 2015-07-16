<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "freight".
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
 * @property string $telephone
 * @property string $Observations
 *
 * @property PackagesControl[] $packagesControls
 */
class Freight extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'freight';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id'], 'required'],
            [['name','description','telephone'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['deleted'], 'integer'],
            [['id', 'customerid', 'assigned_user', 'created_by', 'updated_by', 'telephone', 'Observations'], 'string', 'max' => 45],
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
            'telephone' => Yii::t('backend', 'Telephone'),
            'Observations' => Yii::t('backend', 'Observations'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackagesControls()
    {
        return $this->hasMany(PackagesControl::className(), ['freight_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return FreightQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FreightQuery(get_called_class());
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'id',
                    
                ],
                'value' => function ($event) {
                    return Yii::$app->utils->getGUID();
                },
            ],
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'assigned_user',
                    
                ],
                'value' => function ($event) {
                    return Yii::$app->user->id;
                },
            ],
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'deleted',  
                    
                ],
                'value' => function ($event) {
                    return 0;
                },
            ],            
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'customerid',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'customerid',
                    
                ],
                'value' => function ($event) {
                    return Yii::$app->user->identity->getCustomerid();
                },
            ],
        ];
    }
}
