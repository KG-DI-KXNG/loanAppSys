<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class LoanApplication extends Component
{
    use WithFileUploads;
    // public $fname, $lname, $email, $address, $city,$country, $dob, $amt, $idFile, $incomeFile;
    public $loaner;
    public $guarantee;
    public $result;
    
    
    public function render()
    {
        return view('livewire.loan-application');
    }

    

    public function submit()
    {
       $this->validate([
        ""
       ],[

       ],[
           ''
       ]);
        return $this->result = "hello";
    }
}
