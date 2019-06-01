<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $organizations = Organization::orderBy('id', 'desc')->paginate(5);
        return view('manage.organization.organizations_list', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.organization.organizations_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:organizations,name',
            'display_name' => 'required|unique:organizations,display_name',
            'description' => 'required',
        ]);

        $organization = Organization::create([
            'name' => $request->input('name'),
            'display_name' => $request->input('display_name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('organizations.index')->with('success', "The Organization <strong>$organization->name</strong> has successfully been created.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $organization = Organization::findOrFail($id);

        return view('manage.organization.organizations_delete', compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $organization = Organization::findOrFail($id);

        return view('manage.organization.organizations_edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $organization = Organization::findOrFail($id);

        if (!$organization)
        {
            return redirect()
                ->route('organizations.index')
                ->with('warning', 'The Organization you are looking for has not been found.');
        }

        $this->validate($request, [
            'name' => 'required|unique:organizations,name,'.$id,
            'display_name' => 'required|unique:organizations,display_name,'.$id,
            'description' => 'required',
        ]);

        $organization->name = $request->input('name');
        $organization->display_name = $request->input('display_name');
        $organization->description = $request->input('description');

        $organization->save();

        return redirect()->route('organizations.index')->with('success', "The <strong>Organization</strong> has successfully been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $organization = Organization::findOrFail($id);

        if (!$organization){
            return redirect()
                ->route('organizations.index')
                ->with('warning', 'The Organization you requested for was not found.');
        }

        $organization->delete();

        return redirect()->route('organizations.index')->with('success', "The <strong>Organization</strong> has successfully been archived.");
    }

}
