<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Items';

    /**
     * Run the migrations.
     * @table Items
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->biginteger('customer_id');
            $table->biginteger('location_id');
            $table->string('name', 45)->nullable();
            $table->string('code', 45)->nullable();
            $table->string('image', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->string('detail', 255)->nullable();
            $table->string('weight', 45)->nullable();
            

            $table->nullableTimestamps();

            $table->index(["customer_id"], 'customer_id_idx');
            


           /*$table->foreign('customer_id', 'customer_id_idx')
              ->references('id')->on('customers')
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
