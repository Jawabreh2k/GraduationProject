<?php

namespace App\Http\Livewire\Admin\Room;

use App\Models\Classroom;
use Livewire\Component;

class AdminRoomAdd extends Component
{
    public $collage_id, $name, $description;

    public function rules()
    {
        return [
            'collage_id' => 'required',
            'name' => 'required',
            'description' => 'nullable',
        ];
    }

    public function render()
    {
        return view('livewire.admin.room.admin-room-add');
    }

    public function save()
    {
        $this->validate();
        $classes = new Classroom();
        $classes->name = $this->name;
        $classes->collage_id = $this->collage_id;
        $classes->description = $this->description;
        $classes->save();
        $this->emit('hideAddClassModal');
        $this->emit('refresh');
        $this->emit('quickAlert', 'Saved');
    }
}
