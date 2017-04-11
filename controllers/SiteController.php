<?php

namespace app\controllers;

use app\models\Fotos;
use app\models\Modelos;
use app\models\Usados;
use app\models\User;
use Yii;
use yii\base\Model;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Contact;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['login', 'index','error','postventa'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Contact();
        Yii::$app->view->params['customParam'] = new Modelos();
        $slide = Fotos::find()->andWhere(['id_tipo' => 3]) // define que son fotos del index
            ->andWhere(['id' => 1])->all();//es el id_slide

       $slide2 = Fotos::find()->andWhere(['id_tipo' => 3]) // define que son fotos de index
            ->andWhere(['id' => 2])->all();//es el id_slide

        if ($model->load(Yii::$app->request->post()) ) {
            //$model->contact(Yii::$app->params['adminEmail']);
            $model->fecha = date('Y-m-d');
            $model->save();
            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
            'slide' => $slide,
            'slide2' => $slide2,
        ]);
    }

    /**
     * Displays a single Modelos model.
     * @param integer $id
     * @return mixed
     */
    public function actionBuscar()
    {
        $model = new Modelos();
        $model->load(Yii::$app->request->post());
        $fotos = Fotos::find()->Where(['id_tipo' =>'2'])->all();
        $modelos = Modelos::find()->filterWhere(['like', 'nombre', $model->nombre])->all();
        $usados = Usados::find()->filterWhere(['like', 'nombre', $model->nombre])->all();
        return $this->render('buscar', [
            'model' => $modelos,
            'usados' => $usados,
            'fotos' => $fotos,
        ]);
    }


    /**
     * Displays postventa.
     *
     * @return string
     */
    public function actionPostventa()
    {
        return $this->render('postventa');
    }
  
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            $this->redirect(['/novedades/index']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $this->redirect(['/novedades/index']);
        }
        return $this->render('login', [
            'model' => $model,
        ]);

        //control de usuarios
        /*if (!\Yii::$app->user->isGuest) {

            if (User::isUserAdmin(Yii::$app->user->identity->id))
            {
                return $this->redirect(["site/admin"]);
            }
            else
            {
                return $this->redirect(["site/index"]);
            }
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            if (User::isUserAdmin(Yii::$app->user->identity->id))
            {
                return $this->redirect(["site/admin"]);
            }
            else
            {
                return $this->redirect(["site/index"]);
            }

        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }*/
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->contact(Yii::$app->params['adminEmail']);
            //Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

}
