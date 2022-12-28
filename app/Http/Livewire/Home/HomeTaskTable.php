<?php

namespace App\Http\Livewire\Home;

use App\Models\Task;
use Livewire\Component;

class HomeTaskTable extends Component
{
    public function render()
    {
        $tasks = auth('student')->user()->tasks ?? [];
        return view('livewire.home.home-task-table', [
            'tasks' => $tasks,
        ])->layout('student-dashboard.master');
    }
}
