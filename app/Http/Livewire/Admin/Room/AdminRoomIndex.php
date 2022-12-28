<?php

namespace App\Http\Livewire\Admin\Room;

use Livewire\Component;

class AdminRoomIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.room.admin-room-index')->layout('master.master');
    }
}
