@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>LdapSync / Show #{{ $ldap_sync->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('ldap_syncs.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('ldap_syncs.edit', $ldap_sync->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Name</label>
<p>
	{{ $ldap_sync->name }}
</p> <label>Description</label>
<p>
	{{ $ldap_sync->description }}
</p> <label>Subscriber_count</label>
<p>
	{{ $ldap_sync->subscriber_count }}
</p> <label>UserPrincipalName</label>
<p>
	{{ $ldap_sync->userPrincipalName }}
</p> <label>Company</label>
<p>
	{{ $ldap_sync->company }}
</p> <label>Telephone</label>
<p>
	{{ $ldap_sync->telephone }}
</p> <label>Department</label>
<p>
	{{ $ldap_sync->department }}
</p> <label>DepartmentNumber</label>
<p>
	{{ $ldap_sync->departmentNumber }}
</p> <label>Title</label>
<p>
	{{ $ldap_sync->title }}
</p> <label>FirstName</label>
<p>
	{{ $ldap_sync->firstName }}
</p> <label>LastName</label>
<p>
	{{ $ldap_sync->lastName }}
</p> <label>Info</label>
<p>
	{{ $ldap_sync->info }}
</p> <label>Initials</label>
<p>
	{{ $ldap_sync->initials }}
</p> <label>Country</label>
<p>
	{{ $ldap_sync->country }}
</p> <label>StreetAddress</label>
<p>
	{{ $ldap_sync->streetAddress }}
</p> <label>PostalCode</label>
<p>
	{{ $ldap_sync->postalCode }}
</p> <label>PostOfficeBox</label>
<p>
	{{ $ldap_sync->postOfficeBox }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
