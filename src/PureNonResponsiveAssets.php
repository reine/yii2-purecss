<?php

namespace Reine\PureCSS;

use yii\web\AssetBundle;

/**
 * Pure CSS Non-Responsive Rollup
 */
class PureAssets extends AssetBundle
{
	public $sourcePath = '@vendor/reine/yii2-purecss/src';
	public $css = [
		'css/pure-nr-min.css',
	];
	public $js = [];
	public $depends = [];
}
