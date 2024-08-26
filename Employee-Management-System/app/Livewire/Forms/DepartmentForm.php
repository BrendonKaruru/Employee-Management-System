<?php

namespace App\Livewire\Forms;

use App\Models\Department;
use Livewire\Form;

class DepartmentForm extends Form
{
    public ?Department $departmentModel;
    
    public $name = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
        ];
    }

    public function setDepartmentModel(Department $departmentModel): void
    {
        $this->departmentModel = $departmentModel;
        
        $this->name = $this->departmentModel->name;
    }

    public function store(): void
    {
        $this->departmentModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->departmentModel->update($this->validate());

        $this->reset();
    }
}
