<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Organization;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locations = Location::orderBy('id')->paginate(10);
        return view('manage.location.locations_list', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $organizations  = Organization::pluck('name', 'id');
        return view('manage.location.locations_create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:organizations,name',
            'organization' => 'required|numeric',
            'description' => 'required',
        ]);

        $location = Location::create([
            'name' => $request->input('name'),
            'organization_id' => $request->input('organization'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('locations.index')->with('success', "The Location <strong>$location->name</strong> has successfully been created.");
        
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
        $location = Location::findOrFail($id);

        return view('manage.location.locations_delete', compact('location'));
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
        $location = Location::findOrFail($id);
        $organizations = Organization::pluck('name', 'id');

        return view('manage.location.locations_edit', compact('location', 'organizations'));
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
        $location = Location::findOrFail($id);
        
        $this->validate($request, [
            'name' => 'required|unique:locations,name,'.$id,
            'organization' => 'required|numeric',
            'description' => 'required',
        ]);


        $location->name = $request->input('name');
        $location->organization_id = $request->input('organization');
        $location->description = $request->input('description');

        $location->save();

        return redirect()->route('locations.index')->with('success', "The <strong>Location</strong> has successfully been updated.");
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
         $location = Location::findOrFail($id);

        if (!$location){
            return redirect()
                ->route('locations.index')
                ->with('warning', 'The Locationo you requested for was not found.');
        }

        $location->delete();

        return redirect()->route('locations.index')->with('success', "The <strong>Location</strong> has successfully been archived.");
    }
}
