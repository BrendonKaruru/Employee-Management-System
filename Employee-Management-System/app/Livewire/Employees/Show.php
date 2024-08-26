<?php

namespace App\Livewire\Employees;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public EmployeeForm $form;

    public function mount(Employee $employee)
    {
        $this->form->setEmployeeModel($employee);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.employee.show', ['employee' => $this->form->employeeModel]);
    }
}
