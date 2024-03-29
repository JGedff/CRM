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
        Schema::create('sale_proposals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("state")->default("pending");
            $table->integer("quantity_sold");
            $table->double("total_price");

            //FK ClientID
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
                ->references("id")
                ->on("clients")
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_proposals');
    }
};
