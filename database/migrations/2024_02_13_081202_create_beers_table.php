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
            $table->foreignIdFor(\App\Models\containing::class)->constrained()->cascadeOnDelete();;
            $table->foreignIdFor(\App\Models\category::class)->constrained()->cascadeOnDelete();
            $table->string("image_path")->nullable();
            $table->integer("tank_time");
            $table->float("degree");
            $table->float("price");
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
                'containing_id' => $faker->numberBetween(1, 5),
                'category_id' => $faker->numberBetween(1, 5),
                'tank_time' => $faker->numberBetween(1, 100),
                'degree' => $faker->randomFloat(2, 0, 100),
                'price' => $faker->randomFloat(2, 0, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'description' => $faker->sentence,
                'stock' => $faker->numberBetween(0, 1000),
                'salable' => $faker->boolean,
                "image_path" => "/beers/1_test_test.jpg"
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
