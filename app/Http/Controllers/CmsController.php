<?php

namespace App\Http\Controllers;

use App\Models\Entries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $entries = DB::table('entries')
                        ->select(DB::raw('count(id) as total, date(created_at) as date'))
                        ->where('status', '1')
                        ->groupBy('date')
                        ->get();

        $data = [
            'page'    => 'Dashboard',
            'entries' => $entries
        ];

        return view('cms.dashboard', $data);
    }

    public function entries()
    {
        $data = [
            'page'    => 'Entries',
            'entries' => Entries::get()
        ];

        return view('cms.entries', $data);
    }

    public function draw()
    {
        $data = [
            'page' => 'Draw Tool'
        ];

        return view('cms.draw', $data);
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

        $id = $request->input('id');

        if($request->input('status') == 1)
        {
            Entries::acceptEntry($id);
            $message = 'accepted';
        } else {
            Entries::where('id', $id)->update(['status' => '2']);
            $message = 'rejected';
        }

        return redirect('cms/entries')->with('message', $message);
    }

    public function winners(Request $request, Entries $entries)
    {
        $data = [
            'page'    => 'Draw Tool',
            'winners' => Entries::getWinners($request)
        ];

        return view('cms.winners', $data);
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
