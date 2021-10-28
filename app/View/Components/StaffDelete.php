<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Agent;

class StaffDelete extends Component
{
    public $staff;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($staff)
    {
        //
        $this->staff = Agent::where('id', $staff)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.Staff.staff-delete');
    }
}
