<?php

namespace App\Livewire\Chat;

use App\Models\Room;
use Illuminate\Support\Collection;
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

    public function render()
    {
        return view('livewire.chat.messages');
    }
}
