<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTaxonomyTitleToName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('taxonomies', function($table)
        {
            $table->renameColumn('title', 'name');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('taxonomies', function($table)
        {
            $table->renameColumn('name', 'title');
        });
	}

}
