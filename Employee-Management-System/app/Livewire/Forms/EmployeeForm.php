<?php

namespace App\Livewire\Forms;

use App\Models\Employee;
use Livewire\Form;

class EmployeeForm extends Form
{
    public ?Employee $employeeModel;
    
    public $name = '';
    public $email = '';
    public $position = '';
    public $department_id = '';
    public $hire_date = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'email' => 'required|string',
			'position' => 'required|string',
			'department_id' => 'required',
			'hire_date' => 'required',
        ];
    }

    public function setEmployeeModel(Employee $employeeModel): void
    {
        $this->employeeModel = $employeeModel;
        
        $this->name = $this->employeeModel->name;
        $this->email = $this->employeeModel->email;
        $this->position = $this->employeeModel->position;
        $this->department_id = $this->employeeModel->department_id;
        $this->hire_date = $this->employeeModel->hire_date;
    }

    public function store(): void
    {
        $this->employeeModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->employeeModel->update($this->validate());

        $this->reset();
    }
}
