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
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("sold_quantity");
            $table->double("unit_price");

            //FK Propuesta ID
            $table->unsignedBigInteger('sale_proposal_id');
            $table->foreign('sale_proposal_id')
            ->references("id")
            ->on("sale_proposals")
            ->onDelete('cascade');

            //FK ProductoServicio ID
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
            ->references("id")
            ->on("products")
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_details');
    }
};
