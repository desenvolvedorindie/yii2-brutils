<?php

namespace parallaxsolutions\brutils;

use yii\web\AssetBundle;

class ValidationAsset extends AssetBundle {

    public $sourcePath = '@parallaxsolutions/brutils/assets';
    public $js = [
        'parallaxsolutions.brutilsvalidators.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}
