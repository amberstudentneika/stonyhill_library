<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
class Livelogin extends Component
{
    public $email, $password;


    public function login(){

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password]))
        {
                return redirect('/home/admin');
        }else
        {
            session()->flash('message','Invalid login!');
        }
        return redirect('/');
    }



    public function render()
    {
        return view('livewire.livelogin');
    }
}
