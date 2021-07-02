<div class="mt-5">
     <form wire:submit.prevent="Update()" action="" method="POST" class="mb-3">
          <x-input.label title="Title">
             <x-input.text wire:model="role.title" />
             <x-error error-title="role.title" />
          </x-input.label>
          @foreach ($permissions as $permission)
             <x-input.checkbox_label wire:model='selected' value="{{$permission->id}}">
                {{$permission->title}}
             </x-input.checkbox_label>
          @endforeach
          <x-form.submit title="Update Role" />
     </form>
  </div>