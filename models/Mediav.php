<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mediav".
 *
 * @property int $ID
 * @property string $Judul
 * @property string|null $Deskripsi
 * @property string|null $Tanggal_Pembuatan
 * @property string|null $Tanggal_Edit
 * @property string $filename
 * @property string $filepath
 */
class Mediav extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mediav';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['Judul', 'filename', 'filepath'], 'required'],
            [['Deskripsi', 'filepath'], 'string'],
            // [['Tanggal_Pembuatan', 'Tanggal_Edit'], 'safe'],
            [['Judul', 'filename'], 'string', 'max' => 100],
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
