<?php

namespace app\controllers;

use app\models\Modelos;
use app\models\TipoFoto;
use Yii;
use app\models\Fotos;
use app\models\FotosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FotosController implements the CRUD actions for Fotos model.
 */
class FotosController extends Controller
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
                    //'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Fotos models.
     * @return mixed
     */
    public function actionIndex($id_tipo)
    {
        $searchModel = new FotosSearch();

        $searchModel->id_tipo = $id_tipo;
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams);
        $tipo = TipoFoto::find()->Where(['id_tipo' => $id_tipo])->one();
        $carpeta = $tipo->nombre;
        var_dump($dataProvider);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'id_tipo' => $id_tipo,
            'carpeta' => $carpeta
            
        ]);
    }

    /**
     * Displays a single Fotos model.
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
     * Creates a new Fotos model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     * @return mixed
     */
    public function actionCreate($id_tipo)
    {
        $model = new Fotos();
        $model->id_tipo = $id_tipo;
        $tipo = TipoFoto::find()->Where(['id_tipo' => $id_tipo])->one();
        $carpeta = $tipo->nombre;
        $modelos = Modelos::find()->all();
        if ($model->load(Yii::$app->request->post()) ) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/'.$carpeta.'/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            //control para que no se guarde con id = 0 que no existe
            if($model->id == 0)
                $model->id = 1;
            $model->save();
            return $this->redirect(['index', 'id_tipo' => $model->id_tipo]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelos' => $modelos,
                'id_tipo' => $id_tipo,
                'carpeta' => $carpeta,
            ]);
        }
    }

    /**
     * Updates an existing Fotos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_fotos
     * @return mixed
     */
    public function actionUpdate($id_fotos){
        $model = $this->findModel($id_fotos);
        $tipo = TipoFoto::find()->Where(['id_tipo' => $model->id_tipo])->one();
        $carpeta = $tipo->nombre;
        if ($model->load(Yii::$app->request->post())) {
            if($model->file = UploadedFile::getInstance($model, 'file')){
                $model->file->saveAs('@web/../images/'.$carpeta.'/' . $model->file->baseName . '.' . $model->file->extension);
                $model->foto = $model->file->baseName. '.' . $model->file->extension;
            }
            if($model->id == 0)
                $model->id = 1;
            $model->save();
            return $this->redirect(['index', 'id_tipo' => $model->id_tipo]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'carpeta' => $carpeta,
            ]);
        }
    }

    /**
     * Deletes an existing Fotos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id_fotos)
    {
        $this->findModel($id_fotos)->delete();

        if(Yii::$app->request->referrer){
            return $this->redirect(Yii::$app->request->referrer);
        }else{
            return $this->redirect(['fotos/index']);
        }
    }

    /**
     * Finds the Fotos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fotos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fotos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
