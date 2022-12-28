<?php

namespace App\Http\Livewire\Admin\Task;

use App\Models\executive_tasks;
use Livewire\Component;

class AdminTaskDetails extends Component
{
    public $Task;

    public function mount($id)
    {
        $this->Task = executive_tasks::where('task_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.admin.task.admin-task-details')->layout('master.master');
    }

    public function save($id)
    {
        foreach ($this->Task as $task) {
            $task->task()->update([
                'executive_id' => $id
            ]);
        }
        $this->emit('quickAlert', 'Saved');
    }
}
