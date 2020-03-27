<?php

namespace common\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int|null $sold
 * @property int|null $rating
 * @property string|null $title
 * @property int|null $price
 * @property string|null $description
 * @property int|null $quantity
 * @property int|null $available_quantity
 *
 * @property ProductCategory[] $productCategories
 */
class Product extends \yii\db\ActiveRecord
{
    public $category;
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sold', 'rating', 'price', 'quantity', 'available_quantity', 'discount', 'number_of_voters'], 'integer'],
            [['title', 'price', 'description', 'available_quantity', 'category'], 'required'],
            [['title', 'description'], 'string', 'max' => 255],
            [['discount', 'sold', 'rating', 'number_of_voters'], 'default', 'value' => 0],
            [['category'], 'safe'],
            [['image', 'imageFile'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sold' => 'Sold',
            'rating' => 'Rating',
            'title' => 'Title',
            'price' => 'Price',
            'description' => 'Description',
            'quantity' => 'Quantity',
            'available_quantity' => 'Available Quantity',
        ];
    }

    public function getImg()
    {
        return Url::to('/uploads/products/' . $this->image);
    }

    /**
     * Gets query for [[ProductCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategories()
    {
        return $this->hasMany(ProductCategory::class, ['product_id' => 'id']);
    }
}

