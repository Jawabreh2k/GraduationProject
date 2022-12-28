<?php

namespace App\Http\Livewire\Admin\Collage;

use App\Models\Collage;
use Livewire\Component;

class AdminCollageUpdate extends Component
{
    public $Collage;

    public function getListeners()
    {
        return [
            'ShowUpdateCollageModal',
        ];
    }

    public function rules()
    {
        return [
            'Collage.name' => 'required',
            'Collage.description' => 'nullable',
        ];
    }

    public function render()
    {
        return view('livewire.admin.collage.admin-collage-update');
    }

    public function ShowUpdateCollageModal(Collage $collage)
    {
        $this->Collage = $collage;
    }

    public function save()
    {
        $this->Collage->save();
        $this->emit('refresh');
        $this->emit('quickAlert', 'Updated');
        $this->emit('HideUpdateCollageModal');
    }
}
