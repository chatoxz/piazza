<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slide".
 *
 * @property integer $id_slide
 * @property string $nombre
 *
 * @property Fotos[] $fotos
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slide';
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
            'id_slide' => Yii::t('app', 'Id Slide'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotos()
    {
        return $this->hasMany(Fotos::className(), ['id' => 'id_slide']);
    }
}
