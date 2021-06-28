<?php

namespace App\Http\Livewire\Portfolio\Cmd;

use Livewire\Component;

class CmdPage extends Component
{
    public function render()
    {
        return view('livewire.portfolio.cmd.cmd-page')
        ->extends('layouts.user');
    }
}
