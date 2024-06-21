<?php

namespace App\Livewire\Chat\Pages;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Component;

class RoomShow extends Component
{
    public Room $room;

    public string $body;

    public function submit()
    {
        dd($this->body);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.chat.pages.room-show');
    }
}
