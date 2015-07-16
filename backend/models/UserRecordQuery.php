<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[UserRecord]].
 *
 * @see UserRecord
 */
class UserRecordQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return UserRecord[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserRecord|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}