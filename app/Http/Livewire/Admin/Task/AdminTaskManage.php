<?php

namespace App\Http\Livewire\Admin\Task;

use Livewire\Component;

class AdminTaskManage extends Component
{
    public function render()
    {
        return view('livewire.admin.task.admin-task-manage')->layout('master.master');
    }
}
