<?php

namespace App\Models;

class LdapSync extends Model
{
    protected $fillable = ['name', 'description', 'subscriber_count', 'userPrincipalName', 'company', 'telephone', 'department', 'departmentNumber', 'title', 'firstName', 'lastName', 'info', 'initials', 'country', 'streetAddress', 'postalCode', 'postOfficeBox'];
}
