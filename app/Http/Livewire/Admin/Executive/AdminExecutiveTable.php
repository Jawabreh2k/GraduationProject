<?php

namespace App\Http\Livewire\Admin\Executive;

use Livewire\Component;

class AdminExecutiveTable extends Component
{
    public function render()
    {
        return view('livewire.admin.executive.admin-executive-table')->layout('master.master');
    }
}
