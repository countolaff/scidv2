<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[DetailOrder]].
 *
 * @see DetailOrder
 */
class DetailOrderQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return DetailOrder[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DetailOrder|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}