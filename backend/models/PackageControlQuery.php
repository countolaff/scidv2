<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[PackageControl]].
 *
 * @see PackageControl
 */
class PackageControlQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return PackageControl[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PackageControl|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}