<?php

namespace App\Http\Livewire\Admin\Collage;

use Livewire\Component;

class AdminCollageIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.collage.admin-collage-index')->layout('master.master');
    }
}
