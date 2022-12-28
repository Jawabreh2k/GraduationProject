<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;

class MainDashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.main-dashboard-index')
            ->layout('master.master');
    }
}
