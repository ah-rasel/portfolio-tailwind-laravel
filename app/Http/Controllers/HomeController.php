<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHomePage()
    {
//       $data=[
//            'greeting'=>'Hi, I am',
//            'display_name'=>'Azijul Hakim Rasel',
//            'typing_title'=>'Programmer, developer,dreamer',
//            'favourite_quote'=>'Stay Calm, Be Unique',
//            'top_button_1_text'=>'Download CV',
//            'top_button_1_link'=>'https://facebook.com/azharasel',
//            'top_button_2_text'=>'Contact Me',
//            'top_button_2_link'=>'https://facebook.com/azharasel',
//           'experience_1_title'=>'1 + years',
//           'experience_2_title'=>'2 + years',
//           'experience_3_title'=>'3 + years',
//           'experience_1_subtitle'=>'Development 1 ',
//           'experience_2_subtitle'=>'Development 2',
//           'experience_3_subtitle'=>'Development 3',
//           'i_slug'=>'About Me',
//           'i_title'=>'About Me',
//           'i_des'=>'About Me',
//           'int_title'=>'About Me',
//           'int_1_t'=>'Music',
//           'int_2_t'=>'Travel',
//           'int_3_t'=>'Movie',
//           'int_4_t'=>'Photo',
//           'edu_slug'=>'Education 1',
//           'edu_title'=>'Education 2',
//           'education'=>[
//               [
//                   'title'=>'BSC',
//                   'dept'=>'CSE',
//                   'year'=>'2018 - 2021',
//               ],
//               [
//                   'title'=>'HSC',
//                   'dept'=>'Science',
//                   'year'=>'2009 - 2014 ',
//               ],
//           ],
//           'experience'=>[
//               [
//                   'title'=>'Senior Software lead',
//                   'dept'=>'AHR tech',
//                   'year'=>'2021 - 3021',
//               ],
//               [
//                   'title'=>'Senior Software lead',
//                   'dept'=>'AHR tech',
//                   'year'=>'2021 - 3021',
//               ],
//           ],
//           'offer_slug'=>'Specialized In',
//           'offer_title'=>'What I offer',
//           'offers'=>[
//               [
//                   'title'=>'SEO title',
//                   'text'=>'textasdgasd asdjas dasdasdasdasda',
//                   'icon'=>'<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"> </path>',
//               ],
//               [
//                   'title'=>'SEO title 2',
//                   'text'=>'Text adasud as',
//                   'icon'=>'<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"> </path>',
//               ],
//               [
//                   'title'=>'SEO title 3',
//                   'text'=>'Textasdas dasd asd',
//                   'icon'=>'<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"> </path> ',
//               ],
//           ],
//        ];
//        $data2 = serialize($data);
//        dd($data2);


        $data1 = Action::Where('action_name','portfolio')->first();
//        $data1->action_value = $data2;
//        $data1->update();
        $data = unserialize($data1->action_value);
//        return $data;
//        dd($data['education']);
//$icon = '';
    return view('index',compact('data'));
    }
}
