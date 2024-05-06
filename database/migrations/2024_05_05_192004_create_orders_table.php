<?php

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
        Schema::create(
            'orders',
            function ( Blueprint $table ) {
                $table->id();
                $table->timestamps();
                $table->bigInteger("category_id");
                $table->string("item_name");
                $table->double("price");
                $table->integer("quantity");

                $table->foreign("category_id")
                    ->references("id")
                    ->on("categories")
                    ->onDelete("cascade");
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
