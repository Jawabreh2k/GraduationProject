<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Collage;
use App\Models\Specialty;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminStudentCreate extends Component
{
    public $name, $student_number, $collage_id, $specialty_id, $password;

    public function rules()
    {
        return [
            'name' => 'required',
            'student_number' => 'required|integer',
            'collage_id' => 'required',
            'specialty_id' => 'required',
            'password' => 'required|min:6|max:8',
        ];
    }

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);

    }

    public function render()
    {
        $collages = Collage::all();
        $specialties = [];
        if ($this->collage_id) {
            $specialties = Specialty::where('collage_id', $this->collage_id)->get();
        }
        return view('livewire.admin.student.admin-student-create', [
            'collages' => $collages,
            'specialties' => $specialties,
        ])
            ->layout('master.master');
    }

    public function save()
    {
        $this->validate();
        $students = new Student();
        $students->name = $this->name;
        $students->student_number = $this->student_number;
        $students->collage_id = $this->collage_id;
        $students->specialty_id = $this->specialty_id;
        $students->password = Hash::make($this->password);
        $students->save();
        $this->name = '';
        $this->student_number = '';
        $this->collage_id = '';
        $this->specialty_id = '';
        $this->password = '';
        $this->emit('quickAlert', 'Saved');

    }
}
