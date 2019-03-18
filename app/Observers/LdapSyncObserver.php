<?php

namespace App\Observers;

use App\Models\LdapSync;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class LdapSyncObserver
{
    public function creating(LdapSync $ldap_sync)
    {
        //
    }

    public function updating(LdapSync $ldap_sync)
    {
        //
    }
}