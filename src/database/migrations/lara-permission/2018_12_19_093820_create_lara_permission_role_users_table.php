<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaraPermissionRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lp_role_users', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('lp_role_id')->default('0')->comment('Foreign key relation with lp_roles Table');
            $table->foreign('lp_role_id')->references('id')->on('lp_roles');

            $table->unsignedInteger('user_id')->nullable()->comment('Foreign key relation with users Table');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unique(['lp_role_id', 'user_id'])->comment('Unique the user with lp_roles');
            $table->boolean('status')->default('1')->comment('1 means Active and 0 means Inactive');
            $table->softDeletes();
            $table->unsignedInteger('created_by',false)->default(0);
            $table->unsignedInteger('updated_by',false)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lp_role_users');
    }
}
