<?php

namespace nurielmeni\socialConnect\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SocialConnectAsset extends AssetBundle
{
    public $publishOptions = [
        'forceCopy' => YII_DEBUG
    ];
    public $sourcePath = '@nurielmeni/socialConnect/assets';
    public $css = [
        'css/socialConnect.css',
        'css/socialFonts.css',
    ];
}
