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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->timestamps();
        });
        DB::table("brands")->insert([
            ["name" => "Budweiser", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Heineken", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Guinness", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Stella Artois", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Corona", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Coors Light", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
