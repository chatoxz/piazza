<?php

namespace app\controllers;

use app\models\Contact;
use Yii;
use app\models\Modelos;
use app\models\ModelosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * ModelosController implements the CRUD actions for Modelos model.
 */
class ModelosController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Modelos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ModelosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Pagina Modelos.
     * @return mixed
     */
    public function actionModelos()
    {
        $model = Modelos::find()->all();
        return $this->render('modelos', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Modelos model.
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
     * Displays a detailed Modelos model.
     * @param integer $id
     * @return mixed
     */
    public function actionDetalles($id)
    {
        $contacto = new Contact();
        $model = new Contact();
        $enviado = 0;

        if ($contacto->load(Yii::$app->request->post()) && $contacto->save()) {
            $enviado = 1;
            return $this->render('detalles', [
                'model' => $this->findModel($id),
                'contacto' => $contacto,
                'enviado' => $enviado,
            ]);
        } else {
            return $this->render('detalles', [
                'model' => $this->findModel($id),
                'contacto' => $contacto,
                'enviado' => $enviado,
            ]);
        }


    }

    /**
     * Creates a new Modelos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Modelos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/modelos/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_modelos]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Modelos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/modelos/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_modelos]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Modelos model.
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
     * Finds the Modelos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Modelos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Modelos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
