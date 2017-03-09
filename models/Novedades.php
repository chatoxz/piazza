<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "novedades".
 *
 * @property integer $id_novedades
 * @property string $titulo
 * @property string $contenido
 * @property string $subtitulo
 * @property string $autor
 * @property string $fecha
 * @property string $foto
 */
class Novedades extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'novedades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contenido'], 'string'],
            [['fecha'], 'safe'],
            [['titulo', 'subtitulo', 'foto'], 'string', 'max' => 155],
            [['autor'], 'string', 'max' => 100],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_novedades' => 'Id Novedades',
            'titulo' => 'Titulo',
            'contenido' => 'Contenido',
            'subtitulo' => 'Subtitulo',
            'autor' => 'Autor',
            'fecha' => 'Fecha',
            'foto' => 'Foto',
        ];
    }
}
