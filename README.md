# Wordpress Twig dump()

This must use plugin allow `{{ dump() }}` for your WordPress development.

## Specifications

* Timber libray was needed
* Autoload your must-use plugins with [bedrock-autoloader](https://github.com/roots/bedrock/blob/master/web/app/mu-plugins/bedrock-autoloader.php)

Tested with :

* Wordpress 4.5.* => 5.3.*
* Wordpress single / multi website

### Installation

#### With composer

```
composer require agencearcange/wp-twig-dump --dev
```

#### Without composer

Just copy this plugin into your `plugin` / `muplugin` folder