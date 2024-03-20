<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardsComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $svg;
    public $bgColor;
    public $title;
    public $description;

    public function __construct($svg, $bgColor, $title, $description)
    {
        $this->svg = $svg;
        $this->bgColor = $bgColor;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards-component');
    }
}
