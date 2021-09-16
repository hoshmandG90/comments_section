<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use  App\Models\user;
class Logout extends Component
{

    public function logout(){
        Auth::logout();
        return redirect()->to(route('login'));
    }
    public function render()
    {
        return view('livewire.logout')->extends(('layouts.app'));
    }
}
