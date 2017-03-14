<?php
/**
 * Created by PhpStorm.
 * User: jonathan.green
 * Date: 3/6/2017
 * Time: 6:27 PM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatsRequest;
use App\Stats;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller

{
    public function index()
    {
        $url = '/stats';
        $title ='Stats';
        $stats = stats::all();
        return view ('pages.stats', compact('title', 'url', 'stats'));
    }

    public function create()
    {


    }

    public function store()
    {

    }

    public function show($ID)
    {
        $stats = Stats::findOrFail($ID);
        $url = '/stats/' . $ID;
        $title = $stats -> OrderID . '-' . $stats -> CampaignName;
        $intID = $ID + 1;

        return view('pages.show', compact('title', 'url', 'stats', 'intID', 'Geo'));
    }

    public function edit($ID)
    {
        $stats = Stats::findOrFail($ID);
        $url = '/stats/' . $ID;
        $title = $stats -> OrderID . '-' . $stats -> CampaignName;
        $intID = $ID + 1;
        return view('pages.edit', compact('title', 'url', 'stats', 'intID', 'Geo'));
    }

    public function update($ID, StatsRequest $request)
    {
        $geo = $request -> Geo;
        DB::table('Stats')
                            ->where('id', $ID)
                            ->update(['Geo' => $geo]);

        $next = $ID+1;
        return redirect('stats/'.$next.'/edit');
    }

    public function destroy()
    {

    }


}