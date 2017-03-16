<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_foto".
 *
 * @property integer $id_tipo
 * @property string $nombre
 *
 * @property Fotos[] $fotos
 */
class TipoFoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 155],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo' => Yii::t('app', 'Id Tipo'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotos()
    {
        return $this->hasMany(Fotos::className(), ['id_tipo' => 'id_tipo']);
    }
}
