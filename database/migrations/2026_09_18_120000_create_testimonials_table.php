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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('role', 80)->nullable();
            $table->text('quote');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->string('avatar_path')->nullable();
            $table->timestamps();
        });

        // Seed the reviews that were hard-coded in the testimonials carousel so the
        // live site shows the same content straight after migrating.
        $now = now();

        DB::table('testimonials')->insert([
            [
                'name' => 'Daniel R.',
                'role' => 'Marketing Manager',
                'quote' => 'We hired Mariya to handle our Google Ads campaigns, and the improvement was immediate. He set up professional search and display campaigns, improved our Quality Score, and significantly increased our ROI. His reporting and insights were always clear and data-driven.',
                'rating' => 5, 'avatar_path' => null, 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'Sarah M.',
                'role' => 'eCommerce Store Owner',
                'quote' => "Mariya completely transformed our Facebook Ads strategy. He rebuilt our pixel setup, implemented server-side tracking, and our conversion data accuracy jumped dramatically. We finally know exactly what's working.",
                'rating' => 5, 'avatar_path' => null, 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'James T.',
                'role' => 'Digital Agency Director',
                'quote' => 'Outstanding work on our GA4 and GTM setup. Mariya is thorough, communicates every step clearly, and delivered everything on time. Our analytics are finally giving us the data we need to make real business decisions.',
                'rating' => 5, 'avatar_path' => null, 'created_at' => $now, 'updated_at' => $now,
            ],
            [
                'name' => 'Aisha K.',
                'role' => 'Shopify Store Owner',
                'quote' => 'I hired Mariya for server-side tracking on my Shopify store and the results were incredible. My Facebook ROAS improved by over 40% just from having cleaner conversion data. Extremely knowledgeable and responsive.',
                'rating' => 5, 'avatar_path' => null, 'created_at' => $now, 'updated_at' => $now,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
