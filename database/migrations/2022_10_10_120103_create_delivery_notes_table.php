<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->id('id_delivery_note');
            $table->string('ref_name_delivery_note')->nullable(); // numero de factura o referencia de factura
            $table->string('ctrl_num_delivery_note')->nullable();
            $table->integer('ctrl_num')->nullable();
            $table->float('total_amount_delivery_note', 8, 2)->nullable();
            $table->float('exempt_amout_delivery_note', 8, 2)->nullable();
            $table->float('no_exempt_amout_delivery_note', 8, 2)->nullable();
            $table->float('total_amount_tax_delivery_note', 8, 2)->nullable();
            $table->float('residual_amount_delivery_note', 8, 2)->nullable();
            $table->date('date_delivery_note')->nullable();
            $table->integer('type_payment')->nullable();
            $table->integer('id_exchange')->nullable();
            $table->integer('id_order_state')->default(1);
            $table->integer('id_company')->nullable();
            $table->integer('id_client')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('id_worker')->nullable();
            $table->integer('id_delivery')->nullable();
            $table->integer('state_delivery')->default(0);
            $table->boolean('enabled_delivery_note')->default(1);
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
        Schema::dropIfExists('delivery_notes');
    }
}
