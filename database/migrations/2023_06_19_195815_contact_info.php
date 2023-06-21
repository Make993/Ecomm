<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function contact()
    {
        $contact->Name=$req->Name;
        $contact->email=$req->email;
        $contact->subject=$req->subject;
        $contact->message=$req->message; 
        $contact->save();       
        return redirect('contact'); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
