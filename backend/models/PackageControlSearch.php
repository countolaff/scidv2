<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PackageControl;

/**
 * PackageControlSearch represents the model behind the search form about `backend\models\PackageControl`.
 */
class PackageControlSearch extends PackageControl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customerid', 'name', 'description', 'created_at', 'updated_at', 'assigned_user', 'created_by', 'updated_by', 'observation', 'freight_id', 'order_id', 'order_detail_order_id', 'order_detail_order_product_id', 'order_detail_order_id1', 'order_detail_order_product_id1'], 'safe'],
            [['deleted', 'state'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PackageControl::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted' => $this->deleted,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'customerid', $this->customerid])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'assigned_user', $this->assigned_user])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
            ->andFilterWhere(['like', 'observation', $this->observation])
            ->andFilterWhere(['like', 'freight_id', $this->freight_id])
            ->andFilterWhere(['like', 'order_id', $this->order_id])
            ->andFilterWhere(['like', 'order_detail_order_id', $this->order_detail_order_id])
            ->andFilterWhere(['like', 'order_detail_order_product_id', $this->order_detail_order_product_id])
            ->andFilterWhere(['like', 'order_detail_order_id1', $this->order_detail_order_id1])
            ->andFilterWhere(['like', 'order_detail_order_product_id1', $this->order_detail_order_product_id1]);

        return $dataProvider;
    }
}
