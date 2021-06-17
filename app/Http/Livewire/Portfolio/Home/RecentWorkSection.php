<?php

namespace App\Http\Livewire\Portfolio\Home;

use App\Models\Action;
use Livewire\Component;

class RecentWorkSection extends Component
{
    public $data,$data1;
    public $selected_group='0';
    public $recent_works=array();

    public function setGroup($val='0')
    {
        $this->recent_works['recent_work_items']=[];
        $this->selected_group=$val;
//        dd($this->selected_group);
        if ($this->selected_group == 0){
            $this->recent_works['recent_work_items']= $this->data['recent_work_items'];
//            dd($this->recent_works);
        }
        else{
         foreach ($this->data['recent_work_items'] as $key=>$recent_work_item){
             if ($this->selected_group == $recent_work_item['group']){
                 array_push($this->recent_works['recent_work_items'],$recent_work_item);
             }
         }
//            dd($this->recent_works);

        }

    }

    public function mount($data)
    {
        $this->data = $data;
        $this->setGroup();
    }
    public function render()
    {
        return view('livewire.portfolio.home.recent-work-section');
    }
}
