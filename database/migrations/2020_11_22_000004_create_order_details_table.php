<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'order_details';

    /**
     * Run the migrations.
     * @table order_details
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->biginteger('item_id');
            $table->biginteger('order_id')->nullable();
            $table->string('quantity', 45)->nullable();
            $table->string('lot', 45)->nullable();
            $table->string('note', 45)->nullable();
            $table->index(["item_id"], 'item_id_idx');
            $table->nullableTimestamps();


           /* $table->foreign('item_id', 'item_id_idx')
                ->references('id')->on('Items')
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
