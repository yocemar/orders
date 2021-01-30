<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'master';

    /**
     * Run the migrations.
     * @table master
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->biginteger('item_id')->nullable();
            $table->biginteger('location_id')->nullable();
            $table->biginteger('order_id')->nullable();
            $table->string('quantity', 45)->nullable();
            $table->string('lot', 45)->nullable();
            $table->string('lot2', 45)->nullable();
            $table->string('note', 45)->nullable();
            $table->string('status', 45)->nullable();

            $table->index(["order_id"], 'order_id_idx');

            $table->index(["location_id"], 'location_id_idx');

            $table->index(["item_id"], 'product_id_idx');
            $table->nullableTimestamps();


           /* $table->foreign('item_id', 'product_id_idx')
                ->references('id')->on('Items')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('location_id', 'location_id_idx')
                ->references('id')->on('locations')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('order_id', 'order_id_idx')
                ->references('id')->on('orders')
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
