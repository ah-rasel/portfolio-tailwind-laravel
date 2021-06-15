<?php

namespace Database\Factories;

use App\Models\Action;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Action::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'action_name' => 'portfolio',
            'action_value' => 'a:26:{s:8:"greeting";s:8:"Hi, I am";s:12:"display_name";s:18:"Azijul Hakim Rasel";s:12:"typing_title";s:29:"Programmer, developer,dreamer";s:15:"favourite_quote";s:20:"Stay Calm, Be Unique";s:17:"top_button_1_text";s:11:"Download CV";s:17:"top_button_1_link";s:30:"https://facebook.com/azharasel";s:17:"top_button_2_text";s:10:"Contact Me";s:17:"top_button_2_link";s:30:"https://facebook.com/azharasel";s:18:"experience_1_title";s:9:"1 + years";s:18:"experience_2_title";s:9:"2 + years";s:18:"experience_3_title";s:9:"3 + years";s:21:"experience_1_subtitle";s:14:"Development 1 ";s:21:"experience_2_subtitle";s:13:"Development 2";s:21:"experience_3_subtitle";s:13:"Development 3";s:6:"i_slug";s:8:"About Me";s:7:"i_title";s:8:"About Me";s:5:"i_des";s:8:"About Me";s:9:"int_title";s:8:"About Me";s:7:"int_1_t";s:5:"Music";s:7:"int_2_t";s:6:"Travel";s:7:"int_3_t";s:5:"Movie";s:7:"int_4_t";s:5:"Photo";s:8:"edu_slug";s:11:"Education 1";s:9:"edu_title";s:11:"Education 2";s:9:"education";a:2:{i:0;a:3:{s:6:"degree";s:3:"BSC";s:4:"dept";s:3:"CSE";s:4:"year";s:11:"2018 - 2021";}i:1;a:3:{s:6:"degree";s:3:"HSC";s:4:"dept";s:7:"Science";s:4:"year";s:12:"2009 - 2014 ";}}s:10:"experience";a:2:{i:0;a:3:{s:5:"title";s:20:"Senior Software lead";s:4:"dept";s:8:"AHR tech";s:4:"year";s:11:"2021 - 3021";}i:1;a:3:{s:5:"title";s:20:"Senior Software lead";s:4:"dept";s:8:"AHR tech";s:4:"year";s:11:"2021 - 3021";}}}',
        ];
    }
}
