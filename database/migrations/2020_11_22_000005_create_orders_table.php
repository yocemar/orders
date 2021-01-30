<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'orders';

    /**
     * Run the migrations.
     * @table orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->biginteger('user_id')->nullable();
            $table->biginteger('customer_id')->nullable();
            $table->biginteger('detail_id')->nullable();
            
            $table->string('number', 45)->nullable();
            $table->string('shipment', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->string('payment', 45)->nullable();
            $table->string('value', 45)->nullable();
            $table->string('invoice', 45)->nullable();

            $table->date('date')->nullable();
            $table->index(["detail_id"], 'detail_id_idx');
            $table->index(["user_id"], 'user_id_idx');
            $table->index(["customer_id"], 'customer_id_idx');
            $table->nullableTimestamps();


         /*   $table->foreign('user_id', 'user_id_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('customer_id', 'customer_id_idx')
                ->references('id')->on('customers')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('order_detail_id', 'order_detail_id_idx')
                ->references('id')->on('order_details')
                ->onDelete('no action')
                ->onUpdate('no action');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
