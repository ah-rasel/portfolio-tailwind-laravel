<div class="mt-5">
   <form wire:submit.prevent="Add()" action="" method="POST" autocomplete="off">
        <x-input.label title="Name">
           <x-input.text wire:model.defer="name" autocomplete="off"/>
           <x-error error-title="name" />
        </x-input.label>

        <x-input.label title="Email">
           <x-input.email wire:model.defer="email" autocomplete="off"/>
           <x-error error-title="email" />
        </x-input.label>

        <x-input.label title="Password">
           <x-input.password wire:model.defer="password" autocomplete="off"/>
           <x-error error-title="password" />
        </x-input.label>

        @foreach ($roles as $role)
           <x-input.checkbox_label wire:model='selected' value="{{$role->id}}">
              {{$role->title}}
           </x-input.checkbox_label>
        @endforeach
        <x-form.submit title="Add User" />
   </form>
</div>