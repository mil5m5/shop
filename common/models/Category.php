<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $parent_id
 *
 * @property ProductCategory[] $productCategories
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */

    public function beforeValidate()
    {
        return $this->name = ucfirst($this->name);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_id'], 'default', 'value' => null],
            [['name', 'parent_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
        ];
    }

    public function getCategory()
    {
        return Category::find();
    }


    public function getMainCategories()
    {
        return Category::find()->select(['name','id'])->where(['parent_id' => null])->indexBy('id')->column();
    }
    /**
     * Gets query for [[ProductCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategories()
    {
        return $this->hasMany(ProductCategory::class, ['category_id' => 'id']);
    }

    public function getProducts()
    {
        return $this->hasMany(Product::class, ['id' => 'product_id'])->via('productCategories');
    }
}
