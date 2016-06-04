<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Phim;
use frontend\models\PhimSearch;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PhimController implements the CRUD actions for Phim model.
 */
class PhimController extends Controller
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
     * Lists all Phim models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhimSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Phim model.
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
     * Creates a new Phim model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Phim(['scenario' => 'create']);

       if ($model->load(Yii::$app->request->post())) {
            try{
               $poster = UploadedFile::getInstance($model, 'poster');
               // $anhdaidien = UploadedFile::getInstance($model, 'anh_dai_dien');
               $model->poster = $_POST['Phim']['ma_phim'].'.'.$poster->extension;
               // $model->anhdaidien = $_POST['Phim']['ma_phim'].'.'.$anhdaidien->extension;
               if($model->save()){
                   $poster->saveAs('C:/xampp/htdocs/advanced/frontend/img/poster/' . $model->ma_phim.'.'.$poster->extension);
                   // $anhdaidien->saveAs('C:/xampp/htdocs/advanced/frontend/img/anhdaidien/' . $model->ma_phim.'.'.$anhdaidien->extension);
                   Yii::$app->getSession()->setFlash('success','Data saved!');
                   return $this->redirect(['view','id'=>$model->ma_phim]);
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
     * Updates an existing Phim model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ma_phim]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Phim model.
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
     * Finds the Phim model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Phim the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Phim::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
