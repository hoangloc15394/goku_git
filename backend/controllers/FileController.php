<?php

namespace backend\controllers;

use Yii;
use backend\models\Fileimg;
use backend\models\FileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * FileController implements the CRUD actions for Fileimg model.
 */
class FileController extends Controller
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
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','create','view','update','delete'],
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
     * Lists all Fileimg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fileimg model.
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
     * Creates a new Fileimg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fileimg();

         if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try{
               $picture = UploadedFile::getInstance($model, 'img');
                $model->img = $_POST['Fileimg']['name'].'.'.$picture->extension;
               if($model->save()){
                   $picture->saveAs('C:/xampp/htdocs/advanced/img/fileimg/' . $model->name.'.'.$picture->extension);
                   Yii::$app->getSession()->setFlash('success','Data saved!');
                   return $this->redirect(['view','id'=>$model->id]);
               }else{
                   Yii::$app->getSession()->setFlash('error','Data not saved!');
                   return $this->render('create', [
                         'model' => $model,
                   ]);
               }
          }catch(Exception $e){
              Yii::$app->getSession()->setFlash('error',"{$e->getMessage()}");
          }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Fileimg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
         $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try{
               $picture = UploadedFile::getInstance($model, 'img');
                $model->img = $_POST['Fileimg']['name'].'.'.$picture->extension;
               if($model->save()){
                   $picture->saveAs('C:/xampp/htdocs/advanced/img/fileimg/' . $model->name.'.'.$picture->extension);
                   Yii::$app->getSession()->setFlash('success','Data saved!');
                   return $this->redirect(['view','id'=>$model->id]);
               }else{
                   Yii::$app->getSession()->setFlash('error','Data not saved!');
                   return $this->render('create', [
                         'model' => $model,
                   ]);
               }
          }catch(Exception $e){
              Yii::$app->getSession()->setFlash('error',"{$e->getMessage()}");
          }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Fileimg model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $this->findModel($id)->delete();
        unlink('C:/xampp/htdocs/advanced/img/fileimg/'. $model->img);
        return $this->redirect(['index']);
    }

    /**
     * Finds the Fileimg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fileimg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fileimg::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
