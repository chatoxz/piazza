<?php

namespace app\controllers;

use Yii;
use app\models\Novedades;
use app\models\NovedadesSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NovedadesController implements the CRUD actions for Novedades model.
 */
class NovedadesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','novedades'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','view','create','update','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Novedades models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NovedadesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays novedades.
     *
     * @return string
     */
    public function actionNovedades()
    {
        $model = Novedades::find()->all();
        return $this->render('novedades', [
            'model' => $model,
        ]);
    }


    /**
     * Displays a single Novedades model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Novedades model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Novedades();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/novedades/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_novedades]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Novedades model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/novedades/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_novedades]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Novedades model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Novedades model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Novedades the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Novedades::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
