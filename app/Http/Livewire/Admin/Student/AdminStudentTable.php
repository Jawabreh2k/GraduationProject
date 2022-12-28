<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class AdminStudentTable extends Component
{
    public function getListeners()
    {
        return [
            'refresh' => '$refresh',
        ];
    }

    public $delete_id;

    public function render()
    {
        $students = Student::all();
        return view('livewire.admin.student.admin-student-table', [
            'students' => $students,
        ])->layout('master.master');
    }

    public function showDeleteModal($id)
    {
        $this->delete_id = $id;
        $this->emit('showDeleteModal');
    }

    public function delete()
    {
        Student::destroy($this->delete_id);
        $this->emit('refresh');
        $this->emit('quickAlert', 'Deleted');
        $this->emit('hideDeleteModal');
    }
}
