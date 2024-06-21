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

    #[On('echo-presence:chat.room.{room.id},joining')]
    public function setUserJoining($user)
    {
        $this->ids[] = $user['id'];
    }

    #[On('echo-presence:chat.room.{room.id},leaving')]
    public function setUserLeaving($user)
    {
        $this->ids = array_filter($this->ids, function ($id) use ($user) {
            return $id != $user['id'];
        });
    }

    public function render()
    {
        return view('livewire.chat.users');
    }
}
