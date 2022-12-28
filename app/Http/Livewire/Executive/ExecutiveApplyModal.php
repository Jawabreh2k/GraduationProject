<?php

namespace App\Http\Livewire\Executive;

use App\Models\Executive;
use App\Models\Task;
use Livewire\Component;

class ExecutiveApplyModal extends Component
{
    public $day_amount, $amount, $task_id;
    public $Executive;

    public function getListeners()
    {
        return [
            'showApplyModal',
        ];
    }

    public function showApplyModal(Task $task)
    {
        $this->task_id = $task->id;
    }

    public function rules()
    {
        return [
            'amount' => 'required|numeric',
            'day_amount' => 'required|numeric',
        ];
    }

    public function mount()
    {
        $this->Executive = auth('executive')->user();
    }

    public function render()
    {
        return view('livewire.executive.executive-apply-modal');
    }

    public function save()
    {
        $this->validate();
        $this->Executive->tasks()->attach($this->task_id, ['amount' => $this->amount, 'day_amount' => $this->day_amount]);
        $this->emit('hideApplyModal');
        $this->emit('quickAlert', 'Saved');
        $this->emit('mount');

    }
}
