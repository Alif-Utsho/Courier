<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Agent;
use App\Models\User;

class StaffList extends Component
{
    public $staff;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->staff = Agent::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.Staff.staff-list');
    }
}
