<?php

namespace App\Livewire\Employees;

use App\Models\Employee;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $employees = Employee::paginate();

        return view('livewire.employee.index', compact('employees'))
            ->with('i', $this->getPage() * $employees->perPage());
    }

    public function delete(Employee $employee)
    {
        $employee->delete();

        return $this->redirectRoute('employees.index', navigate: true);
    }
}
