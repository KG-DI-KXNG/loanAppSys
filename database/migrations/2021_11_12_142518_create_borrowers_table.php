<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("loan_type_id");
            $table->string("profile_photo");
            $table->string("fname");
            $table->string("lname");
            $table->string("email");
            $table->string("contact");
            $table->integer("age");
            $table->date("dob");
            $table->string("address");
            $table->double("loan_amt");
            $table->string("proof_of_id")->nullable();
            $table->string("proof_of_income")->nullable();
            $table->string("trn")->nullable();
            $table->integer("credit_score")->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowers');
    }
}
