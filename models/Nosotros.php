<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "nosotros".
 *
 * @property integer $id_nosotros
 * @property string $foto
 */
class Nosotros extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nosotros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foto'],  'required'],
            [['foto'], 'string', 'max' => 150],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_nosotros' => 'Id foto',
            'foto' => 'Nombre',

        ];
    }
}
