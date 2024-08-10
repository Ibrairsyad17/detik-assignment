<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TimelineRange extends Component
{
    public $title;
    public $dateRange;
    public $description;
    public function __construct($title, $date, $description)
    {
        $this->title = $title;
        $this->dateRange = $date;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.timeline-range');
    }
}
