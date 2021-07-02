<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public $selected = [];

    protected $rules = [
        'user.name'=>'required',
        'user.email'=>'required',
    ];
    public function mount($user)
    {
        if(Gate::denies('user_edit')){
            redirect()->route('dashboard');
        }else{
            $this->user = User::with('roles')->find($user);
        $this->selected = $this->user->roles->pluck('id')->map(fn($id)=> (string) $id);
        }
        
    }
    public function Update()
    {
        $this->validate();
        $this->user->update();
        $this->user->roles()->sync($this->selected);
        return redirect()->route('admin.users.index');
    }
    public function render()
    {
        return view('livewire.edit-user',[
            'roles'=>Role::all(),
        ])->extends('layouts.admin');
    }
}
