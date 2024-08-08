<?php

namespace App\Http\Controllers;

use App\Models\Entries;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('cms/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        return view('cms.dashboard');
    }

    public function entries()
    {
        $entries = Entries::get();

        return view('cms.entries', compact('entries'));
    }

    public function draw()
    {
        return view('cms.draw');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function show(Entries $entries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function edit(Entries $entries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entries $entries)
    {
        $request->validate([
            "status" => "required"
        ]);

        Entries::where('id', $_POST['id'])->update(['status' => $_POST['status']]);

        if($_POST['status'] == "1")
        {
            $message = 'accepted';
        } else {
            $message = 'rejected';
        }

        return redirect('cms/entries')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entries  $entries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entries $entries)
    {
        //
    }
}
