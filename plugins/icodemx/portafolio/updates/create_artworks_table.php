<?php namespace Icodemx\Portafolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArtworksTable extends Migration
{
    public function up()
    {
        Schema::create('icodemx_portafolio_artworks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_finish')->nullable();
            $table->boolean('published')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('icodemx_portafolio_artworks');
    }
}
