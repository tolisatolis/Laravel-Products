<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class DropDown extends Component
{
    /**
     * Create a new component instance.
     */
    public LengthAwarePaginator $items;
    public string $label;
    public string $formControllName;
    public bool $disabled;
    public int $existingRecordId;
    public function __construct(LengthAwarePaginator $data, string $label, string $formControllName, int $existingRecordId, bool $disabled)
    {
        $this->items = $data;
        $this->label = $label;
        $this->formControllName = $formControllName;
        $this->existingRecordId = $existingRecordId;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.drop-down');
    }
}
