<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use  App\Models\user;
class Login extends Component
{

 
      public $email;
      public $password;
      public $check;
      public function LoginPage(){
        $validate=$this->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
          
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            return redirect()->to(route('index'));

        }else{
            $this->check=Auth::user() == $this->email ? '':'the email and password does not match';
        }
    }

    public function render()
    {
        return view('livewire.login')->extends('layouts.app');
    }
}
