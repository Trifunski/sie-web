<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $links;

    public function __construct($title)
    {
        $this->title = $title;
        $this->links = [
            ['url' => '/', 'name' => 'Home'],
            ['url' => '/about', 'name' => 'About Us'],
            ['url' => '/contact', 'name' => 'Contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-component');
    }
}
