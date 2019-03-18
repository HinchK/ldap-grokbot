@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          LdapSync /
          @if($ldap_sync->id)
            Edit #{{ $ldap_sync->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($ldap_sync->id)
          <form action="{{ route('ldap_syncs.update', $ldap_sync->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('ldap_syncs.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $ldap_sync->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="description-field">Description</label>
                	<textarea name="description" id="description-field" class="form-control" rows="3">{{ old('description', $ldap_sync->description ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="subscriber_count-field">Subscriber_count</label>
                    <input class="form-control" type="text" name="subscriber_count" id="subscriber_count-field" value="{{ old('subscriber_count', $ldap_sync->subscriber_count ) }}" />
                </div> 
                <div class="form-group">
                	<label for="userPrincipalName-field">UserPrincipalName</label>
                	<textarea name="userPrincipalName" id="userPrincipalName-field" class="form-control" rows="3">{{ old('userPrincipalName', $ldap_sync->userPrincipalName ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="company-field">Company</label>
                	<textarea name="company" id="company-field" class="form-control" rows="3">{{ old('company', $ldap_sync->company ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="telephone-field">Telephone</label>
                	<textarea name="telephone" id="telephone-field" class="form-control" rows="3">{{ old('telephone', $ldap_sync->telephone ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="department-field">Department</label>
                	<textarea name="department" id="department-field" class="form-control" rows="3">{{ old('department', $ldap_sync->department ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="departmentNumber-field">DepartmentNumber</label>
                    <input class="form-control" type="text" name="departmentNumber" id="departmentNumber-field" value="{{ old('departmentNumber', $ldap_sync->departmentNumber ) }}" />
                </div> 
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<textarea name="title" id="title-field" class="form-control" rows="3">{{ old('title', $ldap_sync->title ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="firstName-field">FirstName</label>
                	<textarea name="firstName" id="firstName-field" class="form-control" rows="3">{{ old('firstName', $ldap_sync->firstName ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="lastName-field">LastName</label>
                	<textarea name="lastName" id="lastName-field" class="form-control" rows="3">{{ old('lastName', $ldap_sync->lastName ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="info-field">Info</label>
                	<textarea name="info" id="info-field" class="form-control" rows="3">{{ old('info', $ldap_sync->info ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="initials-field">Initials</label>
                	<textarea name="initials" id="initials-field" class="form-control" rows="3">{{ old('initials', $ldap_sync->initials ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="country-field">Country</label>
                	<textarea name="country" id="country-field" class="form-control" rows="3">{{ old('country', $ldap_sync->country ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="streetAddress-field">StreetAddress</label>
                	<textarea name="streetAddress" id="streetAddress-field" class="form-control" rows="3">{{ old('streetAddress', $ldap_sync->streetAddress ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="postalCode-field">PostalCode</label>
                	<textarea name="postalCode" id="postalCode-field" class="form-control" rows="3">{{ old('postalCode', $ldap_sync->postalCode ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="postOfficeBox-field">PostOfficeBox</label>
                	<textarea name="postOfficeBox" id="postOfficeBox-field" class="form-control" rows="3">{{ old('postOfficeBox', $ldap_sync->postOfficeBox ) }}</textarea>
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('ldap_syncs.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
