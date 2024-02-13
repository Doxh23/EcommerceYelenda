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
        Schema::create('flavors', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->timestamps();
        });
        DB::table("flavors")->insert([
            ["name" => "Malts", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Hoppy", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Fruity", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Spicy", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Herbal", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Sour", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flavors');
    }
};
