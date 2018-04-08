<?php namespace Sayeem\Newspaper\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSayeemNewspaperNewspaper extends Migration
{
    public function up()
    {
        Schema::create('sayeem_newspaper_newspaper', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('category');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sayeem_newspaper_newspaper');
    }
}
