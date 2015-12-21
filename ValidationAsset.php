<?php

namespace wfcreations\brutils;

use yii\web\AssetBundle;

class ValidationAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/brutils/assets';
    public $js = [
        'wfcreations.brutilsvalidators.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}
