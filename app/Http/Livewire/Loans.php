<?php

namespace App\Http\Livewire;

use App\Models\Borrower;
use Livewire\Component;
use Livewire\WithPagination;

class Loans extends Component
{
    Use WithPagination;

    public $view;
    public $search;
    public $viewDetails;

    public function render()
    {
        $loaners = Borrower::search('fname', $this->search)->paginate(10);
        return view('livewire.loans',['loaners'=>$loaners]);
    }

    public function viewLoaner($id) :void
    {
        $this->view = true;
        $this->viewDetails = Borrower::find($id);
    }
}
