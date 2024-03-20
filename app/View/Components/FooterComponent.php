<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterComponent extends Component
{
    /**
     * Create a new component instance.
     */

    
    public $copyrightInfo;
    public $age;
    
    public function __construct()
    {

        $age = date('Y');

        $this->copyrightInfo = $age . ' Smart Innovative Education.';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer-component');
    }
}
