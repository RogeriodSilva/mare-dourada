<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });

        $now = Carbon::now();

        $names = [
            'Encanto dos Sete Mares',
            'Garota do Mar',
            'Ouro da Praia',
            'Primavera Dourada',
            'Sereia da Tarde',
        ];

        // Montar os registros com slug
        $collections = collect($names)->map(function ($name) use ($now) {
            return [
                'name' => $name,
                'slug' => Str::slug($name),
                'created_at' => $now,
                'updated_at' => $now,
            ];
        })->toArray();

        // Inserir no banco
        DB::table('collections')->insert($collections);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
