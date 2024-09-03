<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.home', [
            'employees' => Employee::all(),
            'services' => Service::all(),
        ]);
    }
}
