<?php

namespace App\Http\Livewire\Admin\Specialty;

use App\Models\Specialty;
use Livewire\Component;

class AdminSpecialtyAdd extends Component
{
    public $collage_id, $name, $description;

    public function rules()
    {
        return [
            'name' => 'required',
            'collage_id' => 'required',
            'description' => 'nullable',
        ];
    }

    public function render()
    {
        return view('livewire.admin.specialty.admin-specialty-add');
    }

    public function save()
    {
        $this->validate();
        $specialty = new Specialty();
        $specialty->name = $this->name;
        $specialty->collage_id = $this->collage_id;
        $specialty->description = $this->description;
        $specialty->save();
        $this->emit('hideAddSpecialtyModal');
        $this->emit('refresh');
        $this->emit('quickAlert', 'Saved');
    }
}
