<?php

namespace App\Livewire\Chat;

use App\Models\Room;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class Messages extends Component
{
    public Room $room;

    public Collection $messages;

    public function mount()
    {
        $this->fill([
            'messages' => $this->room->messages()->with('user')->oldest()->take(100)->get(),
        ]);
    }

    #[On('message.created')]
    public function prependMessage($id)
    {
        $this->messages->push(\App\Models\Message::with('user')->find($id));
    }

    #[On('echo-private:chat.room.{room.id},MessageCreated')]
    public function prependMessageFromBroadcast(array $payload)
    {
        $this->prependMessage($payload['message']['id']);
    }

    public function render()
    {
        return view('livewire.chat.messages');
    }
}
