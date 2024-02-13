<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('containings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->timestamps();
        });
        DB::table("containings")->insert([
            ["name" => "Bottle", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Can", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Keg", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Growler", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Cask", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Draft", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('containings');
    }
};
