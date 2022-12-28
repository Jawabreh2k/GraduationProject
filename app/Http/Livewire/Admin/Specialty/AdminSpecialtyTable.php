<?php

namespace App\Http\Livewire\Admin\Specialty;

use App\Models\Specialty;
use Livewire\Component;

class AdminSpecialtyTable extends Component
{
    public $delete_id;

    public function getListeners()
    {
        return [
            'refresh' => '$refresh',
        ];
    }

    public function render()
    {
        $specialties = Specialty::all();
        return view('livewire.admin.specialty.admin-specialty-table', [
            'specialties' => $specialties,
        ]);
    }

    public function ShowAddSpecialtyModal()
    {
        $this->emit('ShowAddSpecialtyModal');
    }

    public function showDeleteModal($delete_id)
    {
        $this->delete_id = $delete_id;
        $this->emit('showDeleteModal');
    }

    public function delete()
    {
        Specialty::destroy($this->delete_id);
        $this->emit('hideDeleteModal');
        $this->emit('refresh');
        $this->emit('quickAlert', 'Deleted');
    }

    public function ShowUpdateSpecialtyModal($update_id)
    {
        $this->emit('ShowUpdateSpecialtyModal', $update_id);
    }
}
