<?php

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
        Schema::create('priorities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 100);
            $table->timestamps();
        });

        DB::table('priorities')->insert([
            [
                'name' => 'high',
                'description' => 'high priority',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'medium',
                'description' => 'medium priority',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'low',
                'description' => 'low priority',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priorities');
    }
};
