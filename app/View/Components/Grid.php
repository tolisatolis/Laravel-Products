<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class Grid extends Component
{
    /**
     * Create a new component instance.
     */
    public Collection $items;
    public function __construct(public Collection $data)
    {
        $this->items = $data;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid');
    }
}
