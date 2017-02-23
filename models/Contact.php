<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id_contact
 * @property string $email
 * @property string $nombre
 * @property string $msj
 * @property string $desde
 * @property string $tel
 * @property string $domicilio
 * @property string $hasta
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'nombre', 'tel', 'domicilio'], 'string', 'max' => 255],
            [['msj'], 'string', 'max' => 1000],
            [['desde', 'hasta'], 'string', 'max' => 45],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_contact' => 'Id Contact',
            'email' => 'Email',
            'nombre' => 'Nombre',
            'msj' => 'Msj',
            'desde' => 'Desde',
            'tel' => 'Tel',
            'domicilio' => 'Domicilio',
            'hasta' => 'Hasta',
        ];
    }
}
