<?php

namespace app\controllers;

use Yii;
use app\models\DetailTicket;
use app\models\DetailTicketSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailTicketController implements the CRUD actions for DetailTicket model.
 */
class DetailTicketController extends Controller
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
     * Lists all DetailTicket models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DetailTicketSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailTicket model.
     * @param string $BookID
     * @param string $TicketId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($BookID, $TicketId)
    {
        return $this->render('view', [
            'model' => $this->findModel($BookID, $TicketId),
        ]);
    }

    /**
     * Creates a new DetailTicket model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DetailTicket();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'BookID' => $model->BookID, 'TicketId' => $model->TicketId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailTicket model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $BookID
     * @param string $TicketId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($BookID, $TicketId)
    {
        $model = $this->findModel($BookID, $TicketId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'BookID' => $model->BookID, 'TicketId' => $model->TicketId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailTicket model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $BookID
     * @param string $TicketId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($BookID, $TicketId)
    {
        $this->findModel($BookID, $TicketId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailTicket model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $BookID
     * @param string $TicketId
     * @return DetailTicket the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($BookID, $TicketId)
    {
        if (($model = DetailTicket::findOne(['BookID' => $BookID, 'TicketId' => $TicketId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
