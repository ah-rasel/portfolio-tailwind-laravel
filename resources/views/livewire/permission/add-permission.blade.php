<div class="mt-5">
   <form wire:submit.prevent="Add()" action="" method="POST">
        <x-input.label title="Title">
           <x-input.text wire:model="title" />
           <x-error error-title="title" />
        </x-input.label>
        <x-form.submit title="Add Permission" />
   </form>
</div>
