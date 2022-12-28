<?php

namespace App\Http\Livewire\Home;

use App\Models\Executive;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ExecutiveRegister extends Component
{
    public $name, $email, $phone, $location, $issue_type_id, $password;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:executives,email',
            'phone' => 'required|max:10|min:10',
            'location' => 'required',
            'issue_type_id' => 'required',
            'password' => 'required|min:6|max:8',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.home.executive-register')->layout('user-dashboard.master');
    }

    public function save()
    {
        $this->validate();
        $executive = new Executive();
        $executive->name = $this->name;
        $executive->email = $this->email;
        $executive->phone = $this->phone;
        $executive->location = $this->location;
        $executive->issue_type_id = $this->issue_type_id;
        $executive->password = Hash::make($this->password);
        $executive->save();
        return redirect()->route('executive.login');
    }

}
