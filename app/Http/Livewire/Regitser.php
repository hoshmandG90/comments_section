<?php

namespace App\Http\Livewire;
use  App\Models\user;
use  Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Regitser extends Component
{


  public $name;
  public $email;
  public $password;
  public $password_confirmation;

    public function RegisterPage(){
        $validate=$this->validate([
             'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|same:password_confirmation'
        ]);
        user::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=> Hash::make($this->password)
        ]);

        return redirect()->to(route('login'));
    }

    public function render()
    {
        return view('livewire.regitser')->extends('layouts.app');
    }
}
