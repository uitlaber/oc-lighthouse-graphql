<?php namespace Uit\Lighthouse;

use App;
use System\Classes\PluginBase;
use Illuminate\Config\Repository\Config;



class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        App::register('\Uit\Lighthouse\Provider\LighthouseServiceProvider');
        //AliasLoader::getInstance()->alias('Socialite', 'Laravel\Socialite\Facades\Socialite');

        // $pluginNamespace = str_replace('\\', '.', strtolower(__NAMESPACE__));

        // // Get the packages to boot
        // $packages = Config::get($pluginNamespace . '::packages');

        // // Boot each package
        // foreach ($packages as $name => $options) {
        //     // Setup the configuration for the package, pulling from this plugin's config
        //     if (!empty($options['config']) && !empty($options['config_namespace'])) {
        //         Config::set($options['config_namespace'], $options['config']);
        //     }
        // }

    }


}
