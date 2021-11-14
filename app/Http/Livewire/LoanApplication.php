<?php

namespace App\Http\Livewire;

use App\Models\Borrower;
use App\Models\Guarantor;
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
        "loaner.fname" => "required",
        "loaner.lname" => "required",
        "loaner.fname" => "required",
        "loaner.fname" => "required",
        "loaner.fname" => "required",
        "loaner.fname" => "required",
       ],[],[
           'loaner.fname'=>'First Name',
           'loaner.lname'=>'Last Name',
       ]);

       $loan = new Borrower();
       $loan->loan_type_id = $loaner['type'];
       $loan->profile_photo = $loaner['type'];
       $loan->fname = $loaner['type'];
       $loan->lname = $loaner['type'];
       $loan->email = $loaner['type'];
       $loan->contact = $loaner['type'];
       $loan->age = $loaner['type'];
       $loan->dob = $loaner['type'];
       $loan->address = $loaner['type'];
       $loan->loan_amt = $loaner['type'];
       $loan->proof_of_id = $loaner['type'];
       $loan->proof_of_income = $loaner['type'];
       $loan->trn = $loaner['type'];
       $loan->credit_score = $loaner['type'];
       $loan->save();

       $guarantor = new Guarantor();
       $guarantor->fname = $this->guarantee['gFname'];
       $guarantor->lname = $this->guarantee['gLname'];
       $guarantor->email = $this->guarantee['gEmail'];
       $guarantor->contact = $this->guarantee['gContact'];
       $guarantor->$loan;

        return $this->result = "hello";
    }
}
