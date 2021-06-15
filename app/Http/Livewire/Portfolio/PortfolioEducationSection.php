<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Action;
use Livewire\Component;

class PortfolioEducationSection extends Component
{
    public $edit_journey,$add_education,$add_experience,$edu_degree,$edu_dept,$edu_year;
    public $data,$data1;

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
            'title'=>$this->edu_degree,
            'dept'=>$this->edu_dept,
            'year'=>$this->edu_year,
        ];
        array_push($this->data[$arr],$newValue);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var = false;
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
        return view('livewire.portfolio.portfolio-education-section');
    }
}
