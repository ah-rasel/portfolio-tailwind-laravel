<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithPagination;
    public $selected= [];
    public $deleted_record;

    public function Delete($id)
    {
        $role = Role::find($id);
        $this->deleted_record = $role->title;
        $role->delete();
        $this->emitSelf('record_deleted');
    }
    public function DeleteSelected()
    {
        Role::destroy($this->selected);
        $this->deleted_record = "Selected Roles";
        $this->emitSelf('record_deleted');
        $this->selected = [];
    }
    
    public function render()
    {
        return view('livewire.roles',[
            'roles'=>Role::with(['permissions'])->orderBy('title','DESC')
                    ->paginate(50),
        ])->extends('layouts.admin');
    }
}
