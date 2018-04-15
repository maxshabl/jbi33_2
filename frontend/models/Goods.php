<?php

namespace frontend\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "jbi_goods".
 *
 * @property int $good_id
 * @property string $title
 * @property string $short_descr
 * @property string $price
 * @property string $slug
 * @property string $html_kw
 * @property string $html_descr
 * @property string $full_descr
 * @property string $img
 *
 * @property JbiOrders[] $jbiOrders
 */
class Goods extends \yii\db\ActiveRecord
{

    public $imgFile;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jbi_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'short_descr',   'price',  'html_kw', 'html_descr', 'full_descr'], 'required'],
            [['good_id', 'price'], 'integer'],
            [['full_descr'], 'string'],
            [['title', 'short_descr', 'slug', 'html_kw', 'html_descr'], 'string', 'max' => 255],
            [['good_id'], 'unique'],
            [['imgFile'], 'file', 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'good_id' => 'id товара',
            'title' => 'Название товара',
            'short_descr' => 'Короткое описание для списка товаров',
            'price' => 'Цена',
            'slug' => 'Название латиницей для адресной строки(необязательно, генерируется)',
            'html_kw' => 'Ключевые слова',
            'html_descr' => 'Описание для поисковика. Такое, как должно быть в сниппете ',
            'full_descr' => 'Полное описание для страницы данного товара',
            'img' => 'Картинка',
            'imgFile' => 'Файл картинки'
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
               // 'transliterator' => 'Russian-Latin/BGN; NFKD'
            ],
        ];
    }

    public function upload()
    {

        $this->imgFile->saveAs('jbi_sources/images/goods/' . $this->imgFile->baseName . '.' . $this->imgFile->extension);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   /* public function getJbiOrders()
    {
        return $this->hasMany(JbiOrders::className(), ['good_id' => 'good_id']);
    }*/
}
