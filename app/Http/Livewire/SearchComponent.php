<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Userdetails;

class SearchComponent extends Component
{
    public $search = '';
    public function render()
    {
        $userDetails = Userdetails::select('users_details.*', 'departments.name as department_name', 'designations.name as designation_name')
        ->join('departments', 'users_details.fk_department', '=', 'departments.id')
        ->join('designations', 'users_details.fk_designation', '=', 'designations.id')
        ->where(function ($query) {
            $query->where('users_details.name', 'like', '%' . $this->search . '%')
                  ->orWhere('departments.name', 'like', '%' . $this->search . '%')
                  ->orWhere('designations.name', 'like', '%' . $this->search . '%');
        })
        ->orderBy('users_details.name')
        ->orderBy('departments.name')
        ->orderBy('designations.name')
        ->get();
    $departments = Department::all();
    $designations = Designation::all();
    

    return view('livewire.search-component', [
        'userDetails' => $userDetails,
        'departments' => $departments,
        'designations' => $designations,
    ])->layout('livewire.layouts.base');
    
    
    
    
    
    
        
      
    }
}
