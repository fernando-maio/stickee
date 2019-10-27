<?php

namespace Src\Controllers;

use Src\Components\Widgets;

class WidgetsController
{
    /**
     * getPacks Controler is responsible to get the arguments, delivery to componets and return what is expected.
     * @param array $request - Get param
     */
    public function getPacks($request)
    {
        // New instance of component
        $widgets = new Widgets;
        $packs = $widgets->getPacks((int)$request->getQueryParams()['widgets']);

        //API return
        if(!$packs)
            echo 'Number of widgets is required';
        else
            echo $packs;
    }
}
