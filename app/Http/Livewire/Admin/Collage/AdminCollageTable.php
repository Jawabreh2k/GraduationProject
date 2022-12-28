<?php

namespace App\Http\Livewire\Admin\Collage;

use App\Models\Collage;
use Livewire\Component;

class AdminCollageTable extends Component
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
        $collage = Collage::all();
        return view('livewire.admin.collage.admin-collage-table', [
            'collages' => $collage,
        ]);
    }

    public function ShowAddCollageModal()
    {
        $this->emit('ShowAddCollageModal');
    }

    public function showDeleteModal($delete_id)
    {
        $this->delete_id = $delete_id;
        $this->emit('showDeleteModal');
    }

    public function delete()
    {
        Collage::destroy($this->delete_id);
        $this->emit('hideDeleteModal');
        $this->emit('quickAlert', 'Deleted');
        $this->emit('refresh');

    }

    public function ShowUpdateCollageModal($update_id)
    {
        $this->emit('ShowUpdateCollageModal', $update_id);
    }
}
