<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;

/**
 * OrderSearch represents the model behind the search form about `backend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customerid', 'name', 'description', 'created_at', 'updated_at', 'assigned_user', 'created_by', 'updated_by', 'invoice', 'observation', 'detail_order_id', 'detail_order_product_id', 'detail_order_id1', 'detail_order_product_id1'], 'safe'],
            [['deleted'], 'integer'],
            [['total_value'], 'number'],
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
        $query = Order::find();

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
            'total_value' => $this->total_value,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'customerid', $this->customerid])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'assigned_user', $this->assigned_user])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
            ->andFilterWhere(['like', 'invoice', $this->invoice])
            ->andFilterWhere(['like', 'observation', $this->observation])
            ->andFilterWhere(['like', 'detail_order_id', $this->detail_order_id])
            ->andFilterWhere(['like', 'detail_order_product_id', $this->detail_order_product_id])
            ->andFilterWhere(['like', 'detail_order_id1', $this->detail_order_id1])
            ->andFilterWhere(['like', 'detail_order_product_id1', $this->detail_order_product_id1]);

        return $dataProvider;
    }
}
