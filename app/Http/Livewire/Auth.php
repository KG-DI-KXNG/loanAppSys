<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth as authenticate;

class Auth extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'password' => 'required',
    ];

    /*

    Sometimes it's useful to validate a form field as a user types into it. 
    Livewire makes "real-time" validation simple with the $this->validateOnly() method.

    To validate an input field after every update, we can use Livewire's updated hook:

    */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.auth');
    }

    public function login()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        $email = $this->email;
        $password = $this->password;
        $credentials = ['email'=>$email, 'password'=>$password];

        if (authenticate::attempt($credentials)) {
            
                return redirect('/dashboard');
            }

        }

        else{
            session()->flash('email', 'Sumting Went Worng Bang!!!');
        }
    }
  
}
