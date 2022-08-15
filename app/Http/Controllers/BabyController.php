<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Baby;
use Carbon\Carbon;

class BabyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show babies
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check()){
			return redirect(route('login'))
				->with('error', 'You must be logged in!');
		}

    	return view('baby.create');
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
            'name' => 'required|max:255',
            'dob' => 'required|date',
            'milk' => 'required|numeric|max:3'
        ]);

        $baby = new Baby;
        $baby->user_id = Auth::user()->id;
        $baby->family_id = Auth::user()->family()->first()->id;
        $baby->name = $request->name;
        $baby->dob = Carbon::parse($request->dob);
        $baby->milk = $request->milk;
        $baby->save();

        return redirect(route('dashboard'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baby = Auth::user()->babies->find($id);

        if(!$baby) return redirect(route('babies.create'));

        return view('baby.show')
            ->with('baby', $baby);

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
