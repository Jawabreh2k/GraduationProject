<?php

namespace App\Http\Livewire\Home;

use App\Models\Classroom;
use App\Models\Collage;
use App\Models\IssueType;
use App\Models\Task;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeIssueUpload extends Component
{
    use WithFileUploads;

    public $name, $collage_id, $classroom_id, $issue_type_id, $image, $description;
    public $Student;

    public function getListeners()
    {
        return [
            'refresh' => '$refresh',
        ];
    }

    public function rules()
    {
        $rules = [
            'name' => 'required',
            'collage_id' => 'required',
            'classroom_id' => 'required',
            'issue_type_id' => 'required',
            'image' => 'required|image',
            'description' => 'required|max:200',
        ];

        return $rules;
    }

    public function mount()
    {
        $this->Student = auth('student')->user();
        $this->Student = $this->Student->tasks()->latest()->first();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $collages = Collage::all();
        $issue_types = IssueType::all();
        $classRooms = [];
        if (isset($this->collage_id)) {
            $classRooms = Classroom::where('collage_id', $this->collage_id)->get();
        }
        return view('livewire.home.home-issue-upload', [
            'collages' => $collages,
            'classRooms' => $classRooms,
            'issue_types' => $issue_types,
        ])->layout('user-dashboard.master');
    }

    public function save()
    {
        $this->validate();
        $task = new Task();
        $task->name = $this->name;
        $task->student_id = auth()->user()->id;
        $task->collage_id = $this->collage_id;
        $task->classroom_id = $this->classroom_id;
        $task->issue_type_id = $this->issue_type_id;
        $task->image_path = $this->image->store(auth()->user()->id, 'task_image');
        $task->description = $this->description;
        $task->status = 1;
        $task->save();
        return redirect()->route('home.issue.upload');
    }
}
