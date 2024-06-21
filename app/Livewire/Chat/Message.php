<?php

namespace App\Livewire\Chat;

use Livewire\Component;

class Message extends Component
{
    public \App\Models\Message $message;

    public function render()
    {
        return view('livewire.chat.message');
    }
}
