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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->timestamps();
        });
        DB::table("roles")->insert([
            ["name" => "Admin", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Editor", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Subscriber", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "Moderator", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["name" => "User", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
