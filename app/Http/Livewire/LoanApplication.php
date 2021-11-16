<?php

namespace App\Http\Livewire;

use App\Models\Borrower;
use App\Models\Guarantor;
use App\Models\LoanType;
use Livewire\Component;
use Livewire\WithFileUploads;

class LoanApplication extends Component
{
    use WithFileUploads;
    // public $fname, $lname, $email, $address, $city,$country, $dob, $amt, $idFile, $incomeFile;
    public $loaner;
    public $guarantee;
    public $result;
    public $loanType;
    
    public function mount() 
    {
        $this->loanType = LoanType::get();
    }
    public function render()
    {
        return view('livewire.loan-application');
    }

    

    public function submit()
    {
       $this->validate([
        "loaner.fname" => "required|min:2",
        "loaner.lname" => "required|min:2",
        "loaner.email" => "required|email",
        "loaner.address" => "required|alpha_num",
        "loaner.contact" => "required",
        "loaner.city" => "required",
        "loaner.country" => "required",
        "loaner.dob" => "required",
        "loaner.amt" => "required",
        "loaner.type" => "required",
        "guarantee.gFname" => "required",
        "guarantee.gLname" => "required",
        "guarantee.gEmail" => "required|email",
        "guarantee.gContact" => "required|min:7",
       ],[],[
           'loaner.fname'=>'First Name',
           'loaner.lname'=>'Last Name',
           'loaner.email'=>'Email',
           'loaner.address'=>'Address',
           'loaner.city'=>'City',
           'loaner.country'=>'Country',
           'loaner.dob'=>'Date of Birth',
           'loaner.amt'=>'Loan Amount',
           'loaner.type'=>'Loan Type',
           'guarantee.gFname'=>'Guarantee First Name',
           'guarantee.gLname'=>'Guarantee Last Name',
           'guarantee.gEmail'=>'Guarantee Email',
           'guarantee.gContact'=>'Gurantee Contact',
       ]);

       $loan = new Borrower();
       $loan->loan_type_id = $this->loaner['type'];
       $loan->profile_photo = "dummy.jpg";
       $loan->fname = $this->loaner['fname']; 
       $loan->lname = $this->loaner['lname'];
       $loan->email = $this->loaner['email'];
       $loan->contact = $this->loaner['contact'];
       $loan->age = 20;
       $loan->dob = $this->loaner['dob'];
       $loan->address = $this->loaner['address'];
       $loan->loan_amt = $this->loaner['amt'];
    //    $loan->proof_of_id = $this->loaner['idFile'];
    //    $loan->proof_of_income = $this->loaner['incomeFile'];
       $loan->trn = 123456;
       $loan->credit_score = 5;
       $loan->save();

       $guarantor = new Guarantor();
       $guarantor->borrower_id = $loan->id;
       $guarantor->fname = $this->guarantee['gFname'];
       $guarantor->lname = $this->guarantee['gLname'];
       $guarantor->email = $this->guarantee['gEmail'];
       $guarantor->contact = $this->guarantee['gContact'];
       $guarantor->save();
    }
}
