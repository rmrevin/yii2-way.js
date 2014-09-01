Yii 2 Way.js Asset Bundle
===============================

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-wayjs": "*"
    }
}
```

Usage
-----
In view
```php
<?
// ...

rmrevin\yii\wayjs\AssetBundle::register($this);

```

or as dependency in your asset bundle
```php
<?
// ...

class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\rmrevin\yii\wayjs\AssetBundle'
	];
}

```