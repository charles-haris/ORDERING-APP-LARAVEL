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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("type_product",20);
            $table->string("weight",20);
            $table->string("departure_address",30);
            $table->string("destination_address",30);
            $table->string("status",20)->default('undelivered');
            $table->string("description",200);
            $table->unsignedBigInteger("client_id");
            $table->foreign("client_id")->references("id")->on('client');
            $table->unsignedBigInteger("deliveryman_id")->nullable();
            $table->foreign("deliveryman_id")->references("id")->on("deliveryman");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
