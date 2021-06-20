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
            'action_value' => 'a:40:{s:8:"greeting";s:8:"Hi, I am";s:12:"display_name";s:18:"Azijul Hakim Rasel";s:12:"typing_title";s:32:"Programmer , Developer , Dreamer";s:15:"favourite_quote";s:40:"Stay Calm, Be Unique, Earn Your Identity";s:17:"top_button_1_text";s:11:"Download CV";s:17:"top_button_1_link";s:1:"#";s:17:"top_button_2_text";s:10:"Contact Me";s:17:"top_button_2_link";s:1:"#";s:18:"experience_1_title";s:9:"1 + years";s:18:"experience_2_title";s:9:"2 + years";s:18:"experience_3_title";s:9:"3 + years";s:21:"experience_1_subtitle";s:14:"Development 1 ";s:21:"experience_2_subtitle";s:13:"Development 2";s:21:"experience_3_subtitle";s:13:"Development 3";s:6:"i_slug";s:8:"My Intro";s:7:"i_title";s:8:"About Me";s:5:"i_des";s:41:"I am Azijul Hakim Rasel. I am a student .";s:9:"int_title";s:11:"My Interest";s:7:"int_1_t";s:5:"Music";s:7:"int_2_t";s:6:"Travel";s:7:"int_3_t";s:5:"Movie";s:7:"int_4_t";s:5:"Photo";s:8:"edu_slug";s:11:"Education 1";s:9:"edu_title";s:11:"Education 2";s:9:"education";a:2:{i:0;a:3:{s:5:"title";s:3:"BSC";s:4:"dept";s:3:"CSE";s:4:"year";s:11:"2018 - 2021";}i:1;a:3:{s:5:"title";s:3:"HSC";s:4:"dept";s:7:"Science";s:4:"year";s:12:"2009 - 2014 ";}}s:10:"experience";a:2:{i:0;a:3:{s:5:"title";s:20:"Senior Software lead";s:4:"dept";s:8:"AHR tech";s:4:"year";s:11:"2021 - 3021";}i:1;a:3:{s:5:"title";s:20:"Senior Software lead";s:4:"dept";s:8:"AHR tech";s:4:"year";s:11:"2021 - 3021";}}s:10:"offer_slug";s:14:"Specialized In";s:11:"offer_title";s:12:"What I offer";s:6:"offers";a:1:{i:0;a:3:{s:5:"title";s:9:"SEO title";s:4:"text";s:33:"textasdgasd asdjas dasdasdasdasda";s:4:"icon";s:441:"<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"> </path>";}}s:14:"expertise_slug";s:13:"Why Choose Me";s:15:"expertise_title";s:17:"My Expertise Area";s:14:"expertise_left";a:1:{i:0;a:2:{s:5:"title";s:20:"Facebook Marketing 1";s:5:"value";s:3:"50%";}}s:15:"expertise_right";a:1:{i:0;a:2:{s:5:"title";s:26:"Right Facebook Marketing 1";s:5:"value";s:3:"50%";}}s:16:"recent_work_slug";s:12:"My Portfolio";s:17:"recent_work_title";s:12:"Recent Works";s:18:"recent_work_groups";a:2:{i:0;s:3:"all";i:1;s:7:"laravel";}s:17:"recent_work_items";a:1:{i:1;a:3:{s:5:"image";s:44:"qO3QE9QA5qEUxu9SyuZ9o2MPbntu60sT5YJttz51.png";s:5:"title";s:10:"Car Rental";s:5:"group";s:1:"2";}}s:12:"contact_slug";s:12:"Get in Touch";s:13:"contact_title";s:15:"Contact with me";s:15:"contact_details";a:4:{s:10:"phone_icon";s:223:"<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>";s:10:"email_icon";s:223:"<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>";s:6:"phones";a:1:{i:0;s:14:"+8801303132018";}s:6:"emails";a:1:{i:1;s:19:"azharasel@gmail.com";}}}',
        ];
    }
}
