<?php

namespace App\Http\Controllers;

use App\Models\LdapSync;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LdapSyncRequest;

class LdapSyncsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$ldap_syncs = LdapSync::paginate();
		return view('ldap_syncs.index', compact('ldap_syncs'));
	}

    public function show(LdapSync $ldap_sync)
    {
        return view('ldap_syncs.show', compact('ldap_sync'));
    }

	public function create(LdapSync $ldap_sync)
	{
		return view('ldap_syncs.create_and_edit', compact('ldap_sync'));
	}

	public function store(LdapSyncRequest $request)
	{
		$ldap_sync = LdapSync::create($request->all());
		return redirect()->route('ldap_syncs.show', $ldap_sync->id)->with('message', 'Created successfully.');
	}

	public function edit(LdapSync $ldap_sync)
	{
        $this->authorize('update', $ldap_sync);
		return view('ldap_syncs.create_and_edit', compact('ldap_sync'));
	}

	public function update(LdapSyncRequest $request, LdapSync $ldap_sync)
	{
		$this->authorize('update', $ldap_sync);
		$ldap_sync->update($request->all());

		return redirect()->route('ldap_syncs.show', $ldap_sync->id)->with('message', 'Updated successfully.');
	}

	public function destroy(LdapSync $ldap_sync)
	{
		$this->authorize('destroy', $ldap_sync);
		$ldap_sync->delete();

		return redirect()->route('ldap_syncs.index')->with('message', 'Deleted successfully.');
	}
}