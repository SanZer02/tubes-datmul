<?php

namespace app\controllers;

use Yii;
use app\models\Media;
use app\models\MediaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;

/**
 * MediaController implements the CRUD actions for Media model.
 */
class MediaController extends Controller
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
     * Lists all Media models.
     * @return mixed
     */
    public function actionIndex()
    {
        // return $this->render('about', ['medias'=>$data]);
        $searchModel = new MediaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionImages()
    {
        $data = Media::find()->all();
        return $this->render('images', ['medias'=>$data]);
    }

    public function actionDownload($id){
        $data = Media::findOne($id);
        header('Content-Type:'.pathinfo($data->filepath, PATHINFO_EXTENSION));
        header('Content-Disposition: attachment; filename='.$data->filename);
        return readfile($data->filepath);
    }

    /**
     * Displays a single Media model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Media model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Media();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->validate()) {
                $name = UploadedFile::getInstance($model, 'filename');
                $path = 'uploads/'.md5($name->baseName). '.' .$name->extension;
                if ($name->saveAs($path)) {
                    $model->filename = $name->baseName . '.' . $name->extension;
                    $model->filepath = $path;
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->ID]);
                    }
                }
            }
            // return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Media model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            if ($model->validate()) {


                $name = UploadedFile::getInstance($model, 'filename');
                $path = 'uploads/'.md5($name->baseName). '.' .$name->extension;
                if ($name->saveAs($path)) {
                    $model->filename = $name->baseName . '.' . $name->extension;
                    $model->filepath = $path;
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->ID]);
                    }
                }
            }
            
            // return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Media model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();

        $data = Media::findOne($id);
        unlink($data->filepath);
        $data->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Media model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Media the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Media::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
