<?php
/**
 * AssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\wayjs;

/**
 * Class AssetBundle
 * @package rmrevin\yii\wayjs
 */
class AssetBundle extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/rmrevin/way.js';

    public $js = [
        'way.min.js',
    ];
} 