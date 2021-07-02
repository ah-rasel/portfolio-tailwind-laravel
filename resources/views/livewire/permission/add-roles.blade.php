<div class="mt-5">
    <form wire:submit.prevent="Add()" action="" method="POST">
         <x-input.label title="Title">
            <x-input.text wire:model="title" />
            <x-error error-title="title" />
         </x-input.label>
         @foreach ($permissions as $permission)
            <x-input.checkbox_label wire:model='selected' value="{{$permission->id}}">
               {{$permission->title}}
            </x-input.checkbox_label>
         @endforeach
         <x-form.submit title="Add Role" />
    </form>
 </div>