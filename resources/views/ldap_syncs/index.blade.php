@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          LdapSync
          <a class="btn btn-success float-xs-right" href="{{ route('ldap_syncs.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($ldap_syncs->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Name</th> <th>Description</th> <th>Subscriber_count</th> <th>UserPrincipalName</th> <th>Company</th> <th>Telephone</th> <th>Department</th> <th>DepartmentNumber</th> <th>Title</th> <th>FirstName</th> <th>LastName</th> <th>Info</th> <th>Initials</th> <th>Country</th> <th>StreetAddress</th> <th>PostalCode</th> <th>PostOfficeBox</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($ldap_syncs as $ldap_sync)
              <tr>
                <td class="text-xs-center"><strong>{{$ldap_sync->id}}</strong></td>

                <td>{{$ldap_sync->name}}</td> <td>{{$ldap_sync->description}}</td> <td>{{$ldap_sync->subscriber_count}}</td> <td>{{$ldap_sync->userPrincipalName}}</td> <td>{{$ldap_sync->company}}</td> <td>{{$ldap_sync->telephone}}</td> <td>{{$ldap_sync->department}}</td> <td>{{$ldap_sync->departmentNumber}}</td> <td>{{$ldap_sync->title}}</td> <td>{{$ldap_sync->firstName}}</td> <td>{{$ldap_sync->lastName}}</td> <td>{{$ldap_sync->info}}</td> <td>{{$ldap_sync->initials}}</td> <td>{{$ldap_sync->country}}</td> <td>{{$ldap_sync->streetAddress}}</td> <td>{{$ldap_sync->postalCode}}</td> <td>{{$ldap_sync->postOfficeBox}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('ldap_syncs.show', $ldap_sync->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('ldap_syncs.edit', $ldap_sync->id) }}">
                    E
                  </a>

                  <form action="{{ route('ldap_syncs.destroy', $ldap_sync->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $ldap_syncs->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
