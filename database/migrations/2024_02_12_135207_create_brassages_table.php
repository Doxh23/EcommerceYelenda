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
        Schema::create('brewings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->timestamps();
        });
        DB::table("brewings")->insert([
            ["name" => "Infusion", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Decoction", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Maceration", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Partial Infusion", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Percolation", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brewings');
    }
};
