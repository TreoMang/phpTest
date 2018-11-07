<?php

namespace app\controllers;

use Yii;
use app\models\Carriage;
use app\models\CarriageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CarriageController implements the CRUD actions for Carriage model.
 */
class CarriageController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Carriage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CarriageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Carriage model.
     * @param string $CarriageId
     * @param string $TrainId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CarriageId, $TrainId)
    {
        return $this->render('view', [
            'model' => $this->findModel($CarriageId, $TrainId),
        ]);
    }

    /**
     * Creates a new Carriage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Carriage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CarriageId' => $model->CarriageId, 'TrainId' => $model->TrainId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Carriage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CarriageId
     * @param string $TrainId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CarriageId, $TrainId)
    {
        $model = $this->findModel($CarriageId, $TrainId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CarriageId' => $model->CarriageId, 'TrainId' => $model->TrainId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Carriage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CarriageId
     * @param string $TrainId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CarriageId, $TrainId)
    {
        $this->findModel($CarriageId, $TrainId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Carriage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CarriageId
     * @param string $TrainId
     * @return Carriage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CarriageId, $TrainId)
    {
        if (($model = Carriage::findOne(['CarriageId' => $CarriageId, 'TrainId' => $TrainId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
