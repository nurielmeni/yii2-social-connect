<?php

namespace app\widgets\socialConnect\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SocialConnectAsset extends AssetBundle
{
    public $publishOptions = [
        'forceCopy' => YII_DEBUG
    ];
    public $sourcePath = '@app/widgets/socialConnect/assets';
    public $css = [
        'css/socialConnect.css',
        'css/socialFonts.css',
    ];
}