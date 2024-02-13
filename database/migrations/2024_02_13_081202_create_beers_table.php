<?php

use Faker\Factory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string("name");

            $table->foreignIdFor(\App\Models\brand::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\flavor::class)->constrained()->cascadeOnDelete();;
            $table->foreignIdFor(\App\Models\brewing::class)->constrained()->cascadeOnDelete();;
            $table->foreignIdFor(\App\Models\containings::class)->constrained()->cascadeOnDelete();;
            $table->foreignIdFor(\App\Models\category::class)->constrained()->cascadeOnDelete();;
            $table->integer("tank_time");
            $table->integer("degree");
            $table->integer(
                "quantity"
            );
            $table->string("description");
            $table->integer("stock");
            $table->boolean("salable");

            $table->timestamps();
        });
        Schema::create('beer_ingredient', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\beer::class)->constrained()->cascadeOnDelete();;
            $table->foreignIdFor(\App\Models\ingredient::class)->constrained()->cascadeOnDelete();
            $table->primary(["beer_id", "ingredient_id"]);

        });
        for ($i = 0; $i < 10; $i++) {
            $faker = Factory::create();
            \App\Models\beer::create([
                'name' => $faker->word,
                'brand_id' => $faker->numberBetween(1, 5),
                'flavor_id' => $faker->numberBetween(1, 5),
                'brewing_id' => $faker->numberBetween(1, 5),
                'containings_id' => $faker->numberBetween(1, 5),
                'category_id' => $faker->numberBetween(1, 5),
                'tank_time' => $faker->numberBetween(1, 100),
                'degree' => $faker->randomFloat(2, 0, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'description' => $faker->sentence,
                'stock' => $faker->numberBetween(0, 1000),
                'salable' => $faker->boolean,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beer_ingredient');
        Schema::dropIfExists('beers');

    }
};
