<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fotos".
 *
 * @property integer $id_fotos
 * @property integer $id
 * @property integer $tipo
 * @property string $foto
 *
 * @property Modelos $id0
 * @property Slide $id1
 */
class Fotos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fotos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tipo'], 'integer'],
            [['foto'], 'string', 'max' => 155],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Modelos::className(), 'targetAttribute' => ['id' => 'id_modelos']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Slide::className(), 'targetAttribute' => ['id' => 'id_slide']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_fotos' => Yii::t('app', 'Id Fotos'),
            'id' => Yii::t('app', 'ID'),
            'tipo' => Yii::t('app', 'Tipo'),
            'foto' => Yii::t('app', 'Foto'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Modelos::className(), ['id_modelos' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId1()
    {
        return $this->hasOne(Slide::className(), ['id_slide' => 'id']);
    }
}
