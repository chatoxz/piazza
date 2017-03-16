<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fotos".
 *
 * @property integer $id_fotos
 * @property integer $id
 * @property integer $id_tipo
 * @property string $foto
 * @property string $link
 * @property integer $orden
 *
 * @property TipoFoto $idTipo
 */
class Fotos extends \yii\db\ActiveRecord
{
    public $file;
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
            [['id', 'id_tipo'], 'required'],
            [['id', 'id_tipo', 'orden'], 'integer'],
            [['foto'], 'string', 'max' => 155],
            [['link'], 'string', 'max' => 255],
            [['id_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => TipoFoto::className(), 'targetAttribute' => ['id_tipo' => 'id_tipo']],
            [['file'], 'file'],
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
            'id_tipo' => Yii::t('app', 'Id Tipo'),
            'foto' => Yii::t('app', 'Foto'),
            'link' => Yii::t('app', 'Link'),
            'orden' => Yii::t('app', 'Orden'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipo()
    {
        return $this->hasOne(TipoFoto::className(), ['id_tipo' => 'id_tipo']);
    }
}
