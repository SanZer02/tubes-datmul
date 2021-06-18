<?php

namespace app\controllers;

use Yii;
use app\models\Mediav;
use app\models\MediavSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;

/**
 * MediavController implements the CRUD actions for Mediav model.
 */
class MediavController extends Controller
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
     * Lists all Mediav models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MediavSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionVideos()
    {
        $data = Mediav::find()->all();
        return $this->render('videos', ['medias'=>$data]);
    }

    /**
     * Displays a single Mediav model.
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
     * Creates a new Mediav model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mediav();

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
     * Updates an existing Mediav model.
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
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mediav model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();

        $data = Mediav::findOne($id);
        unlink($data->filepath);
        $data->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Mediav model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mediav the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mediav::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
