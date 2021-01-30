<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'customers';

    /**
     * Run the migrations.
     * @table customers
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('company_id', 45)->nullable();
            $table->string('name', 45)->nullable();
            $table->string('document', 45)->nullable();
            $table->string('type_document', 45)->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('password', 45)->nullable();
            $table->string('logo', 45)->nullable();
            $table->string('status', 45)->nullable();
            $table->string('billing_date', 45)->nullable();
            $table->string('remember_token', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->string('customerscol', 45)->nullable();

            $table->index(["company_id"], 'company_id');
            $table->nullableTimestamps();
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
