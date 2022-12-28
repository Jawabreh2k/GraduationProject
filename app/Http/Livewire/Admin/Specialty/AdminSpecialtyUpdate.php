<?php

namespace App\Http\Livewire\Admin\Specialty;

use App\Models\Specialty;
use Livewire\Component;

class AdminSpecialtyUpdate extends Component
{
    public $Specialty;

    public function getListeners()
    {
        return [
            'ShowUpdateSpecialtyModal',
        ];
    }

    public function rules()
    {
        return [
            'Specialty.name' => 'required',
            'Specialty.collage_id' => 'required',
            'Specialty.description' => 'nullable',
        ];
    }

    public function render()
    {
        return view('livewire.admin.specialty.admin-specialty-update');
    }

    public function ShowUpdateSpecialtyModal(Specialty $specialty)
    {
        $this->Specialty = $specialty;
    }

    public function save()
    {
        $this->validate();
        $this->Specialty->save();
        $this->emit('refresh');
        $this->emit('hideUpdateSpecialtyModal');
        $this->emit('quickAlert', 'Updated');
    }
}
