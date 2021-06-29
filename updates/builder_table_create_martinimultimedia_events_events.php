<?php namespace MartiniMultimedia\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinimultimediaEventsEvents extends Migration
{
    public function up()
    {
        Schema::create('martinimultimedia_events_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('description')->nullable();
            $table->integer('venue_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martinimultimedia_events_events');
    }
}
