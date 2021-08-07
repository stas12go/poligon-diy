<?php

namespace App\Http\Controllers\Olympics;

use App\Models\Athlete;
use App\Models\Country;
use App\Models\Sports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AthleteController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athletesList = Athlete::paginate(20);

        return view('olympics.athletes.index', compact('athletesList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $athlete = Athlete::findOrFail($id);
        $sport = DB::table('sports')
            ->join('athletes', 'sports.id', '=', 'athletes.sport_id')
            ->where('athletes.id', '=', $id)
            ->first(['sports.id', 'sports.name']);
        $country = DB::table('countries')
            ->join('athletes', 'countries.id', '=', 'athletes.country_id')
            ->where('athletes.id', '=', $id)
            ->first(['countries.id', 'countries.name']);

        return view('olympics.athletes.show', compact('id', 'athlete', 'sport', 'country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $athlete = Athlete::findOrFail($id);
        $sportsList = DB::table('sports')->get();
        $countriesList = DB::table('countries')->get();

        return view('olympics.athletes.edit', compact('id', 'athlete', 'sportsList', 'countriesList'));
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
        dd($request->all(), $id);
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
    }
}
