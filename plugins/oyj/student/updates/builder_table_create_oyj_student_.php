<?php namespace Oyj\Student\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOyjStudent extends Migration
{
    public function up()
    {
        Schema::create('oyj_student_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('student_name');
            $table->string('student_id');
            $table->date('student_intake')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('oyj_student_');
    }
}
