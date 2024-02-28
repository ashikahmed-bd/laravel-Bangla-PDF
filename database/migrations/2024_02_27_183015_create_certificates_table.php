<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('application_title');
            $table->string('owner_name');
            $table->string('nid');
            $table->string('birth_registration_id')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('spouse_name')->nullable();
            $table->string('holding_no')->nullable();
            $table->string('road_name_and_no')->nullable();
            $table->string('village')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('post_office')->nullable();
            $table->string('post_code')->nullable();
            $table->string('district')->nullable();
            $table->string('upazila')->nullable();
            $table->string('serial_no')->nullable();
            $table->timestamps();
        });


        DB::table('certificates')->insert([
            'application_title' => 'মোঃ কামরুল ইসলাম',
            'owner_name' => 'Natore Pourashava',
            'nid' => '3745990345',
            'birth_registration_id' => '',
            'father_name' => 'মোঃ আরিফুল ইসলাম',
            'mother_name' => 'মোসাঃ জামেলা বেগম',
            'spouse_name' => '',
            'holding_no' => '০০৫৪-০০',
            'road_name_and_no' => 'তেবাড়িয়া উত্তরপাড়া',
            'village' => 'তেবাড়িয়া উত্তরপাড়া',
            'ward_no' => 'ward 08',
            'post_office' => 'নাটোর সদর',
            'post_code' => '৬৪০০',
            'district' => 'নাটোর',
            'upazila' => 'নাটোর সদর',
            'serial_no' => '',
            'created_at' => Carbon::now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
