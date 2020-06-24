<?php namespace Icodemx\Portafolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateArtworksTableSort extends Migration
{
    public function up()
    {
        Schema::table('icodemx_portafolio_artworks', function (Blueprint $table) {
            $table->integer('sort_order')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
        });
    }

    public function down()
    {

    }
}
