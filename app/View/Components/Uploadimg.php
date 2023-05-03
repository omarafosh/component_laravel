<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Uploadimg extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $multiple;
    public $limit;
    public function __construct($name,$multiple,$limit)
    {
        $this->name=$name;
        $this->multiple=$multiple;
        $this->limit=$limit;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.uploadimg');
    }
}
