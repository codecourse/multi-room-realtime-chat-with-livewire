<?php

namespace App\Livewire\Chat;

use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Users extends Component
{
    public Room $room;

    public array $ids = [];

    #[Computed()]
    public function users()
    {
        return User::find($this->ids);
    }

    #[On('echo-presence:chat.room.{room.id},here')]
    public function setUsersHere($users)
    {
        $this->ids = Arr::pluck($users, 'id');
    }

    public function render()
    {
        return view('livewire.chat.users');
    }
}
