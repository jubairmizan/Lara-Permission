<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaraPermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lara_permission_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->comment('Roles Name of Assigned User');
            $table->text('description')->nullable()->comment('What kind of responsibility belongs to this roles');
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
        Schema::dropIfExists('lara_permission_roles');
    }
}
