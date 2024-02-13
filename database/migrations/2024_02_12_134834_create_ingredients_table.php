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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->timestamps();
        });

        DB::table("ingredients")->insert([
            ["name" => "Taste of nuts and figs", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "brown sugar", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "molasses", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "dark fruit", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "caramel", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
