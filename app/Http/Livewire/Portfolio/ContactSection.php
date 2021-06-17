<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Action;
use Livewire\Component;

class ContactSection extends Component
{
    public $data,$data1;
    public $contact_slug,$contact_title,$add_phone,$add_email,$new_phone_number,$current_key,$edit_individual_phone,$edit_individual_email;
    public function getData()
    {
        $this->data1 = Action::Where('action_name','portfolio')->first();
        $this->data = unserialize($this->data1->action_value);
    }
    public function Add($arr,$sub_array,$var)
    {
        $newValue=$this->new_phone_number;
        array_push($this->data[$arr][$sub_array],$newValue);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var = false;
        $this->new_phone_number = '';
    }
    public function ReqEdit($arr,$sub_array,$key,$var)
    {
        $this->new_phone_number = $this->data[$arr][$sub_array][$key];
        $this->current_key = $key;
        $this->$var=true;

    }
    public function Update($arr,$sub_array,$var)
    {
        $newValue=$this->new_phone_number;
        $this->data[$arr][$sub_array][$this->current_key] = $newValue;
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var=false;
        $this->new_phone_number= '';
    }
    public function Delete($arr,$sub_array,$key)
    {
        unset($this->data[$arr][$sub_array][$key]);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
    }
    public function render()
    {
        $this->getData();
        return view('livewire.portfolio.contact-section');
    }
}
