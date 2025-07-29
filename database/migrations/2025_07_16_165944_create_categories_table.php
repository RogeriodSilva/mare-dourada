<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $now = Carbon::now();

        $names = [
            'Perfume',
            'Cosméticos',
            'Higiene Pessoal',
        ];

        // Montar os registros com slug
        $categories = collect($names)->map(function ($name) use ($now) {
            return [
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        })->toArray();

        // Inserir no banco
        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
