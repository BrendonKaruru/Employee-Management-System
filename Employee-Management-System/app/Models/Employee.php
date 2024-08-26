<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $position
 * @property $department_id
 * @property $hire_date
 * @property $created_at
 * @property $updated_at
 *
 * @property EmployeeProject[] $employeeProjects
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'position', 'department_id', 'hire_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeeProjects()
    {
        return $this->hasMany(\App\Models\EmployeeProject::class, 'id', 'employee_id');
    }
    
}
