<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Freight]].
 *
 * @see Freight
 */
class FreightQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Freight[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Freight|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}