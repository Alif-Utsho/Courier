<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Branch;
use App\Models\Agent;

class Dashboard extends Component
{
    public $branch, $agent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->branch = Branch::all()->count();
        $this->agent = Agent::all()->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard');
    }
}
