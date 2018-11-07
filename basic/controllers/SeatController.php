<?php

namespace app\controllers;

use Yii;
use app\models\Seat;
use app\models\SeatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SeatController implements the CRUD actions for Seat model.
 */
class SeatController extends Controller
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
     * Lists all Seat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SeatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Seat model.
     * @param string $CarriageId
     * @param integer $SeatId
     * @param string $TrainId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CarriageId, $SeatId, $TrainId)
    {
        return $this->render('view', [
            'model' => $this->findModel($CarriageId, $SeatId, $TrainId),
        ]);
    }

    /**
     * Creates a new Seat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Seat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CarriageId' => $model->CarriageId, 'SeatId' => $model->SeatId, 'TrainId' => $model->TrainId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Seat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CarriageId
     * @param integer $SeatId
     * @param string $TrainId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CarriageId, $SeatId, $TrainId)
    {
        $model = $this->findModel($CarriageId, $SeatId, $TrainId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CarriageId' => $model->CarriageId, 'SeatId' => $model->SeatId, 'TrainId' => $model->TrainId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Seat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CarriageId
     * @param integer $SeatId
     * @param string $TrainId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CarriageId, $SeatId, $TrainId)
    {
        $this->findModel($CarriageId, $SeatId, $TrainId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Seat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CarriageId
     * @param integer $SeatId
     * @param string $TrainId
     * @return Seat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CarriageId, $SeatId, $TrainId)
    {
        if (($model = Seat::findOne(['CarriageId' => $CarriageId, 'SeatId' => $SeatId, 'TrainId' => $TrainId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
