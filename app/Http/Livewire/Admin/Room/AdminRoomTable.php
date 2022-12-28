<?php

namespace App\Http\Livewire\Admin\Room;

use App\Models\Classroom;
use Livewire\Component;

class AdminRoomTable extends Component
{
    public $delete_id;

    public function getListeners()
    {
        return [
            'refresh' => '$refresh',
        ];
    }

    public function render()
    {
        $classes = Classroom::all();
        return view('livewire.admin.room.admin-room-table', [
            'classes' => $classes,
        ]);
    }

    public function ShowAddClassModal()
    {
        $this->emit('ShowAddClassModal');
    }

    public function showDeleteModal($delete_id)
    {
        $this->delete_id = $delete_id;
        $this->emit('showDeleteModal');
    }

    public function delete()
    {
        Classroom::destroy($this->delete_id);
        $this->emit('hideDeleteModal');
        $this->emit('refresh');
        $this->emit('quickAlert', 'Deleted');
    }

    public function ShowUpdateClassModal($update_id)
    {
        $this->emit('ShowUpdateClassModal', $update_id);
    }
}
