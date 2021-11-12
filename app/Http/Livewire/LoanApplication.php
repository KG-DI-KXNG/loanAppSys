<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoanApplication extends Component
{
    public $fname, $lname, $email, $address, $city,$country, $dob, $amt, $idFile, $incomeFile;
    
    
    public function render()
    {
        return view('livewire.loan-application');
    }
}
