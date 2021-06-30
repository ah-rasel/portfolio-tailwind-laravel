@extends('layouts.user')
@section('content')
    <!-- Top Section -->
    <div class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-5xl mx-auto">
            <div class="md:grid md:grid-cols-2 md:content-center">
                <!-- On Mobile Top Section -->
                <div class="relative md:hidden">
                    <div class="h-64 overflow-hidden">
                        <img class="object-cover" src="images/cover.JPG" alt="">
                    </div>
                    <img class="
          absolute h-32 w-32 bottom-0
          left-1/2 transform -translate-x-1/2 translate-y-1/2 rounded-full
         border-4 border-gray-50 shadow
          " src="images/rasel.jpg" alt="">
                </div>
                <!-- First grid on medium screen  -->
                <div
                    class="flex flex-col justify-center items-center h-auto w-full px-4 text-gray-700 dark:text-gray-200">
                    <div class="text-center md:text-left mt-24 md:m-0">
                            <span
                                class="hidden font-styled tracking-wider md:block text-sm text-purple-400 dark:text-purple-300">
                                {{$data['greeting']}}
                            </span>
{{--                        <h1 class="text-2xl md:text-4xl uppercase font-bold">Azijul Hakim Rasel</h1>--}}
                        <h1 class="text-2xl md:text-4xl uppercase font-bold">{{$data['display_name']}}</h1>
                        <div class="relative mb-6" x-data="{
                    text: '',
                    textArray : ['{{$data['typing_title']}}'],
                    textIndex: 0,
                    charIndex: 1,
                    pauseEnd: 1000,
                    pauseStart: 1000,
                    typeSpeed: 100,
                    direction: 'forward'
         }" x-init="(() => {
          let typingInterval = setInterval(startTyping, $data.typeSpeed);

          function startTyping(){
            let current = $data.textArray[ $data.textIndex ];
            if($data.charIndex > current.length){
                 $data.direction = 'backward';
                 clearInterval(typingInterval);
                 setTimeout(function(){
                    typingInterval = setInterval(startTyping, $data.typeSpeed);
                 }, $data.pauseEnd);
            }

            $data.text = current.substring(0, $data.charIndex);
            if($data.direction == 'forward'){
                $data.charIndex += 1;
             } else {
                if($data.charIndex == 1){
                    $data.direction = 'forward';
                    clearInterval(typingInterval);
                    setTimeout(function(){
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                    }, $data.pauseStart);
                }
                if($data.charIndex !=0){
                  $data.charIndex -= 1;
                }
             }

         }
     })()">
                            <h5 class="absolute w-full text-sm text-gray-600 left-1/2 md:inset-0 transform -translate-x-1/2 md:translate-x-0 dark:text-gray-300 font-semibold"
                                x-text="text"></h5>
                        </div>
                        <div class="h-10 px-3 flex justify-center md:justify-start items-center overflow-hidden w-full border-l-4 border-r-4 border-purple-400 dark:border-purple-600 bg-gray-100 dark:bg-gray-700" title="My Favourite Line">
                            <h3 class="text-xs md:text-sm font-semibold text-gray-500 dark:text-gray-300">{{$data['favourite_quote']}}</h3>
                        </div>
                        <div class="flex font-semibold text-xs md:text-sm space-x-4 py-4">
                            <a href="{{$data['top_button_1_link']}}" class="">
                                <div class="flex bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-white dark:text-gray-200 items-center space-x-3">
                                    <span>{{$data['top_button_1_text']}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </div>
                            </a>
                            <a href="{{$data['top_button_2_link']}}" class="">
                                <div class="flex px-4 py-2 rounded-lg items-center space-x-3 border border-gray-600 hover:bg-gray-300 dark:hover:bg-gray-700">
                                    <span>{{$data['top_button_2_text']}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                </div>
                            </a>



                        </div>
                    </div>
                    <!-- Icons -->
                    <div class="md:hidden flex justify-center space-x-1 my-4">
                        <a target="_blank"
                           class="w-8 h-8 flex justify-center items-center transform transition-all duration-500 hover:-translate-y-2 hover:scale-110 ease-in-out"
                           href="#" title="Facebook Profile">
                            <i class="text-sm fab fa-facebook-f"></i>
                        </a>
                        <a target="_blank"
                           class="w-8 h-8 flex justify-center items-center transform transition-all duration-500 hover:-translate-y-2 hover:scale-110 ease-in-out"
                           href="#" title="Facebook Profile">
                            <i class="text-sm fab fa-twitter"></i>
                        </a>
                        <a target="_blank"
                           class="w-8 h-8 flex justify-center items-center transform transition-all duration-500 hover:-translate-y-2 hover:scale-110 ease-in-out"
                           href="#" title="Facebook Profile">
                            <i class="text-sm fab fa-github"></i>
                        </a>
                        <a target="_blank"
                           class="w-8 h-8 flex justify-center items-center transform transition-all duration-500 hover:-translate-y-2 hover:scale-110 ease-in-out"
                           href="#" title="Facebook Profile">
                            <i class="text-sm fab fa-linkedin"></i>
                        </a>

                    </div>


                </div>
                <!-- Second grid in medium -->
                <div class="flex items-center justify-center">
                    <img class="hidden md:block h-auto w-96 object-cover " src="images/myimage.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- Main Inside Container -->
    <!-- Ok -->

    <div class="max-w-5xl md:rounded-full shadow-md md:mx-auto w-full md:-mt-14 text-gray-700 dark:text-gray-200">
        <div class="grid grid-cols-3 relative bg-gray-100 dark:bg-gray-700 md:rounded-full justify-start items-center py-2 md:p-8">
            @for($i=1;$i<=3;$i++)
            <!-- Single Experience at TOP -->
            <div class="flex flex-col md:flex-row items-center md:space-x-2 space-y-2 md:space-y-0">
                <div class="flex-shrink-0">
                    <div class="flex w-7 h-7 md:h-10 md:w-10 justify-center items-center bg-purple-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:w-6 md:h-6 text-gray-50" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <h3 class="font-bold text-sm md:text-base">{{$data['experience_'.$i.'_title']}}</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-xs font-semibold md:text-sm">{{$data['experience_'.$i.'_subtitle']}}</p>
                </div>
            </div>
            @endfor
      {{--      <!-- Single Experience at TOP -->
            <div class="flex flex-col md:flex-row items-center md:space-x-2 space-y-2 md:space-y-0">
                <div class="flex-shrink-0">
                    <div class="flex w-7 h-7 md:h-10 md:w-10 justify-center items-center bg-purple-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:w-6 md:h-6 text-gray-50" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <h3 class="font-bold text-sm md:text-base">3+ Years</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-xs font-semibold md:text-sm">Development Experience</p>
                </div>
            </div>
            <!-- Single Experience at TOP -->
            <div class="flex flex-col md:flex-row items-center md:space-x-2 space-y-2 md:space-y-0">
                <div class="flex-shrink-0">
                    <div class="flex w-7 h-7 md:h-10 md:w-10 justify-center items-center bg-purple-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:w-6 md:h-6 text-gray-50" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <h3 class="font-bold text-sm md:text-base">3+ Years</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-xs font-semibold md:text-sm">Development Experience</p>
                </div>
            </div>--}}

        </div>
    </div>

    <!-- Main PX -->
    <div class="container md:mt-4 px-3 mx-auto grid text-gray-700 dark:text-gray-200">

        <div id="intro" class="md:max-w-5xl md:mx-auto space-y-12 mb-36">

            <div class="mt-3">
                <div class="md:grid md:grid-cols-2">
                    <div class="hidden md:block relative">
                        <img class="w-96 h-auto" src="images/rasel.jpg" alt="">
                        <div class="h-0.5 w-24 bg-purple-300 dark:bg-purple-400 absolute inset-0 -left-2 -top-2">
                        </div>
                        <div
                            class="h-24 w-0.5 bg-purple-300 dark:bg-purple-400 absolute inset-0 transform -left-2 -top-2">
                        </div>
                        <div
                            class="h-0.5 w-24 bg-purple-300 dark:bg-purple-400 absolute -bottom-2 left-2 transform translate-x-72">
                        </div>
                        <div
                            class="h-24 w-0.5 bg-purple-300 dark:bg-purple-400 absolute -bottom-2 left-1.5 transform translate-x-96">
                        </div>
                    </div>
                    <div class="flex flex-col md:px-8 md:py-8">
                        <div class="text-center md:text-left my-2 md:my-5">
                            <h4 class="text-purple-400 text-xs font-semibold tracking-wide">{{$data['i_slug']}}</h4>
                            <h2 class="md:text-2xl text-xl font-bold">{{$data['i_title']}}</h2>
                        </div>
                        <div class="text-justify text-gray-500 dark:text-gray-400 opacity-90">
{{--                            I am a very simple and ordinary person . I am currently completing my graduation . After completing my study , my dream is to do something awesome to be--}}
                            {{$data['i_des']}}
                        </div>
                        <div class="text-center md:text-left my-4">
                            <h2 class="md:text-2xl text-xl font-bold">{{$data['int_title']}}</h2>
                        </div>
                        <div class="flex items-center justify-between text-gray-600 dark:text-gray-300">
                            <div class="flex rounded-full items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                </svg>
                                <p class="text-sm font-semibold tracking-wide">{{$data['int_1_t']}}</p>
                            </div>
                            <div class="flex rounded-full items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <p class="text-sm font-semibold tracking-wide">{{$data['int_2_t']}}</p>
                            </div>
                            <div class="flex rounded-full items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-6 w-6 text-purple-400 transform rotate-90" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                </svg>
                                <p class="text-sm font-semibold tracking-wide">{{$data['int_3_t']}}</p>
                            </div>
                            <div class="flex rounded-full items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-sm font-semibold tracking-wide">{{$data['int_4_t']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- My Qualification Section -->

            <div class="space-y-10">
                <div class="text-center">
                    <h4 class="text-purple-400 text-xs font-semibold tracking-wide">{{$data['edu_slug']}}</h4>
                    <h2 class="md:text-2xl text-xl font-bold">{{$data['edu_title']}}</h2>
                </div>
                <div class="flex justify-between space-x-2">
                    <div class="flex-1 text-purple-400 space-y-2.5 md:space-y-6">
                        <!-- Education -->
                        <div class="flex items-center space-x-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1"
                                      d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                            <h3
                                class="text-base font-bold md:text-lg md:font-extrabold md:tracking-wider text-gray-600 dark:text-gray-200">
                                Education</h3>
                        </div>
                        @foreach($data['education'] as $key => $education)
                        <!-- Education details -->

                        <div class="flex ml-2.5">
                            <svg viewBox="0 0 12 12" class="w-3 h-8 mr-6 overflow-visible hidden md:block">
                                <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                <circle cx="6" cy="6" r="11" fill="none" stroke="currentColor"
                                        stroke-width="1.5"></circle>
                                <path d="M 6 17 V 65" fill="none" stroke-width="2" stroke="currentColor"
                                      class="text-purple-200">
                                </path>
                            </svg>
                            <svg viewBox="0 0 12 12" class="w-3 h-8 mr-6 overflow-visible md:hidden">
                                <circle cx="6" cy="6" r="3.5" fill="currentColor"></circle>
                                <circle cx="6" cy="6" r="8" fill="none" stroke="currentColor"
                                        stroke-width="1.5"></circle>
                                <path d="M 6 15 V 70" fill="none" stroke-width="2" stroke="currentColor"
                                      class="text-purple-200">
                                </path>
                            </svg>
                            <div class="md:ml-9 flex flex-col">
                                <h3
                                    class="mt-1 md:mt-0 text-sm font-semibold md:text-lg md:font-bold text-gray-700 dark:text-gray-200">
                                    {{$education['title']}}</h3>
                                <h4
                                    class="text-xs md:text-sm font-medium md:font-semibold text-gray-600 dark:text-gray-400 tracking-tight">
                                    {{$education['dept']}}</h4>
                                <div class="flex text-xs font-semibold space-x-2 items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p>{{$education['year']}}</p>
                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                    <div class="flex-1 text-purple-400 space-y-2.5 md:space-y-6">
                        <div class="flex items-center space-x-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1"
                                      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <h3
                                class="text-base font-bold md:text-lg md:font-extrabold md:tracking-wider text-gray-600 dark:text-gray-200">
                                Experience</h3>
                        </div>
                        @foreach($data['experience'] as $experience)
                        <!-- Experience details -->
                        <div class="flex ml-2.5">
                            <svg viewBox="0 0 12 12" class="w-3 h-8 mr-6 overflow-visible hidden md:block">
                                <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                <circle cx="6" cy="6" r="11" fill="none" stroke="currentColor"
                                        stroke-width="1.5"></circle>
                                <path d="M 6 17 V 65" fill="none" stroke-width="2" stroke="currentColor"
                                      class="text-purple-200">
                                </path>
                            </svg>
                            <svg viewBox="0 0 12 12" class="w-3 h-8 mr-6 overflow-visible md:hidden">
                                <circle cx="6" cy="6" r="3.5" fill="currentColor"></circle>
                                <circle cx="6" cy="6" r="8" fill="none" stroke="currentColor"
                                        stroke-width="1.5"></circle>
                                <path d="M 6 15 V 70" fill="none" stroke-width="2" stroke="currentColor"
                                      class="text-purple-200">
                                </path>
                            </svg>
                            <div class="md:ml-9 flex flex-col">
                                <h3
                                    class="mt-1 md:mt-0 text-sm font-semibold md:text-lg md:font-bold text-gray-700 dark:text-gray-200">
                                    {{$experience['title']}}</h3>
                                <h4
                                    class="text-xs md:text-sm font-medium md:font-semibold text-gray-600 dark:text-gray-400 tracking-tight">
                                    {{$experience['dept']}}</h4>
                                <div class="flex text-xs font-semibold space-x-2 items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p>{{$experience['year']}}</p>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>

            <!-- What I offer  -->

            <div class="space-y-10">
                <div class="text-center">
                    <h4 class="text-purple-400 text-xs font-semibold tracking-wide">{{$data['offer_slug']}}</h4>
                    <h2 class="md:text-2xl text-xl font-bold">{{$data['offer_title']}}</h2>
                </div>
                <div class="md:px-0 grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-8 md:gap-6 md:gap-y-14">
                    @foreach($data['offers'] as $offer)
                    <!-- Single Offer Item -->
                    <div class="group cursor-pointer">
                        <div
                            class="h-56 p-3 md:p-8 group-hover:bg-purple-400 md:pt-12 pt-8 ring-1 md:rounded-tr-3xl relative transition-all duration-200 ease-in-out">
                            <h4
                                class="font-semibold md:font-extrabold tracking-wide pb-4 group-hover:text-white">
                                {{$offer['title']}}</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-300 tracking-tight group-hover:text-gray-50">
                                {{$offer['text']}}
                            </p>
                            <div
                                class="absolute top-0 left-1/2 -translate-x-1/2 md:translate-x-0 md:left-8 transform -translate-y-1/2">
                                <span class="w-12 h-12 bg-purple-400 group-hover:bg-white rounded-md
                                                flex justify-center items-center
                                                shadow border
                                                ">
                                    <svg width="20" height="20" fill="currentColor"
                                         class="text-white group-hover:text-purple-400">
{{--                                        {{$offer['icon']}}--}}
                                        @php
                                        echo $offer['icon'];
                                        @endphp
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                        @endforeach

                </div>
            </div>

            <!-- My Expertise Area Section -->

            <div class="space-y-10">
                <div class="text-center">
                    <h4 class="text-purple-400 text-xs font-semibold tracking-wide">{{$data['expertise_slug']}}</h4>
                    <h2 class="md:text-2xl text-xl font-bold">{{$data['expertise_title']}}</h2>
                </div>
                <div class="flex">
                    <div class="md:flex-1 space-y-5 md:px-12 w-full">
                        <!-- Expertise Area Single Item -->
                        @foreach($data['expertise_left'] as $expertise)
                        <div class="overflow-hidden space-y-2.5">
                            <div class="flex justify-between text-xs md:text-sm font-bold">
                                <h3 class="">{{$expertise['title']}}</h3>
                                <span>{{$expertise['value']}}</span>
                            </div>
                            <div class="bg-gray-200 h-3 overflow-hidden w-full rounded-sm">
                                <div class="bg-purple-400 h-3 overflow-hidden" style="width:{{$expertise['value']}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="md:flex-1 space-y-5 md:px-12 px-4 w-full">
                        <!-- Expertise Area Single Item -->
                        @foreach($data['expertise_right'] as $expertise)
                            <div class="overflow-hidden space-y-2.5">
                                <div class="flex justify-between text-xs md:text-sm font-bold">
                                    <h3 class="">{{$expertise['title']}}</h3>
                                    <span>{{$expertise['value']}}</span>
                                </div>
                                <div class="bg-gray-200 h-3 overflow-hidden w-full rounded-sm">
                                    <div class="bg-purple-400 h-3 overflow-hidden" style="width:{{$expertise['value']}}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Recent Works -->
            @livewire('portfolio.home.recent-work-section',['data'=> $data_pass])
            <!-- Contact -->
            <div class="space-y-10">
                <div class="text-center">
                    <h4 class="text-purple-400 text-xs font-semibold tracking-wide">{{$data['contact_slug']}}</h4>
                    <h2 class="md:text-2xl text-xl font-bold">{{$data['contact_title']}}</h2>
                </div>

                <div class="mb-32">
                    <div class="block md:grid md:grid-cols-4">
                        @livewire('contact-with-me')
                        <div class="md:h-40 w-full mt-48 md:mt-0 md:p-8">
                            <div class="flex md:block justify-between md:space-y-4 md:px-0">

                                <!-- Phone Number -->
                                <div class="flex space-x-4 md:space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-purple-400 rounded-full text-white
                                                        flex justify-center items-center shadow " href="#" title="Twitter Profile">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                @php
                                                echo($data['contact_details']['phone_icon']);
                                                @endphp
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-1.5">
                                        <h3 class="text-sm font-bold ">Phone</h3>
                                        @foreach($data['contact_details']['phones'] as $phone_number)
                                        <a href="tel:{{$phone_number}}" class="text-xs font-semibold md:text-sm text-gray-500">{{$phone_number}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Phone Number -->
                                <div class="flex space-x-2 md:space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-purple-400 rounded-full text-white
                                                        flex justify-center items-center shadow " href="#" title="Twitter Profile">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                @php
                                                    echo($data['contact_details']['email_icon']);
                                                @endphp
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-1.5">
                                        <h3 class="text-sm font-bold ">Email</h3>
                                        @foreach($data['contact_details']['emails'] as $email)
                                        <a href="mailto:{{$email}}" class="text-xs font-semibold md:text-sm text-gray-500">{{$email}}</a>
                                        @endforeach
                                    </div>
                                </div>





                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Main container ending div -->
    </div>
@endsection
