<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('generic_name');
            $table->string('form');
            $table->string('restriction_formula');
            $table->string('description');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('categories');
            $table->boolean('faskes_tk1');
            $table->boolean('faskes_tk2');
            $table->boolean('faskes_tk3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('generic_name');
            $table->dropColumn('form');
            $table->dropColumn('restriction_formula');
            $table->dropColumn('description');
            $table->dropForeign(['category']);
            $table->dropColumn('category');
            $table->dropColumn('faskes_tk1');
            $table->dropColumn('faskes_tk2');
            $table->dropColumn('faskes_tk3');
        });
    }
}
