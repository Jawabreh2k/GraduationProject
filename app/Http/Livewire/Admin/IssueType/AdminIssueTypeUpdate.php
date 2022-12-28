<?php

namespace App\Http\Livewire\Admin\IssueType;

use App\Models\IssueType;
use Livewire\Component;

class AdminIssueTypeUpdate extends Component
{
    public $Issue;

    public function getListeners()
    {
        return [
            'ShowUpdateIssueModal',
        ];
    }

    public function rules()
    {
        return [
            'Issue.name' => 'required',
            'Issue.description' => 'nullable',
        ];
    }

    public function ShowUpdateIssueModal(IssueType $issue)
    {
        $this->Issue = $issue;
    }

    public function render()
    {
        return view('livewire.admin.issue-type.admin-issue-type-update');
    }

    public function save()
    {
        $this->validate();
        $this->Issue->save();
        $this->emit('hideUpdateIssueModal');
        $this->emit('refresh');
        $this->emit('quickAlert', 'Updated');

    }
}
