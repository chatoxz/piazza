<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usados".
 *
 * @property integer $id_usados
 * @property string $nombre
 * @property string $foto
 * @property string $descripcion
 * @property string $adicional
 * @property string $video
 */
class Usados extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'id_usados' => 'Id Usados',
            'nombre' => 'Nombre',
            'foto' => 'Foto',
            'descripcion' => 'Descripcion',
            'adicional' => 'Adicional',
            'video' => 'Video',
        ];
    }
}
