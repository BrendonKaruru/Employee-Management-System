<?php

namespace App\Livewire\Employees;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public EmployeeForm $form;

    public function mount(Employee $employee)
    {
        $this->form->setEmployeeModel($employee);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('employees.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.employee.create');
    }
}
