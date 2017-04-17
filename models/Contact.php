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
 * @property string $fecha
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
            [['nombre','email'], 'required'],
            [['email', 'nombre', 'tel', 'domicilio'], 'string', 'max' => 255],
            [['msj'], 'string', 'max' => 1000],
            [['desde', 'hasta'], 'string', 'max' => 45],
            //[['email'], 'unique'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_contact' => Yii::t('app', 'Id Contact'),
            'email' => Yii::t('app', 'Email'),
            'nombre' => Yii::t('app', 'Nombre'),
            'msj' => Yii::t('app', 'Msj'),
            'desde' => Yii::t('app', 'Desde'),
            'tel' => Yii::t('app', 'Tel'),
            'domicilio' => Yii::t('app', 'Domicilio'),
            'hasta' => Yii::t('app', 'Hasta'),
            'fecha' => Yii::t('app', 'Fecha'),
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($mail, $email)
    {
        if ( $this->email =! "" ) {
            $this->setAttribute('email',$email);
            $content  = "<p>Email: ". $email . "</p>";
            $content .= "<p>Nombre: ". $this->nombre . "</p>";
            $content .= "<p>Telefono: ". $this->tel . "</p>";
            if($this->desde != "" ) $content .= "<p>Horarios de contacto: ". $this->desde ." ".$this->hasta. "</p>";
            $content .= "<p>Domicilio: ". $this->domicilio." </p>";
            $content .= "<p>Mensaje: ". $this->msj . "</p>";
            if ($this->validate()) {
                Yii::$app->mailer->compose('@app/mail/layouts/html.php', ["content" => $content])
                    ->setTo($mail)
                    ->setFrom([$this->email => $this->nombre])
                    ->setSubject("Asunto: Contacto")
                    ->setTextBody($this->msj)
                    ->send();
                return true;
            }
        }
        return false;
    }
}
