<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {//ESTE NO SE USA, SE USA LA FUNCION contact($email) DEL MODELO Contact 
        $content  = "<p>Email: ". $this->email . "</p>";
        $content .= "<p>Nombre: ". $this->nombre . "</p>";
        $content .= "<p>Asunto: Contacto </p>";
        $content .= "<p>Mensaje: ". $this->msj . "</p>";
        if ($this->validate()) {
            Yii::$app->mailer->compose('@app/mail/layouts/html.php', ["content" => $content])
                ->setTo($email)
                ->setFrom([$this->email => $this->nombre])
                ->setSubject("Asunto: Contacto")
                ->setTextBody($this->msj)
                ->send();
            return true;
        }
        return false;
    }
}


























