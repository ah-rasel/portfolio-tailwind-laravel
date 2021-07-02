<?php

namespace App\Http\Livewire;

use App\Models\Action;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class PortfolioFloatingSection extends Component
{
    public $data,$data1;
    public $edit_experience_1,$edit_experience_2,$edit_experience_3;
    public function mount()
    {
        if(Gate::denies('portfolio_access')){
            redirect()->route('dashboard');
        }
    }
    protected $rules = [
        'data.experience_1_title' => 'required|string',
        'data.experience_2_title' => 'required|string',
        'data.experience_3_title' => 'required|string',
        'data.experience_1_subtitle' => 'required|string',
        'data.experience_2_subtitle' => 'required|string',
        'data.experience_3_subtitle' => 'required|string',
    ];

    public function getData()
    {
        $this->data1 = Action::Where('action_name','portfolio')->first();
        $this->data = unserialize($this->data1->action_value);
    }

    public function save($var)
    {
        $this->validate();
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var = false;

    }
    public function render()
    {
        $this->getData();
        return view('livewire.portfolio-floating-section')->extends('portfolio.portfolio')->section('portfolioContent');
    }
}
