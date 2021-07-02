<?php

namespace App\Http\Livewire\Permission;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class EditRole extends Component
{
    public $role;
    public $selected = [];
    protected $rules=[
        'role.title'=>'required',
    ];
    public function mount($role)
    {
        if(Gate::denies('role_edit')){
            redirect()->route('dashboard');
        }else{
            $this->role = Role::with('permissions')->find($role);
            $this->selected = $this->role->permissions->pluck('id')->map(fn($id)=> (string) $id);
        }
    }
    public function Update()
    {
        if(Gate::denies('role_edit')){
            redirect()->route('dashboard');
        }else{
        $this->validate();
        $this->role->update();
        $this->role->permissions()->sync($this->selected);
        // return redirect()->route('admin.roles.index');
        }
    }
    public function render()
    {
        return view('livewire.permission.edit-role',[
            'permissions'=>Permission::all()
        ])->extends('layouts.admin');
    }
}
