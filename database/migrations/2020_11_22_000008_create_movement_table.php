<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'movement';

    /**
     * Run the migrations.
     * @table movement
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->biginteger('master_id')->nullable();
            $table->biginteger('user_id')->nullable();
            $table->string('quantity', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->string('time', 45)->nullable();
            $table->string('details', 45)->nullable();

            $table->index(["master_id"], 'master_id_idx');

            $table->index(["user_id"], 'user_id_idx');


           /* $table->foreign('master_id', 'master_id_idx')
                ->references('id')->on('master')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'user_id_idx')
                ->references('id')->on('users')
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
