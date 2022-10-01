<?php namespace Oyj\Supervisor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOyjSupervisor extends Migration
{
    public function up()
    {
        Schema::create('oyj_supervisor_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('supervisor_name');
            $table->string('supervisor_id');
            $table->string('supervisor_office')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('oyj_supervisor_');
    }
}
