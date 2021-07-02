<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Action;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class ExpertiseArea extends Component
{
    public $expertise_slug,$expertise_title,$add_expertise_left,$add_expertise_right,$current_key;
    public $edit_individual_expertise_left,$edit_individual_expertise_right;
    public $new_expertise_title='', $new_expertise_value='';
    public $data,$data1;
    public function mount()
    {
        if(Gate::denies('portfolio_access')){
            redirect()->route('dashboard');
        }
    }
    public function getData()
    {
        $this->data1 = Action::Where('action_name','portfolio')->first();
        $this->data = unserialize($this->data1->action_value);
    }

    public function Add($arr,$var)
    {
        $newValue=[
            'title'=>$this->new_expertise_title,
            'value'=>$this->new_expertise_value,
        ];
        array_push($this->data[$arr],$newValue);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var = false;
        $this->new_expertise_value = $this->new_expertise_title = '';
    }

    public function ReqEdit($arr,$key,$var)
    {
        $this->new_expertise_title = $this->data[$arr][$key]['title'];
        $this->new_expertise_value = $this->data[$arr][$key]['value'];
        $this->current_key = $key;
        $this->$var=true;
        $this->add_expertise_left = $this->add_expertise_right=false;
    }

    public function UpdateExpertise($arr)
    {
        $newValue=[
            'title'=>$this->new_expertise_title,
            'value'=>$this->new_expertise_value,
        ];
        $this->data[$arr][$this->current_key] = $newValue;
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->edit_individual_expertise_left = $this->edit_individual_expertise_right =false;
        $this->new_expertise_title=$this->new_expertise_value = '';

    }

    public function Delete($arr,$key)
    {

        unset($this->data[$arr][$key]);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
//        dd($this->data['education'][$key]);
    }

    public function render()
    {
        $this->getData();
        return view('livewire.portfolio.expertise-area')->extends('portfolio.portfolio')->section('portfolioContent');
    }
}
