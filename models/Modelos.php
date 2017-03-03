<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modelos".
 *
 * @property integer $id_modelos
 * @property string $nombre
 * @property string $foto
 * @property string $descripcion
 * @property string $adicional
 * @property string $video
 */
class Modelos extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modelos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['descripcion', 'adicional'], 'string'],
            [['nombre', 'foto'], 'string', 'max' => 155],
            [['video'], 'string', 'max' => 255],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_modelos' => 'Id Modelos',
            'nombre' => 'Nombre',
            'foto' => 'Foto',
            'descripcion' => 'Descripcion',
            'adicional' => 'Adicional',
            'video' => 'Video',
        ];
    }
}
