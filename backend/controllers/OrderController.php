<?php

namespace backend\controllers;

use Yii;
use backend\models\Order;
use backend\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','update','view'],
                'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Order model.
     * @param string $id
     * @param string $detail_order_id
     * @param string $detail_order_product_id
     * @param string $detail_order_id1
     * @param string $detail_order_product_id1
     * @return mixed
     */
    public function actionView($id, $detail_order_id, $detail_order_product_id, $detail_order_id1, $detail_order_product_id1)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $detail_order_id, $detail_order_product_id, $detail_order_id1, $detail_order_product_id1),
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'detail_order_id' => $model->detail_order_id, 'detail_order_product_id' => $model->detail_order_product_id, 'detail_order_id1' => $model->detail_order_id1, 'detail_order_product_id1' => $model->detail_order_product_id1]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $detail_order_id
     * @param string $detail_order_product_id
     * @param string $detail_order_id1
     * @param string $detail_order_product_id1
     * @return mixed
     */
    public function actionUpdate($id, $detail_order_id, $detail_order_product_id, $detail_order_id1, $detail_order_product_id1)
    {
        $model = $this->findModel($id, $detail_order_id, $detail_order_product_id, $detail_order_id1, $detail_order_product_id1);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'detail_order_id' => $model->detail_order_id, 'detail_order_product_id' => $model->detail_order_product_id, 'detail_order_id1' => $model->detail_order_id1, 'detail_order_product_id1' => $model->detail_order_product_id1]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $detail_order_id
     * @param string $detail_order_product_id
     * @param string $detail_order_id1
     * @param string $detail_order_product_id1
     * @return mixed
     */
    public function actionDelete($id, $detail_order_id, $detail_order_product_id, $detail_order_id1, $detail_order_product_id1)
    {
        $this->findModel($id, $detail_order_id, $detail_order_product_id, $detail_order_id1, $detail_order_product_id1)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $detail_order_id
     * @param string $detail_order_product_id
     * @param string $detail_order_id1
     * @param string $detail_order_product_id1
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $detail_order_id, $detail_order_product_id, $detail_order_id1, $detail_order_product_id1)
    {
        if (($model = Order::findOne(['id' => $id, 'detail_order_id' => $detail_order_id, 'detail_order_product_id' => $detail_order_product_id, 'detail_order_id1' => $detail_order_id1, 'detail_order_product_id1' => $detail_order_product_id1])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
