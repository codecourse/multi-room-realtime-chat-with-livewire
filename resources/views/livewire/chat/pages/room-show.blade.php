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
                Chat
            </div>
        </div>
    </div>
</div>

