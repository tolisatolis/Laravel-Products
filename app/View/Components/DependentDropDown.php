<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class DependentDropDown extends Component
{
    /**
     * Create a new component instance.
     */
    public LengthAwarePaginator $items;
    public string $label;
    public string $childLabel;
    public string $formControllName;
    public int $existingRecordId;
    public int $existingChildRecordId;
    public string $childUrl;
    public string $childControllName;
    public function __construct(LengthAwarePaginator $data, string $label, string $formControllName, int $existingRecordId, int $existingChildRecordId, string $childUrl, string $childControllName, string $childLabel)
    {
        $this->items = $data;
        $this->label = $label;
        $this->formControllName = $formControllName;
        $this->existingRecordId = $existingRecordId;
        $this->existingChildRecordId = $existingChildRecordId;
        $this->childUrl = $childUrl;
        $this->childControllName = $childControllName;
        $this->childLabel = $childLabel;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dependent-drop-down');
    }
}
