<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaraPermissionRolePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lp_role_permissions', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('lp_role_id')->default('0')->comment('Foreign key relation with lp_roles Table');
            $table->foreign('lp_role_id')->references('id')->on('lp_roles');

            $table->string('route_name',255)->nullable()->comment('Here can be route or url');
            // $table->unique(['lp_role_id', 'route_name'])->comment('Unique the Route/url with lp_roles');
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
        Schema::dropIfExists('lp_role_permissions');
    }
}
