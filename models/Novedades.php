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
 * @property string $contenido2
 * @property string $foto2
 */
class Novedades extends \yii\db\ActiveRecord
{
    public $file;
    public $file2;
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
            [['contenido', 'contenido2'], 'required'],
            [['contenido', 'contenido2'], 'string'],
            [['fecha'], 'safe'],
            [['titulo', 'subtitulo', 'foto', 'foto2'], 'string', 'max' => 155],
            [['autor'], 'string', 'max' => 100],
            [['file'], 'file'],
            [['file2'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_novedades' => Yii::t('app', 'Id Novedades'),
            'titulo' => Yii::t('app', 'Titulo'),
            'contenido' => Yii::t('app', 'Contenido'),
            'subtitulo' => Yii::t('app', 'Subtitulo'),
            'autor' => Yii::t('app', 'Autor'),
            'fecha' => Yii::t('app', 'Fecha'),
            'foto' => Yii::t('app', 'Foto'),
            'contenido2' => Yii::t('app', 'Contenido principal'),
            'foto2' => Yii::t('app', 'Foto2'),
        ];
    }
}
