<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EmployeeShow extends Component
{

    public Employee $employee;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.employee-show');
    }
}
