<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-span-3">
    <div class="p-6 text-gray-900">
        <h2 class="text-lg font-semibold">Users</h2>

        <ul class="space-y-1 mt-3">
            @foreach($this->users as $user)
                <li class="flex items-end justify-between space-x-1 bg-gray-100 rounded-lg px-3 py-1">
                    {{ $user->name }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
