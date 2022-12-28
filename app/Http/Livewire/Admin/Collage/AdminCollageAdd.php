<?php

namespace App\Http\Livewire\Admin\Collage;

use App\Models\Collage;
use Livewire\Component;

class AdminCollageAdd extends Component
{

    public $name, $description;

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'nullable',
        ];
    }

    public function render()
    {
        return view('livewire.admin.collage.admin-collage-add');
    }

    public function save()
    {
        $this->validate();
        $collage = new Collage();
        $collage->name = $this->name;
        $collage->description = $this->description;
        $collage->save();
        $this->emit('hideSaveModal');
        $this->emit('quickAlert', 'Saved');
        $this->emit('refresh');
    }
}
