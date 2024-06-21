<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $room->name }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-12 gap-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-span-3">
            <div class="p-6 text-gray-900">
                Users
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-span-9">
            <div class="p-6 text-gray-900">
                <div>
                    Messages
                </div>

                <form
                    class="mt-3"
                    x-data="{
                        shift: false
                    }"
                    x-on:keydown.shift="shift = true"
                    x-on:keyup.shift="shift = false"
                    x-on:keydown.enter="if (!shift || !$event.target.value) { $event.preventDefault() }"
                    x-on:keyup.enter.prevent="if (!shift && $event.target.value) { $wire.submit() }"
                >
                    <label for="body" class="sr-only">Message</label>
                    <textarea name="body" id="body" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Say something" wire:model="body"></textarea>
                </form>
            </div>
        </div>
    </div>
</div>

