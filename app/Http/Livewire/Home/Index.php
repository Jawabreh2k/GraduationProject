<?php

namespace App\Http\Livewire\Home;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.home.index')->layout('user-dashboard.master');
    }

    public function checkLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home.issue.upload');
        } else {
            return redirect()->route('home.login');
        }
    }
}
