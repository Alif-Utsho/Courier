<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Branch;
use App\Models\Agent;

class StaffUpdate extends Component
{
    public $branches, $staff;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($staff)
    {
        //
        $this->branches = Branch::all();
        $this->staff = Agent::where('id', $staff)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.Staff.staff-update');
    }
}
