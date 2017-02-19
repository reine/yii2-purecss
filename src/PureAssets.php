<?php

namespace Reine\PureCSS

use yii\web\AssetBundle;

class PureAssets extends AssetBundle
{
	public $sourcePath = '@vendor/yahoo/purecss/src';

	public $css = [];

	public $js = [];

	public $depends = [];
}
