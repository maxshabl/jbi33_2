<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jbi_orders".
 *
 * @property string $order_id
 * @property int $phone
 * @property string $email
 * @property string $name
 * @property string $message
 * @property string $created_date
 * @property string $updated_date
 * @property int $good_id
 * @property string $price
 * @property int $count
 * @property int $status
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jbi_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['good_id'], 'required', 'message' => 'Корзина пуста'],
            [['order_id', 'phone', 'email', 'name', 'message', 'price', 'count'], 'required', 'message' => 'Не может быть пустым.'],
            [['phone', 'good_id', 'count'], 'integer'],
            [['price'], 'double'],
            [['email'], 'email', 'message' => 'Не похоже на email'],
            [['email'], 'string', 'max' => 120, 'message' => 'Слишком много букв'],
            [['order_id','name', 'message'], 'string', 'max' => 255, 'message' => 'Слишком много букв. Над не более 255'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'phone' => 'Phone',
            'email' => 'Email',
            'name' => 'Name',
            'message' => 'Message',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'good_id' => 'Good ID',
            'price' => 'Price',
            'count' => 'Count',
            'status' => 'Status',
        ];
    }
}
