<?php

namespace App\Http\Livewire\Permission;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;

class AddRoles extends Component
{
    public $title;
    public $selected = [];
    protected $rules=[
        'title'=>'required',
    ];
    public function Add()
    {
        $this->validate();
        $role = Role::create([
            'title'=>$this->title,
        ]);
        $role->permissions()->sync($this->selected);
        return redirect()->route('admin.roles.index');
    }
    public function render()
    {
        return view('livewire.permission.add-roles',[
            'permissions'=>Permission::all()
        ])->extends('layouts.admin');
    }
}
