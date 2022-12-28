<?php

namespace App\Http\Livewire\Admin\Room;

use App\Models\Classroom;
use Livewire\Component;

class AdminRoomUpdate extends Component
{
    public $classroom;

    public function getListeners()
    {
        return [
            'ShowUpdateClassModal',
        ];
    }

    public function rules()
    {
        return [
            'classroom.collage_id' => 'required',
            'classroom.name' => 'required',
            'classroom.description' => 'nullable',
        ];
    }

    public function render()
    {
        return view('livewire.admin.room.admin-room-update');
    }

    public function ShowUpdateClassModal(Classroom $classroom)
    {
        $this->classroom = $classroom;
    }

    public function save()
    {
        $this->validate();
        $this->classroom->save();
        $this->emit('hideUpdateClassModal');
        $this->emit('refresh');
        $this->emit('quickAlert', 'Updated');
    }
}
