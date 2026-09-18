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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('label', 60);
            $table->decimal('value', 9, 1);
            $table->string('suffix', 5)->nullable();
            $table->timestamps();
        });

        // Seed the figures that were hard-coded in the "My Completed Projects" section
        // so the live site shows the same numbers straight after migrating.
        $now = now();

        DB::table('stats')->insert([
            ['label' => 'Happy Clients', 'value' => 85, 'suffix' => '+', 'created_at' => $now, 'updated_at' => $now],
            ['label' => 'Project Completed', 'value' => 150, 'suffix' => '+', 'created_at' => $now, 'updated_at' => $now],
            ['label' => 'Years Experience', 'value' => 3, 'suffix' => '+', 'created_at' => $now, 'updated_at' => $now],
            ['label' => 'Ad Spend', 'value' => 90, 'suffix' => 'K$', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
