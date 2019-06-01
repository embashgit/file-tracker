<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Item;
use App\Models\Location;
use App\Models\User;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories = History::orderBy('id')->paginate(10);
        return view('manage.history.histories_list', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $items = Item::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        $locations = Location::pluck('name', 'id');
        return view('manage.history.histories_create', compact('items', 'users', 'locations'));

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
            'status' => 'required',
            'from_location' => 'required|numeric',
            'to_location' => 'required|numeric',
            'item' => 'required|numeric',
            'dispatcher' => 'required|numeric',
            'reciever' => 'required|numeric',
        ]);

        $history = History::create([
            'status' => $request->input('status'),
            'item_id' => $request->input('item'),
            'to' => $request->input('to_location'),
            'from' => $request->input('from_location'),
            'dispatcher_id' => $request->input('dispatcher'),
            'reciever_id' => $request->input('reciever'),
        ]);

        return redirect()->route('histories.index')->with('success', "The History has successfully been created.");
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
        $history = History::findOrFail($id);

        return view('manage.history.histories_delete', compact('history'));
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
        $history = History::findOrFail($id);
        $items = Item::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        $locations = Location::pluck('name', 'id');

        return view('manage.history.histories_edit', compact('history', 'items', 'users', 'locations'));
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
        $history = History::findOrFail($id);

        $this->validate($request, [
            'status' => 'required',
            'from_location' => 'required|numeric',
            'to_location' => 'required|numeric',
            'item' => 'required|numeric',
            'dispatcher' => 'required|numeric',
            'reciever' => 'required|numeric',
        ]);

        $history->item_id = $request->input('item');
        $history->from = $request->input('from_location');
        $history->to = $request->input('to_location');
        $history->dispatcher_id = $request->input('dispatcher');
        $history->reciever_id = $request->input('reciever');
        $history->status = $request->input('status');

        $history->save();

        return redirect()->route('histories.index')->with('success', "The <strong>History</strong> has successfully been updated.");
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
        $history = History::findOrFail($id);

        if (!$history){
            return redirect()
                ->route('histories.index')
                ->with('warning', 'The History you requested for was not found.');
        }

        $history->delete();

        return redirect()->route('histories.index')->with('success', "The <strong>History</strong> has successfully been archived.");
    }
}
