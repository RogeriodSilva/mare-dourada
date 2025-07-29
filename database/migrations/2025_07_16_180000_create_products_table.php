<?php

use App\Models\Collection;
use Illuminate\Support\Carbon;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->float('price')->default(0);
            $table->timestamps();

            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id')->references('id')->on('collections');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });


        DB::table('products')->insert([
            [
                'name' => 'Brisa de Coral',
                'description' => 'Hidratante corporal da coleção Sereia da Tarde, com toque suave e fragrância marinha.',
                'price' => 459.90,
                'slug' => 'brisa-de-coral',
                'collection_id' => Collection::where('name', 'Sereia da Tarde')->first()->id,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luz do Abismo',
                'description' => 'Iluminador facial com brilho dourado e textura leve, inspirado nas sereias ao entardecer.',
                'price' => 569.90,
                'slug' => 'luz-do-abismo',
                'collection_id' => Collection::where('name', 'Sereia da Tarde')->first()->id,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Encanto Salgado',
                'description' => 'Perfume com notas florais tropicais e um toque salgado, sensual como uma sereia ao pôr do sol.',
                'price' => 619.90,
                'slug' => 'encanto-salgado',
                'collection_id' => Collection::where('name', 'Sereia da Tarde')->first()->id,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Espuma das Marés',
                'description' => 'Sabonete hidratante e refrescante com espuma cremosa, perfeito para rituais de autocuidado.',
                'price' => 124.90,
                'slug' => 'espuma-das-mares',
                'collection_id' => Collection::where('name', 'Sereia da Tarde')->first()->id,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bruma do Litoral',
                'description' => 'Body splash refrescante com notas tropicais e aquáticas, ideal para dias ensolarados e peles salgadas de praia.',
                'price' => 849.90,
                'slug' => 'bruma-do-litoral',
                'collection_id' => Collection::where('name', 'Garota do Mar')->first()->id,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toque de Areia',
                'description' => 'Hidratante leve com textura sedosa e fragrância envolvente como um banho de sol à beira-mar.',
                'price' => 754.90,
                'slug' => 'toque-de-areia',
                'collection_id' => Collection::where('name', 'Garota do Mar')->first()->id,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alma Salgada',
                'description' => 'Uma fragrância luminosa e marcante, com fundo amadeirado e toque floral salgado, perfeita para garotas que vivem intensamente o mar.',
                'price' => 529.90,
                'slug' => 'alma-salgada',
                'collection_id' => Collection::where('name', 'Garota do Mar')->first()->id,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bruma Dourada',
                'description' => 'Bruma corporal refinada com notas florais suaves e fundo ambarado. Uma carícia perfumada com brilho de luxo.',
                'price' => 149.90,
                'slug' => 'bruma-dourada',
                'collection_id' => Collection::where('name', 'Primavera Dourada')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Essência Primavera',
                'description' => 'Perfume marcante com notas de flor de laranjeira, baunilha e jasmim, envoltas em um toque dourado sofisticado.',
                'price' => 349.00,
                'slug' => 'essencia-primavera',
                'collection_id' => Collection::where('name', 'Primavera Dourada')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sabonete Jardim de Ouro',
                'description' => 'Sabonete em barra floral com espuma cremosa e fragrância exuberante, inspirado nos jardins primaveris europeus.',
                'price' => 79.90,
                'slug' => 'sabonete-jardim-de-ouro',
                'collection_id' => Collection::where('name', 'Primavera Dourada')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kit Sabonetes Dourados',
                'description' => 'Conjunto luxuoso de sabonetes finos, ideal para presente. Embalagem premium com toque floral-dourado.',
                'price' => 229.00,
                'slug' => 'kit-sabonetes-dourados',
                'collection_id' => Collection::where('name', 'Primavera Dourada')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bruma Dourada do Mar',
                'description' => 'Bruma corporal sofisticada com notas minerais e toque dourado, perfeita para quem busca o brilho intenso das praias tropicais.',
                'price' => 249.90,
                'slug' => 'bruma-dourada-do-mar',
                'collection_id' => Collection::where('name', 'Ouro da Praia')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hidratante Toque do Ouro',
                'description' => 'Hidratante corporal com textura aveludada e fragrância exclusiva que remete ao brilho dourado das areias tropicais.',
                'price' => 199.90,
                'slug' => 'toque-do-ouro',
                'collection_id' => Collection::where('name', 'Ouro da Praia')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Óleo Corporal Brilho do Sol',
                'description' => 'Óleo corporal luxuoso que hidrata profundamente, deixando a pele com um brilho dourado natural e aveludado.',
                'price' => 299.90,
                'slug' => 'brilho-do-sol',
                'collection_id' => Collection::where('name', 'Ouro da Praia')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sabonete Maré Dourada',
                'description' => 'Sabonete em barra com aroma mineral e dourado, com espuma cremosa e textura refinada para um banho de luxo.',
                'price' => 99.90,
                'slug' => 'mare-dourada',
                'collection_id' => Collection::where('name', 'Ouro da Praia')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Body Splash Brisa dos Sete Mares',
                'description' => 'Body splash refrescante com fragrância marinha e toque cítrico, evocando a leveza e mistério dos sete mares.',
                'price' => 179.90,
                'slug' => 'brisa-dos-sete-mares',
                'collection_id' => Collection::where('name', 'Encanto dos Sete Mares')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sabonete Maré Encantada',
                'description' => 'Sabonete em barra com aroma suave e refrescante, inspirado nas ondas calmas dos sete mares.',
                'price' => 89.90,
                'slug' => 'mare-encantada',
                'collection_id' => Collection::where('name', 'Encanto dos Sete Mares')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Creme Corporal Encanto Oceano',
                'description' => 'Creme corporal nutritivo com toque aveludado e fragrância fresca, trazendo o poder revitalizante dos sete mares para sua pele.',
                'price' => 219.90,
                'slug' => 'encanto-oceano',
                'collection_id' => Collection::where('name', 'Encanto dos Sete Mares')->first()->id,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
