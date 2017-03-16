<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planes".
 *
 * @property integer $id_plan
 * @property integer $id_modelos
 * @property string $nombre
 * @property string $descripcion
 * @property string $adicional
 * @property string $video
 *
 * @property Modelos $idModelos
 */
class Planes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_modelos'], 'required'],
            [['id_modelos'], 'integer'],
            [['descripcion', 'adicional'], 'string'],
            [['nombre'], 'string', 'max' => 155],
            [['video'], 'string', 'max' => 255],
            [['id_modelos'], 'exist', 'skipOnError' => true, 'targetClass' => Modelos::className(), 'targetAttribute' => ['id_modelos' => 'id_modelos']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_plan' => Yii::t('app', 'Id Plan'),
            'id_modelos' => Yii::t('app', 'Id Modelos'),
            'nombre' => Yii::t('app', 'Nombre'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'adicional' => Yii::t('app', 'Adicional'),
            'video' => Yii::t('app', 'Video'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdModelos()
    {
        return $this->hasOne(Modelos::className(), ['id_modelos' => 'id_modelos']);
    }
}
