<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Location;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::orderBy('id')->paginate(10);
        
        return view('manage.item.items_list', compact('items'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locations  = Location::pluck('name', 'id');
        return view('manage.item.items_create', compact('locations'));
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
            'name' => 'required|unique:items,name',
            'location' => 'required|numeric',
        ]);

        $item = Item::create([
            'name' => $request->input('name'),
            'location_id' => $request->input('location'),
        ]);

        return redirect()->route('items.index')->with('success', "The item <strong>$item->name</strong> has successfully been created.");

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
        $item = Item::findOrFail($id);

        return view('manage.item.items_delete', compact('item'));
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
        $item = Item::findOrFail($id);
        $locations  = Location::pluck('name', 'id');
        return view('manage.item.items_edit', compact('item', 'locations'));
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
        $item = Item::findOrFail($id);

        if (!$item)
        {
            return redirect()
                ->route('items.index')
                ->with('warning', 'The item you are looking for has not been found.');
        }

        $this->validate($request, [
            'name' => 'required|unique:items,name,'.$id,
            'location' => 'required',
        ]);

        $item->name = $request->input('name');
        $item->location_id = $request->input('location');

        $item->save();

        return redirect()->route('items.index')->with('success', "The <strong>Item</strong> has successfully been updated.");
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
        $item = Item::findOrFail($id);

        if (!$item){
            return redirect()
                ->route('items.index')
                ->with('warning', 'The item you requested for was not found.');
        }

        $item->delete();

        return redirect()->route('items.index')->with('success', "The <strong>Item</strong> has successfully been archived.");
    }
    
}
