<?php

namespace App\Http\Livewire\Admin\IssueType;

use Livewire\Component;

class AdminIssueTypeIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.issue-type.admin-issue-type-index')->layout('master.master');
    }
}
