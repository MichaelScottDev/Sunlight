<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tip_submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('subject')->nullable();
            $table->string('subject_other')->nullable();
            $table->text('summary');
            $table->string('evidence_type')->nullable();
            $table->string('drive_link')->nullable();
            $table->string('direct_url')->nullable();
            $table->text('evidence_desc')->nullable();
            $table->boolean('wants_pickup')->default(false);
            $table->string('pickup_suburb')->nullable();
            $table->string('pickup_timing')->nullable();
            $table->text('pickup_notes')->nullable();
            $table->string('relation_to_subject')->nullable();
            $table->boolean('has_corroboration')->default(false);
            $table->boolean('reported_before')->default(false);
            $table->boolean('safety_concern')->default(false);
            $table->boolean('consents_publish')->default(false);
            $table->boolean('is_anonymous')->default(true);
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_pref')->nullable();
            $table->text('contact_notes')->nullable();
            $table->string('status')->default('new');
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tip_submissions');
    }
};
