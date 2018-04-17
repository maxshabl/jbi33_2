<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required'],
            ['phone', 'integer'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Проверочный код',
            'email' => 'Ваш email',
            'body' => 'Текст сообщения',
            'name' => 'Как к Вам обращаться',
            'phone' => 'Номер телефона'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @return bool whether the email was sent
     */
    public function sendEmail()
    {
        $body = " <div>Сообщение отправителя: <b> ".$this->body." </b></div>";
        $body .= " <div>Email отправителя: <b> ".$this->email." </b></div>";
         $body .=   "<div>Телефон отправителя: <b> ".$this->phone." </b></div>";
         $body .=   "<div>Имя отправителя: <b> ".$this->name." </b></div>";
        return Yii::$app->mailer->compose(['html' => 'layouts/html'], ['content' => $body])
            ->setTo('jbi33@yandex.ru')
            ->setFrom('jbi33@yandex.ru')
            ->setSubject('Форма обратной связи')
            //->setTextBody($body)
            ->send();
    }
}
