<?php

namespace Md3dev\Html;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Md3dev\Html\FormBuilder
 */
class FormFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}
