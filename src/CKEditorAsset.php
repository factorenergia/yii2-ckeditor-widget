<?php

namespace factorenergia\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorAsset
 *
 */
class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ckeditor/ckeditor/';
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}
