<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This migration creates the categories table and inserts the
     * initial categories.
     */
    public function up(): void
    {
        // Create the categories table
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Insert the initial categories
        $categories = [
            'politica',
            'economia',
            'food&drink',
            'sport',
            'intrattenimento',
            'tech',
        ];

        foreach ($categories as $category) {
            // Create a new category instance and save it to the database
            Category::create([
                'name' => $category,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
