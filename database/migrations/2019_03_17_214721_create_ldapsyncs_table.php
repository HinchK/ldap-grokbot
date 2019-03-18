<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLdapSyncsTable extends Migration 
{
	public function up()
	{
		Schema::create('ldap_syncs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->text('description')->nullable();
            $table->integer('subscriber_count')->unsigned()->default(0);
            $table->text('userPrincipalName')->nullable();
            $table->text('company')->nullable();
            $table->text('telephone')->nullable();
            $table->text('department')->nullable();
            $table->integer('departmentNumber')->nullable();
            $table->text('title')->nullable();
            $table->text('firstName')->nullable();
            $table->text('lastName')->nullable();
            $table->text('info')->nullable();
            $table->text('initials')->nullable();
            $table->text('country')->nullable();
            $table->text('streetAddress')->nullable();
            $table->text('postalCode')->nullable();
            $table->text('postOfficeBox')->nullable();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('ldap_syncs');
	}
}
