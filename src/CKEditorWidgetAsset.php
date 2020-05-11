<?php

namespace factorenergia\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/factorenergia/yii2-ckeditor-widget/src/assets/';

    public $depends = [
        'factorenergia\ckeditor\CKEditorAsset'
    ];

    public $js = [
        'factorenergia-ckeditor.widget.js'
    ];
}
