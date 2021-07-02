<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddUser extends Component
{
    public $selected = [];
    public $name;
    public $email="@gmail.com";
    public $password;

    protected $rules=[
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required',
    ];
    public function Add()
    {
        $this->validate();
        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
        ]);
        $user->roles()->sync($this->selected);
        return redirect()->route('admin.users.index');
    }
    public function render()
    {
        return view('livewire.add-user',[
            'roles'=>Role::all(),
        ])->extends('layouts.admin');
    }
}
