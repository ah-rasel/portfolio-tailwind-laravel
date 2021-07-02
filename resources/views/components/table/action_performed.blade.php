@props([
    'eventName'=>'',
    'eventMessage'=>false,
    'timeout'=>false,
    'deleted_user_name',
    'details',
])
  <div
  x-data="{ ActionPerformed: false}"
        x-init="
            @this.on('{{$eventName}}' , () =>{
                setTimeout(()=> { ActionPerformed = false }, 2500);
                ActionPerformed = true;
            })
        "
        x-show.transition.out.duration.1000ms="ActionPerformed"
        style="display: none"
  class="text-center w-full bg-white dark:bg-gray-700 py-3 my-2 rounded-md shadow">
    <span>
      " <span class="text-sm font-semibold">{{$details ?? ''}}</span> " has been deleted . <span class="text-sm font-semibold text-white px-3 pt-0.5 pb-1 rounded-full bg-purple-500 cursor-pointer">Undo</span>
    </span>
  </div>