<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
    /**
     * Create a new component instance.
     */
    public $method;
    public $action;
    public $submit;
    public function __construct($method,$action,$submit)
    {
        $this->method=$method;
        $this->action=$action;
        $this->submit=$submit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
