<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('invoice_no');
            $table->unsignedInteger('item_no');
            $table->string('client_name');
            $table->string('client_address');
            $table->mediumText('notes');
            $table->date('date_created');
            $table->integer('access_code');
            $post->user_id= auth()->user()->id;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
