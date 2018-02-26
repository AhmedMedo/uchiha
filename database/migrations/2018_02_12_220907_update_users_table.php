<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            //user location
            $table->string('location')->nullable();
            //user country
            $table->string('country')->nullable();
            //user phone
            $table->string('phone')->nullable();
            //user active to check if user is active to the system or not
            // 0 => not active  , 1=> active
            $table->tinyInteger('active')->default(0);
            // user type the type here will defferintiate between
            // 1 => users as 'clients'
            // 2 => users as 'service provider' or 'ads owner'
            // using the type_id in table users_type
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('users_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
