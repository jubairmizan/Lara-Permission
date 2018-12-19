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
        Schema::create('lara_permission_role_users', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('lara_permission_role_id')->default('0')->comment('Foreign key relation with lara_permission_roles Table');
            $table->foreign('lara_permission_role_id')->references('id')->on('lara_permission_roles');

            $table->unsignedInteger('user_id')->nullable()->comment('Foreign key relation with users Table');
            $table->foreign('user_id')->references('id')->on('users');

            // $table->unique(['lara_permission_role_id', 'user_id'])->comment('Unique the user with lara_permission_roles');
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
        Schema::dropIfExists('lara_permission_role_users');
    }
}
