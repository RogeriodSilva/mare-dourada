<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->float('rating', 3, 2);
            $table->string('comment');
            $table->timestamps();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });


        DB::unprepared("
            CREATE TRIGGER update_product_rating_after_insert
            AFTER INSERT ON feedback
            FOR EACH ROW
            BEGIN
                UPDATE products
                SET rating = (
                    SELECT COALESCE(AVG(rating), 0)
                    FROM feedback
                    WHERE feedback.product_id = NEW.product_id
                )
                WHERE id = NEW.product_id;
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
