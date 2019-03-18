<?php

namespace App\Policies;

use App\Models\User;
use App\Models\LdapSync;

class LdapSyncPolicy extends Policy
{
    public function update(User $user, LdapSync $ldap_sync)
    {
        // return $ldap_sync->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, LdapSync $ldap_sync)
    {
        return true;
    }
}
