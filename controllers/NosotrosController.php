<?php

namespace app\controllers;

use Yii;
use app\models\Nosotros;
use app\models\NosotrosSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * NosotrosController implements the CRUD actions for Nosotros model.
 */
class NosotrosController extends Controller
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
                        'actions' => ['login', 'error','nosotros'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','view','create','update'],
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
     * Lists all Nosotros models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NosotrosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

     /**
     * Pagina Nosotros.
     * @return mixed
     */
    public function actionNosotros()
    {
        $model = Nosotros::find()->all();
        return $this->render('nosotros', [
            'model' => $model,
        ]);
    }



    /**
     * Displays a single Nosotros model.
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
     * Creates a new Nosotros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Nosotros();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/nosotros/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_nosotros]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Nosotros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/nosotros/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_nosotros]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Nosotros model.
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
     * Finds the Nosotros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Nosotros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Nosotros::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
