<?php

namespace backend\controllers;

use Yii;
use backend\models\PackageControl;
use backend\models\PackageControlSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PackageControlController implements the CRUD actions for PackageControl model.
 */
class PackageControlController extends Controller
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
     * Lists all PackageControl models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PackageControlSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PackageControl model.
     * @param string $id
     * @param string $freight_id
     * @param string $order_id
     * @param string $order_detail_order_id
     * @param string $order_detail_order_product_id
     * @param string $order_detail_order_id1
     * @param string $order_detail_order_product_id1
     * @return mixed
     */
    public function actionView($id, $freight_id, $order_id, $order_detail_order_id, $order_detail_order_product_id, $order_detail_order_id1, $order_detail_order_product_id1)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $freight_id, $order_id, $order_detail_order_id, $order_detail_order_product_id, $order_detail_order_id1, $order_detail_order_product_id1),
        ]);
    }

    /**
     * Creates a new PackageControl model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PackageControl();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'freight_id' => $model->freight_id, 'order_id' => $model->order_id, 'order_detail_order_id' => $model->order_detail_order_id, 'order_detail_order_product_id' => $model->order_detail_order_product_id, 'order_detail_order_id1' => $model->order_detail_order_id1, 'order_detail_order_product_id1' => $model->order_detail_order_product_id1]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PackageControl model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $freight_id
     * @param string $order_id
     * @param string $order_detail_order_id
     * @param string $order_detail_order_product_id
     * @param string $order_detail_order_id1
     * @param string $order_detail_order_product_id1
     * @return mixed
     */
    public function actionUpdate($id, $freight_id, $order_id, $order_detail_order_id, $order_detail_order_product_id, $order_detail_order_id1, $order_detail_order_product_id1)
    {
        $model = $this->findModel($id, $freight_id, $order_id, $order_detail_order_id, $order_detail_order_product_id, $order_detail_order_id1, $order_detail_order_product_id1);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'freight_id' => $model->freight_id, 'order_id' => $model->order_id, 'order_detail_order_id' => $model->order_detail_order_id, 'order_detail_order_product_id' => $model->order_detail_order_product_id, 'order_detail_order_id1' => $model->order_detail_order_id1, 'order_detail_order_product_id1' => $model->order_detail_order_product_id1]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PackageControl model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $freight_id
     * @param string $order_id
     * @param string $order_detail_order_id
     * @param string $order_detail_order_product_id
     * @param string $order_detail_order_id1
     * @param string $order_detail_order_product_id1
     * @return mixed
     */
    public function actionDelete($id, $freight_id, $order_id, $order_detail_order_id, $order_detail_order_product_id, $order_detail_order_id1, $order_detail_order_product_id1)
    {
        $this->findModel($id, $freight_id, $order_id, $order_detail_order_id, $order_detail_order_product_id, $order_detail_order_id1, $order_detail_order_product_id1)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PackageControl model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $freight_id
     * @param string $order_id
     * @param string $order_detail_order_id
     * @param string $order_detail_order_product_id
     * @param string $order_detail_order_id1
     * @param string $order_detail_order_product_id1
     * @return PackageControl the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $freight_id, $order_id, $order_detail_order_id, $order_detail_order_product_id, $order_detail_order_id1, $order_detail_order_product_id1)
    {
        if (($model = PackageControl::findOne(['id' => $id, 'freight_id' => $freight_id, 'order_id' => $order_id, 'order_detail_order_id' => $order_detail_order_id, 'order_detail_order_product_id' => $order_detail_order_product_id, 'order_detail_order_id1' => $order_detail_order_id1, 'order_detail_order_product_id1' => $order_detail_order_product_id1])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
