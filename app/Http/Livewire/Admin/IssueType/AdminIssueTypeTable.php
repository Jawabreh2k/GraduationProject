<?php

namespace App\Http\Livewire\Admin\IssueType;

use App\Models\IssueType;
use Livewire\Component;

class AdminIssueTypeTable extends Component
{
    public $delete_id;
    protected $listeners = ['refresh' => '$refresh'];

    public function render()
    {
        $issueType = IssueType::all();
        return view('livewire.admin.issue-type.admin-issue-type-table', [
            'issueType' => $issueType,
        ]);
    }

    public function ShowAddIssueModal()
    {
        $this->emit('ShowAddIssueModal');
    }

    public function showDeleteModal($delete_id)
    {
        $this->delete_id = $delete_id;
        $this->emit('showDeleteModal');
    }

    public function ShowUpdateIssueModal($update_id)
    {
        $this->emit('ShowUpdateIssueModal', $update_id);
    }

    public function delete()
    {
        IssueType::destroy($this->delete_id);
        $this->emit('refresh');
        $this->emit('hideDeleteModal');
        $this->emit('quickAlert', 'Deleted');
    }
}
