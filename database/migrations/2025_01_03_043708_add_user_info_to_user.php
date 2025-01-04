<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('full_name');
            $table->string('username')->unique();
            $table->string('phone_number');
            $table->string('company')->nullable();
            $table->string('email_otp')->nullable();
            $table->string('mobile_otp')->nullable();
            $table->string('aadhaar_no')->nullable();
            $table->string('gst_no')->nullable();
            $table->integer('aadhaar_verify_status')->default(0)->comment('0-notverify,1-verify');
            $table->integer('gst_verify_status')->default(0);


                $table->string('name1')->nullable();
                $table->string('address1')->nullable();
                $table->string('address2')->nullable();
                $table->string('state1')->nullable();
                $table->string('district1')->nullable();
                $table->string('pincode1')->nullable();
                $table->string('phone_number1');
                $table->string('email1')->nullable();

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
};
