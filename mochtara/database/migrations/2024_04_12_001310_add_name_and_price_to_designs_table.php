<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameAndPriceToDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('designs', function (Blueprint $table) {
                $table->string('name')->default('Default Name')->after('img'); 
                $table->decimal('price', 8, 2)->default(0.00)->after('name'); 
            });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->dropColumn(['name', 'price']); 
        });
    }
}
