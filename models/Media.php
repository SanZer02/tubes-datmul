<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "media".
 *
 * @property int $ID
 * @property string|null $Judul
 * @property string|null $Deskripsi
 * @property string|null $Tanggal_Pembuatan
 * @property string|null $Tanggal_Edit
 * @property string|null $filename
 * @property string|null $filepath
 */
class Media extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'media';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Deskripsi', 'filename', 'filepath'], 'string'],
            // [['Tanggal_Pembuatan', 'Tanggal_Edit'], 'safe'],
            [['Judul'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            // 'ID' => 'ID',
            'Judul' => 'Judul',
            'Deskripsi' => 'Deskripsi',
            'Tanggal_Pembuatan' => 'Tanggal Pembuatan',
            'Tanggal_Edit' => 'Tanggal Edit',
            'filename' => 'File',
            'filepath' => 'Filepath',
        ];
    }
}
