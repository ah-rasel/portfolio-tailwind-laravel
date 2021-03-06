<div class="md:col-span-3 h-40 w-full">
    <div
        x-data="{ messageSent: false}"
        x-init="
            @this.on('message-sent' , () =>{
                setTimeout(()=> { messageSent = false }, 2500);
                messageSent = true;
            })
        "
        x-show.transition.out.duration.1000ms="messageSent"
        style="display: none"
        class="flex justify-center">
            <span class="text-sm font-semibold text-green-400 text-center">
            Thank you for your message ! I will Contact with you soon .</span>
    </div>
    <form wire:submit.prevent="SendMessage" method="POST" action="" class="space-y-2">
        @csrf
        <div class="md:flex ">
            <div class="flex flex-col text-sm md:px-2 w-full">
                    <x-input.label title="Name">
                        <x-input.text wire:model="name" placeholder="Christopher Nolan"/>
                        <x-error error-title="name" />
                     </x-input.label>
            </div>
            <div class="flex flex-col text-sm mt-2 md:mt-0 md:px-2 w-full space-y-2">
                <x-input.label title="Email">
                    <x-input.email wire:model="email" placeholder="Yourmail@mail.com"/>
                    <x-error error-title="email" />
                 </x-input.label>
            </div>

        </div>
        <div class="md:px-2">
            <label for="" class="px-1 text-sm font-semibold">Message</label>
            <textarea wire:model="message" name="" id="" cols="30" rows="4"
                      class="bg-transparent placeholder-gray-500 dark:placeholder-gray-400 ring-1 mt-2 ring-gray-200 dark:ring-gray-500
                        focus:ring-indigo-600 focus:outline-none rounded-md px-2 w-full py-1.5" placeholder="Your message"></textarea>
            @error('message') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="md:px-2 flex justify-center md:justify-end">
            <button type="submit" class="text-sm bg-purple-600 hover:bg-purple-700 dark:hover:bg-purple-700 px-2 py-1 rounded text-white dark:text-gray-200">Send Message</button>
        </div>
    </form>
</div>