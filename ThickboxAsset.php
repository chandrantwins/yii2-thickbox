<?php

/**
 * @link https://github.com/chandrantwins/yii2-thickbox
 * @copyright Copyright (c) 2015 Chandran Nepolean
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace chandran\widgets;

use Yii;
use yii\web\AssetBundle;

class ThickboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/thickbox';
    public $js = [
        'thickbox.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

