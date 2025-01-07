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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('sub_category');
            $table->string('title');
            $table->string('address');
            $table->string('contact_number');
            $table->string('email');
            $table->text('description');
            $table->string('boq')->nullable();
            $table->decimal('tender_value', 15, 2);
            $table->date('end_date');
            $table->json('required_documents');
            $table->string('work_photos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenders');
    }
};
