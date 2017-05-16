<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('number_of_hour')->default(0)->after('price');
            $table->integer('number_of_day')->default(0)->after('number_of_hour');
            $table->string('certification')->nullable()->after('number_of_day');
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
            $table->dropColumn('number_of_hour');
            $table->dropColumn('number_of_day');
            $table->dropColumn('certification');
        });
    }
}
