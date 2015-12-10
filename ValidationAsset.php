<?php

namespace parallaxsolutions\brutils;

use yii\web\AssetBundle;

class ValidationAsset extends AssetBundle {

    public $sourcePath = '@parallaxsolutions/brutils/assets';
    public $js = [
        'parallaxsolutions.validators.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}
