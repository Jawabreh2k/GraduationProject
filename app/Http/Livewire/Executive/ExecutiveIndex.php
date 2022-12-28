<?php

namespace App\Http\Livewire\Executive;

use App\Models\Task;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ExecutiveIndex extends Component
{
    public $Tasks;

    public function getListeners()
    {
        return [
            'mount' => 'mount',
        ];
    }

    public function mount()
    {
        $this->Tasks = auth('executive')->user()->IssueType ?? [];
        $this->Tasks = $this->Tasks->tasks()->where('status', 0)->get() ?? [];
    }

    public function render()
    {
        return view('livewire.executive.executive-index')->layout('executive-dashboard.master');
    }

    public function downloadFile(Task $task)
    {
        return Storage::disk('task_image')->download('' . $task->image_path);

    }

    public function apply($task_id)
    {
        $this->emit('showApplyModal', $task_id);
    }
}
