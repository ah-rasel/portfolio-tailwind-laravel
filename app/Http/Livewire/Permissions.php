<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;

    public $selected= [];
    public $deleted_record;

    public function Delete($id)
    {
        $permission = Permission::find($id);
        $this->deleted_record = $permission->title;
        $permission->delete();
        $this->emitSelf('record_deleted');
    }
    public function DeleteSelected()
    {
        Permission::destroy($this->selected);
        $this->deleted_record = "Selected Permissions";
        $this->emitSelf('record_deleted');
        $this->selected = [];
    }
    public function render()
    {
        return view('livewire.permissions',[
            'permissions'=>Permission::orderBy('id','DESC')->paginate(50),
        ])->extends('layouts.admin');
    }
}
