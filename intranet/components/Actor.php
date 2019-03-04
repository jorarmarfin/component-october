<?php namespace luismayta\Intranet\Components;

use Cms\Classes\ComponentBase;

class Actor extends ComponentBase
{
    public function componentDetails()
    {
        return[
            'name' => 'mi componente',
            'description' => 'Mi descripcion del componente'
        ];
    }
    public function onRun()
    {
        $this->actor = $this->myfuncion();
    }
    public function myfuncion()
    {
        return 'hola mundo';
    }
    
}




