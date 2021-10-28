@extends('layouts.base')
@section('title')
Admin Dashboard
@endsection


@section('content')

<div class="row vh-100">

        <!-- Sidebar -->
        <div class="flex-shrink-0 vh-100 bg-dark shadow-sm" style="width: 280px;">
            <x-Sidebar page="$page"/>
        </div>


        <div class="col" style="margin-right:-15px;">
            
            <!-- Navbar -->
            <x-Navbar/>
            

            <!-- Dashboard -->
            <div class="row container">
                @if($page && $page!=='dashboard')
                <div class="row rounded-start bg-white border-primary mx-auto p-4 mt-4" style="border-left-style: solid; border-left-width: 3px;">
                @endif
                    @switch($page)
                        @case('dashboard')
                            <x-Dashboard />
                            @break
                        @case('branch')
                            <x-BranchList />
                            @break
                        @case('addbranch')
                            <x-BranchAdd />
                            @break;
                        @case('newstaff')
                            <x-Staff />
                            @break;
                        @case('stafflist')
                            <x-StaffList />
                            @break;
                        @default
                            <x-Dashboard />
                    @endswitch
                </div>

            </div>
        </div>
        

</div>

@endsection