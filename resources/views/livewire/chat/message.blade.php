<div class="flex space-x-3">
    <img src="{{ $message->user->avatar() }}" class="size-12 rounded-lg">
    <div>
        <div class="flex items-baseline space-x-2">
            <div class="font-bold">{{ $message->user->name }}</div>
            <span class="text-gray-600 text-xs">{{ $message->created_at }}</span>
        </div>
        <p>{{ $message->body }}</p>
    </div>
</div>
