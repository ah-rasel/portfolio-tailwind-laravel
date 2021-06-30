<div class="md:col-span-3 h-40 w-full">
    <form wire:submit.prevent="SendMessage" method="POST" action="" class="space-y-3">
        @csrf
        <div class="md:flex space-y-2 md:space-y-0">
            <div class="flex flex-col text-sm md:px-2 w-full space-y-2">
                <label for="" class="px-1 text-sm font-semibold">Name</label>
                <input wire:model="name" type="text" placeholder="Christopher Nolan"
                       class="bg-transparent ring-1 ring-gray-200 dark:ring-gray-500
                            focus:ring-indigo-600 focus:outline-none rounded-md px-2 w-full py-1.5">
            @error('name') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
            <br> @enderror
            </div>
            <div class="flex flex-col text-sm md:px-2 w-full space-y-2">
                <label for="" class="px-1 text-sm font-semibold">Email</label>
                <input wire:model="email" type="email" placeholder="Yourmail@mail.com"
                       class="bg-transparent ring-1 ring-gray-200 dark:ring-gray-500
                            focus:ring-indigo-600 focus:outline-none rounded-md px-2 w-full py-1.5">
                @error('email') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
                <br> @enderror
            </div>

        </div>
        <div class="md:px-2 space-y-2">
            <label for="" class="px-1 text-sm font-semibold">Message</label>
            <textarea wire:model="message" name="" id="" cols="30" rows="4"
                      class="bg-transparent ring-1 ring-gray-200 dark:ring-gray-500
                        focus:ring-indigo-600 focus:outline-none rounded-md px-2 w-full py-1.5" placeholder="asdasd"></textarea>
            @error('message') <span class="text-xs font-semibold text-red-600 dark:text-red-400">{{ $message }}</span>
            <br> @enderror
        </div>
        <div class="md:px-2 ">
            <button type="submit" class="float-right text-sm bg-purple-600 hover:bg-purple-700 dark:hover:bg-purple-700 px-2 py-1 rounded text-white dark:text-gray-200">Send Message</button>
        </div>
    </form>
</div>