<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'bills';

    /**
     * Run the migrations.
     * @table bills
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigincrements('idbills');
            $table->biginteger('order_id')->nullable();
            $table->string('number', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->string('cost', 45)->nullable();

            $table->index(["order_id"], 'order_id_idx');
            $table->nullableTimestamps();


           /* $table->foreign('order_id', 'order_id_idx')
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
