<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('permission_id');
            // $table->unsignedInteger('role_id')->references('id')->on('roles')->onDelete('cascade');
            // $table->unsignedInteger('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            // $table->primary(['role_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}