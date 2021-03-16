<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {;
            $table->increments( 'id' );
            $table->string( 'product_name', 200 );
            $table->string( 'session_id' )->default( '0' );
            $table->integer( 'product_id' )->default( 0 );
            $table->float( 'price' )->default( 0 );
            $table->integer( 'quantity' )->default( 0 );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
