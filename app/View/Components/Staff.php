<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Branch;

class Staff extends Component
{
    public $branches;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->branches = Branch::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.Staff.staff-add');
    }
}
