<?php

namespace App\Http\Livewire\Admin\IssueType;

use App\Models\IssueType;
use Livewire\Component;

class AdminIssueTypeAdd extends Component
{
    public $name, $description;

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'nullable',
        ];
    }

    public function render()
    {
        return view('livewire.admin.issue-type.admin-issue-type-add');
    }

    public function save()
    {
        $issue = new  IssueType();
        $issue->name = $this->name;
        $issue->description = $this->description;
        $issue->save();
        $this->emit('refresh');
        $this->emit('hideAddIssueModal');
        $this->emit('quickAlert', 'Saved');

    }
}
