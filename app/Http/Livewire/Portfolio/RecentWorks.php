<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Action;
use http\Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class RecentWorks extends Component
{
    use WithFileUploads;

    public $data,$data1,$sample_group;

    public $workImage;
    public $work_slug,$work_title,$add_new_work_sample,$new_group,$new_workImage,$previous_workImage;
    public $new_work_slug,$new_work_title,$edit_individual_work,$add_work_categories,$new_work_category='',$edit_individual_work_group,$edit_work_category;

    protected $rules = [
        'data.recent_work_slug' => 'required|string',
        'data.recent_work_title' => 'required|string',
    ];
    /**
     * @var mixed
     */
    public $current_key;

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

    public function AddGroup($arr,$var)
    {
        $value=$this->new_work_category;
        array_push($this->data[$arr],$value);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var = false;
        $this->new_work_category= '';
    }

    public function Add($arr,$var)
    {
        $image_url = $this->workImage->store('/','portfolio');
        $newValue=[
            'image'=>$image_url,
            'title'=>$this->new_work_title,
            'group'=>$this->sample_group,
        ];
        array_push($this->data[$arr],$newValue);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var = false;
        $this->new_work_title=$this->workImage = '';
    }

    public function ReqEditGroup($arr,$key)
    {
        $this->edit_work_category = $this->data[$arr][$key];
        $this->current_key = $key;
        $this->edit_individual_work_group=true;

    }
    public function UpdateGroup($arr,$var)
    {
        $value=$this->edit_work_category;
        $this->data[$arr][$this->current_key] = $value;
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->$var=false;
        $this->edit_work_category= '';

    }
    public function ReqEdit($arr,$key,$var)
    {
        $this->new_work_title = $this->data[$arr][$key]['title'];
        $this->previous_workImage = $this->data[$arr][$key]['image'];
        $this->new_group = $this->data[$arr][$key]['group'];
        $this->current_key = $key;
        $this->$var=true;
        $this->add_new_work_sample = $this->add_work_categories=false;
    }

    public function closeEditIndividualWork()
    {
        $this->edit_individual_work=false;
        $this->workImage='';
        $this->new_workImage='';

    }
    public function UpdateWork($arr,$key)
    {
        if ($this->new_workImage){
            $image_url = $this->new_workImage->store('/','portfolio');
            try {
                Storage::disk('portfolio')->delete($this->data[$arr][$key]['image']);
            }
            catch (\ErrorException $errorException){
            }
        }else{
            $image_url =$this->previous_workImage;
        }
        $newValue=[
            'image'=>$image_url,
            'title'=>$this->new_work_title,
            'group'=>$this->new_group,
        ];
        $this->data[$arr][$this->current_key] = $newValue;
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
        $this->edit_individual_work=false;
        $this->new_work_title=$this->new_group = '';
    }
    public function Delete($arr,$key)
    {
        try {
            Storage::disk('portfolio')->delete($this->data[$arr][$key]['image']);
        }
        catch (\ErrorException $errorException){
        }
        unset($this->data[$arr][$key]);
        $data_temp = serialize($this->data);
        $this->data1->action_value = $data_temp;
        $this->data1->update();
    }

    public function render()
    {
        $this->getData();
        return view('livewire.portfolio.recent-works');
    }
}
