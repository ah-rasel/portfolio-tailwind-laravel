<?php

namespace App\Http\Livewire;

use App\Models\Action;
use Livewire\Component;

class PortfolioIntroSection extends Component
{
    public $data,$data1;
    public $edit_intro_slug,$edit_intro_title,$edit_intro_description,$edit_interest_title,$edit_interests;

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
        return view('livewire.portfolio-intro-section');
    }
}
