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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('site_title');
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('social_media')->nullable();
            $table->text('google_map')->nullable();
            $table->text('contact_details')->nullable();
            $table->text('phone')->nullable();
            $table->text('mobile_number')->nullable();
            $table->text('email')->nullable();
            $table->text('footer_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
