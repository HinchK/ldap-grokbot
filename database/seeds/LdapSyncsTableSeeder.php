<?php

use Illuminate\Database\Seeder;
use App\Models\LdapSync;

class LdapSyncsTableSeeder extends Seeder
{
    public function run()
    {
        $ldap_syncs = factory(LdapSync::class)->times(50)->make()->each(function ($ldap_sync, $index) {
            if ($index == 0) {
                // $ldap_sync->field = 'value';
            }
        });

        LdapSync::insert($ldap_syncs->toArray());
    }

}

