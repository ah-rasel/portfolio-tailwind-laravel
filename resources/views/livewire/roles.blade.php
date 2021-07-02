<div class="flex flex-col mt-5">
    <x-table.action_performed event-name="record_deleted" :details="$deleted_record"></x-table.action_performed>
    <div class="space-x-1 mb-3">
      <a href="{{route('admin.roles.create')}}" class="text-xs text-gray-200 font-semibold bg-purple-600 px-4 py-1.5 shadow rounded-sm">Add New role<a>
      @if ($selected)
        <a wire:click.prevent='DeleteSelected()' href="#" class="text-xs text-gray-200 font-semibold bg-red-600 px-4 py-1.5 shadow rounded-sm">Delete Selected<a>
      @endif
    </div>
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 min-h-[570px]">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <x-table>
            <x-slot name="head">
              <x-table.heading class="w-3">
              </x-table.heading>
              <x-table.heading>Role Tilte</x-table.heading>
              <x-table.heading>Permissions</x-table.heading>
              <x-table.heading>Action</x-table.heading>
            </x-slot>
         
            <x-slot name="body">
           @foreach ($roles as $role)
              <x-table.row wire:key='row-{{$role->id}}'>
                  <x-table.cell class="w-3">
                    <x-input.checkbox wire:model="selected" value="{{$role->id}}"/>
                  </x-table.cell>
  
                  <x-table.cell>
                    {{ $role->title}}
                  </x-table.cell>
                  
                  <x-table.cell>
                    @foreach ($role->permissions as $key=>$permission)
                    <span class="pb-1 px-1 rounded mt-5 mb-5">{{$permission->title}}</span>,
                      @if ($loop->iteration % 8 == 0)
                          @php
                            echo('</br>')
                          @endphp
                      @endif
                   @endforeach
                  </x-table.cell>

                  <x-table.cell>
                    <div class="flex space-x-4">
                      <x-table.button.action href="{{route('admin.roles.edit',$role->id)}}" edit/>
                      <x-table.button.action wire:click='Delete({{$role->id}})' delete/>
                    </div>
                  </x-table.cell>
  
                </x-table.row>
            @endforeach
            </x-slot>
        </x-table>
        </div>
      </div>
      {{ $roles->links('livewire.admin.admin-pagination') }}
    </div>