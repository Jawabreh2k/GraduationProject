<?php

namespace App\Http\Livewire\Admin\Task;

use App\Models\Task;
use Livewire\Component;

class AdminTaskTable extends Component
{
    public $Task;

    public function rules()
    {
        return [
            'Task.*.status' => 'nullable',
        ];
    }

    public function mount()
    {
        $this->Task = Task::all();

    }

    public function render()
    {
        return view('livewire.admin.task.admin-task-table');
    }

    public function changeStatus()
    {
        foreach ($this->Task as $task) {
            $task->save();
        }
        $this->emit('quickAlert', 'Saved');
    }
}
