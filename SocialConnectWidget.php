<?php

namespace nurielmeni\SocialConnect;

use yii\base\Widget;
use yii\helpers\Url;
use nurielmeni\socialConnect\assets\SocialConnectAsset;

class SocialConnectWidget extends Widget
{


    public $name = 'social-connect';
    public $cssClass = '';
    public $linkClass = '';
    public $size = '';
    public $color = '';
    public $items = [];

    public function init()
    {
        parent::init();
        SocialConnectAsset::register(\Yii::$app->view);
    }

    public function run()
    {
        return $this->render('socialConnect', [
            'name' => $this->name,
            'cssClass' => $this->cssClass,
            'linkClass' => $this->linkClass,
            'size' => $this->size,
            'color' => $this->color,
            'items' => $this->items
        ]);
    }
}
