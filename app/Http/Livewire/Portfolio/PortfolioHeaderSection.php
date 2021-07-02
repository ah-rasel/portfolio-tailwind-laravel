<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Action;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class PortfolioHeaderSection extends Component
{
    public $data,$data1;
    public $edit_greeting,$edit_display_name,$edit_typing_title,$edit_favourite_quote,$edit_button_1,$edit_button_2;
    public function mount()
    {
        if(Gate::denies('portfolio_access')){
            redirect()->route('dashboard');
        }
    }
    protected $rules = [
        'data.greeting' => 'required|string',
        'data.display_name' => 'required|string',
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
        return view('livewire.portfolio.portfolio-header-section')->extends('portfolio.portfolio')->section('portfolioContent');
    }
}
