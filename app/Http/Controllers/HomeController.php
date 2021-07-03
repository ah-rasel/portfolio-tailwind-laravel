<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHomePage()
    {
        
        // $data2 = [
        //         "greeting"=> "Hi, I am",
        //         "display_name"=> "Azijul Hakim Rasel",
        //         "typing_title"=> "Programmer , Developer , Dreamer",
        //         "favourite_quote"=> "Stay Calm, Be Unique, Earn Your Identity",
        //         "top_button_1_text"=> "Download CV",
        //         "top_button_1_link"=> "#",
        //         "top_button_2_text"=> "Contact Me",
        //         "top_button_2_link"=> "#contact",
        //         "experience_1_title"=> "3+ Years",
        //         "experience_2_title"=> "More Than 50+",
        //         "experience_3_title"=> "Real Projects",
        //         "experience_1_subtitle"=> "Development Experience ",
        //         "experience_2_subtitle"=> "Projects Developed in Recent Years",
        //         "experience_3_subtitle"=> "From Real Clients on Marketplace",
        //         "i_slug"=> "My Intro",
        //         "i_title"=> "About Me",
        //         "i_des"=> "I am Azijul Hakim Rasel. I am a final year student of the Department of CSE in IUBAT. </br>\nBesides my study, I love to work with web development. I mostly enjoy working on the backend. Most of the time, I use PHP and one of its famous frameworks 'Laravel' for development purpose.</br>Rather these I have learned C, C++, C#, and Java .</br>",
        //         "int_title"=> "My Interest",
        //         "int_1_t"=> "Music",
        //         "int_2_t"=> "Travel",
        //         "int_3_t"=> "Movie",
        //         "int_4_t"=> "Photo",
        //         "edu_slug"=> "My Qualification",
        //         "edu_title"=> "Awesome Journey",
        //         "education"=> [
        //           "1"=> [
        //             "title"=> "Bachelor of Science (B.Sc)",
        //             "dept"=> "Computer Science and Engineering",
        //             "year"=> "2018 - 2021"
        //           ],
        //           "2"=> [
        //             "title"=> "Higher Secondary School Certificate (HSC)",
        //             "dept"=> "Science",
        //             "year"=> "2015 - 2016"
        //           ],
        //           "3"=> [
        //             "title"=> "Secondary School Certificate (SSC)",
        //             "dept"=> "Science",
        //             "year"=> "2013 - 2014"
        //           ]
        //         ],
        //         "experience"=> [
        //           [
        //             "title"=> "Laravel Developer",
        //             "dept"=> "Upwork",
        //             "year"=> "2021"
        //           ],
        //           [
        //             "title"=> "Wordpress Web Developer",
        //             "dept"=> "Fiverr",
        //             "year"=> "2018 - 2020"
        //           ],
        //           [
        //             "title"=> "PSD to HTML conversion",
        //             "dept"=> "Fiverr",
        //             "year"=> "2018"
        //           ]
        //         ],
        //         "offer_slug"=> "Specialized In",
        //         "offer_title"=> "What I offer",
        //         "offers"=> [
        //           [
        //             "title"=> "Web Development",
        //             "text"=> "I love to work in backend development. I basically work with the Laravel framework. But I can also work on websites that built with raw PHP .",
        //             "icon"=> '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white group-hover:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>'
        //           ],
        //           [
        //             "title"=> "Wordpress Development",
        //             "text"=> "Besides WordPress theme customization, I do theme editing and adding extra features to theme or plugin through code.",
        //             "icon"=> '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white group-hover:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>'
        //           ],
        //           [
        //             "title"=> "SEO",
        //             "text"=> "I have done few research works on SEO . Basically I have collaborated on few projects regarding on page SEO .",
        //             "icon"=> '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white group-hover:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>'
        //           ]
        //         ],
        //         "expertise_slug"=> "Why Choose Me",
        //         "expertise_title"=> "My Expertise Area",
        //         "expertise_left"=> [
        //           [
        //             "title"=> "PHP",
        //             "value"=> "85%"
        //           ],
        //           [
        //             "title"=> "Laravel",
        //             "value"=> "80%"
        //           ],
        //           [
        //             "title"=> "Java",
        //             "value"=> "60%"
        //           ],
        //           [
        //             "title"=> "Python",
        //             "value"=> "10%"
        //           ]
        //         ],
        //         "expertise_right"=> [
        //           [
        //             "title"=> "C",
        //             "value"=> "90%"
        //           ],
        //           [
        //             "title"=> "C++",
        //             "value"=> "95%"
        //           ],
        //           [
        //             "title"=> "C#",
        //             "value"=> "40%"
        //           ],
        //           [
        //             "title"=> "Javascript",
        //             "value"=> "5%"
        //           ]
        //         ],
        //         "recent_work_slug"=> "My Portfolio",
        //         "recent_work_title"=> "Recent Works",
        //         "recent_work_groups"=> [
        //           "All",
        //           "Laravel",
        //           "Php",
        //           "Java",
        //           "C#"
        //         ],
        //         "recent_work_items"=> [
        //           [
        //             "image"=> "q1isBweWhx8CMLcuuT5qhFwbUaHVEchirVnrCc7V.png",
        //             "title"=> "Car Rental Management",
        //             "group"=> "1"
        //           ],
        //           [
        //             "image"=> "hMByV2iZiycV09jpxNHdrCbo9JPfZrZPofnSMhGC.png",
        //             "title"=> "Car Rental Management Dashboard",
        //             "group"=> "1"
        //           ],
        //           [
        //             "image"=> "gDZsbPIW5J5dWq98U64swIme1Q3usjFoqCJc8fjG.png",
        //             "title"=> "Online Quiz Management Sysytem",
        //             "group"=> "2"
        //           ],
        //           [
        //             "image"=> "mXP3H3GhqXqFALeXMSUnkq4GyoBFkmwheyzfwMZn.png",
        //             "title"=> "Profile Page of Online Quiz Management System",
        //             "group"=> "2"
        //           ]
        //         ],
        //         "contact_slug"=> "Get in Touch",
        //         "contact_title"=> "Contact with me",
        //         "contact_details"=> [
        //           "phone_icon"=> "<path d=\"M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z\"></path>",
        //           "email_icon"=> '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>',
        //           "phones"=> [
        //             "+8801303132018",
        //             "+8801781844900"
        //           ],
        //           "emails"=> [
        //             "1"=> "azharasel@gmail.com"
        //           ]
        //         ]
        //           ];
        $data1 = Action::Where('action_name','portfolio')->first();
        $data = unserialize($data1->action_value);
        // $data1->action_value =serialize($data2);
        // $data1->update();
        $data_pass['recent_work_slug'] = $data['recent_work_slug'];
        $data_pass['recent_work_title'] = $data['recent_work_title'];
        $data_pass['recent_work_groups'] = $data['recent_work_groups'];
        $data_pass['recent_work_items'] = $data['recent_work_items'];
    return view('index',compact('data','data_pass'));
    }
}
