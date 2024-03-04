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
        Schema::create('sale_proposal_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sale_proposal_id');
            $table->foreing('sale_proposal_id')
                ->references('id')
                ->on('sale_proposals')
                ->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreing('product_id')
                ->references('id')
                ->on('productss')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_proposal_products');
    }
};
