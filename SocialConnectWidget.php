<?php

namespace nurielmeni\SocialConnect;

use Yii;
use yii\base\Widget;
use yii\helpers\Url;
use nurielmeni\socialConnect\assets\SocialConnectAsset;

class SocialConnectWidget extends Widget
{


    public $name = 'social-connect';
    public $title = '';
    public $cssClass = '';
    public $linkClass = '';
    public $size = '';
    public $color = '';
    public $image = true; // default will set for fonts (false)
    public $items = [];

    public function init()
    {
        parent::init();
        SocialConnectAsset::register(\Yii::$app->view);
        $this->registerTranslations();
        $this->title = empty($this->title)
            ? Yii::t('nurielmeni/socialConnect/', $this->name . 'social page')
            : $this->title;
    }

    public function registerTranslations()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['nurielmeni/socialConnect/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@nurielmeni/socialConnect/messages',
            'fileMap' => [
                'nurielmeni/socialConnect/messages' => 'messages.php',
            ],
        ];
    }

    public function run()
    {
        return $this->render('socialConnect', [
            'name' => $this->name,
            'title' => $this->title,
            'cssClass' => $this->cssClass,
            'linkClass' => $this->linkClass,
            'size' => $this->size,
            'color' => $this->color,
            'image' => $this->image,
            'items' => $this->items
        ]);
    }
}
