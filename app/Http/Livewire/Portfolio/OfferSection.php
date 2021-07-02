<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Action;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class OfferSection extends Component
{
    public $edit_offer,$edit_individual_offer,$add_offer,$new_offer_title,$new_offer_text,$new_offer_icon,$current_key;
    public $data,$data1;
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

    public function Add($arr,$var)
    {
        $newValue=[
            'title'=>$this->new_offer_title,
            'text'=>$this->new_offer_text,
            'icon'=>$this->new_offer_icon,
        ];
        array_push($this->data[$arr],$newValue);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var = false;
        $this->new_offer_text=$this->new_offer_title=$this->new_offer_icon = '';
    }

    public function Delete($arr,$key)
    {

        unset($this->data[$arr][$key]);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
//        dd($this->data['education'][$key]);
    }

    public function ReqEdit($arr,$key)
    {
        $this->new_offer_title = $this->data[$arr][$key]['title'];
        $this->new_offer_text = $this->data[$arr][$key]['text'];
        $this->new_offer_icon = $this->data[$arr][$key]['icon'];
        $this->current_key = $key;
        $this->edit_individual_offer=true;
    }
    public function UpdateOffer()
    {
        $newValue=[
            'title'=>$this->new_offer_title,
            'text'=>$this->new_offer_text,
            'icon'=>$this->new_offer_icon,
        ];
        $this->data['offers'][$this->current_key] = $newValue;
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->edit_individual_offer=false;
        $this->new_offer_text=$this->new_offer_title=$this->new_offer_icon = '';

    }
    public function render()
    {
        $this->getData();
        return view('livewire.portfolio.offer-section')->extends('portfolio.portfolio')->section('portfolioContent');
    }
}
