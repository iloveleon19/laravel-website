<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgIdInCarousels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->unsignedinteger('img_id')->nullable()->after('text');
            // $table->foreign('img_id')->references('id')->on('img')->onDelete('cascade');
            $table->foreign('img_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->dropForeign('carousels_img_id_foreign');
            $table->dropColumn('img_id');
        });
    }
}
