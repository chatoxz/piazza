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
 * @property integer $convencionales
 *
 * @property Planes[] $planes
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
            [['convencionales'], 'integer'],
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
            'id_modelos' => Yii::t('app', 'Id Modelos'),
            'nombre' => Yii::t('app', 'Nombre'),
            'foto' => Yii::t('app', 'Foto'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'adicional' => Yii::t('app', 'Adicional'),
            'video' => Yii::t('app', 'Video'),
            'convencionales' => Yii::t('app', 'Convencionales'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanes()
    {
        return $this->hasMany(Planes::className(), ['id_modelos' => 'id_modelos']);
    }
}
