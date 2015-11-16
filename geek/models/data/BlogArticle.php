<?php

namespace app\models\data;

use Yii;

/**
 * This is the model class for table "blog_article".
 *
 * @property integer $id
 * @property string $content
 * @property string $title
 * @property string $keys
 * @property integer $addtime
 * @property string $address
 * @property string $weather
 */
class BlogArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'title', 'addtime'], 'required'],
            [['content'], 'string'],
            [['addtime'], 'integer'],
            [['title'], 'string', 'max' => 64],
            [['keys'], 'string', 'max' => 128],
            [['address', 'weather'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'title' => 'Title',
            'keys' => 'Keys',
            'addtime' => 'Addtime',
            'address' => 'Address',
            'weather' => 'Weather',
        ];
    }
}
