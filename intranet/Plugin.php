<?php namespace luismayta\Intranet;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'luismayta\Intranet\Components\Actor' => 'actor'
        ];
    }

    public function registerSettings()
    {
    }
}
