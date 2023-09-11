<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class Grid extends Component
{
    /**
     * Create a new component instance.
     */
    public LengthAwarePaginator $items;
    public array $columns;
    public string $title;
    public string $editRoute;
    public string $deleteRoute;
    public string $detailRoute;
    public array $labels;
    public function __construct(LengthAwarePaginator $data, array $columns, string $title, string $editRoute, string $deleteRoute, array $labels, string $detailRoute)
    {
        $this->items = $data;
        $this->title = $title;
        $this->editRoute = $editRoute;
        $this->deleteRoute = $deleteRoute;
        $this->labels = $labels;
        $this->columns = $columns;
        $this->detailRoute = $detailRoute;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid');
    }
}
