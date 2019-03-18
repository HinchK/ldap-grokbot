<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLdapSyncUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ldap_sync_users', function(Blueprint $table)
		{
			$table->increments('id')->index();
			$table->string('name');
			$table->string('ldap_connection_src');
			$table->string('ldap_base_dn_src');
			$table->string('ldap_filter_src');
			$table->integer('syncjob_reference_id')->nullable();
			$table->string('email')->nullable()->unique('users_email_unique');
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password')->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->string('department')->nullable();
			$table->string('departmentNumber')->nullable();
			$table->string('title')->nullable();
			$table->string('firstName')->nullable();
			$table->string('lastName')->nullable();
			$table->string('info')->nullable();
			$table->string('initials')->nullable();
			$table->string('country')->nullable();
			$table->string('streetAddress')->nullable();
			$table->string('postalCode')->nullable();
			$table->string('postOfficeBox')->nullable();
			$table->string('physicalDeliveryOfficeName')->nullable();
			$table->string('telephone')->nullable();
			$table->string('facsimile')->nullable();
			$table->string('locale')->nullable();
			$table->string('company')->nullable();
			$table->string('homeMdb')->nullable();
			$table->string('homeDrive')->nullable();
			$table->string('homeDirectory')->nullable();
			$table->string('emailNickname')->nullable();
			$table->string('userPrincipalName')->nullable();
			$table->string('scriptPath')->nullable();
			$table->integer('badPasswordCount')->nullable();
			$table->timestamp('badPasswordTime')->nullable();
			$table->string('passwordLastSet')->nullable();
			$table->string('lockoutTime')->nullable();
			$table->string('profilePath')->nullable();
			$table->string('legacyExchangeDn')->nullable();
			$table->timestamp('accountExpires')->nullable();
			$table->string('thumbnail')->nullable();
			$table->string('jpegPhoto')->nullable();
			$table->string('manager')->nullable();
			$table->integer('employee')->nullable();
			$table->string('employeeType')->nullable();
			$table->integer('employeeNumber')->nullable();
			$table->string('roomNumber')->nullable();
			$table->string('personalTitle')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ldap_sync_users');
	}

}
