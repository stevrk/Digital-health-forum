<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColumnToAbstractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abstracts', function (Blueprint $table) {
            // Add the new ENUM column with default value
            $table->enum('status', ['unread', 'read'])->default('unread');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abstracts', function (Blueprint $table) {
            // Drop the ENUM column
            $table->dropColumn('status');
        });
    }
}
