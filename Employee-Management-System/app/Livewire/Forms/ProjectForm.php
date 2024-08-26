<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Livewire\Form;

class ProjectForm extends Form
{
    public ?Project $projectModel;
    
    public $name = '';
    public $description = '';
    public $start_date = '';
    public $end_date = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'description' => 'string',
			'start_date' => 'required',
        ];
    }

    public function setProjectModel(Project $projectModel): void
    {
        $this->projectModel = $projectModel;
        
        $this->name = $this->projectModel->name;
        $this->description = $this->projectModel->description;
        $this->start_date = $this->projectModel->start_date;
        $this->end_date = $this->projectModel->end_date;
    }

    public function store(): void
    {
        $this->projectModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->projectModel->update($this->validate());

        $this->reset();
    }
}
