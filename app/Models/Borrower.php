<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    public function loanType(){
        return $this->belongsTo(LoanType::class);
    }

    public function guarantor(){
        return $this->hasOne(Guarantor::class);
    }
}
