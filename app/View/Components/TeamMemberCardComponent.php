<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeamMemberCardComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $aos;
    public $name;
    public $position;
    public $image;
    public $linkedin;
    public $delay;

    public function __construct($aos, $name, $position, $image, $linkedin, $delay)
    {
        $this->aos = $aos;
        $this->name = $name;
        $this->position = $position;
        $this->image = $image;
        $this->linkedin = $linkedin;
        $this->delay = $delay;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team-member-card-component');
    }
}
