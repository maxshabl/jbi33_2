<?php

namespace frontend\controllers;

use frontend\models\Goods;
use frontend\models\Orders;
use Yii;
use yii\data\Pagination;
use yii\db\Query;
use yii\helpers\Json;
use yii\web\Controller;

class ProductController extends Controller
{

    function actionIndex()
    {
        // выполняем запрос
        $query = Goods::find();
        // делаем копию выборки
        $countQuery = clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 15]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();
        // Передаем данные в представление
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionTobasket($id, $count, $price)
    {
        $session = Yii::$app->session;
        if (!$session->get('basket')) {
            $basket['goods'][$id] = $count;
            $basket['price'] = $price;
            $session->set('basket', Json::encode($basket, true));
        } else {
            $basket = Json::decode($session->get('basket'), true);
            $basket['goods'][$id] = $count;
            $basket['price'] = $basket['price'] + $price * $count;
            $session->set('basket', Json::encode($basket));
        }
        return json_encode($basket);
    }

    public function actionCart()
    {

        $a = Yii::$app->request->post();
        $session = Yii::$app->session;
        $order = new Orders();
        $goods = new Goods();
        $basket = [];
        if($session->get('basket') && Yii::$app->request->post()) {
            $basket = Json::decode($session->get('basket'), true);
            $ids = array_keys($basket['goods']);
            $goods = Goods::find()->where(['in', 'good_id', $ids])->all();
            $order_id = rand(100000000000, 9999999999999);
            foreach ($goods as $item) {
                $order = new Orders();
                $order->order_id = $order_id.'';
                $order->name = Yii::$app->request->post('name');
                $order->email = Yii::$app->request->post('email');
                $order->phone = (int)Yii::$app->request->post('phone');
                $order->message = Yii::$app->request->post('message');
                $order->good_id = $item->good_id;
                $order->count = $basket['goods'][$item->good_id];
                $order->price = (float) round(($item->price),2);
                $order->save();


            }
            $orderedGoods = Orders::find()->where(['order_id' => $order_id])->all();
            return $this->render('order', [
                '$orderedGoods' => $orderedGoods,
            ]);



        }
        return $this->render('cart', [
            'order' => $order,
            'goods' => $goods,
            'basket' => $basket
        ]);

    }

    public function actionProductitem($slug)
    {
        $product = Goods::findOne(['slug' => $slug]);
        return $this->render('product_item', ['product' => $product]);
    }
}