<?php

namespace App\Http\Controllers;

use App\Fondovi;
use Illuminate\Http\Request;
use DB;

class FondoviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fondovi=Fondovi::orderBy('id', 'ASC')->paginate(20);
    return view('fondovi.index', compact('fondovi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fondovi.create');
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
      "broj_fonda" => 'required',
      "naziv_fonda" => 'required',
      "godina_nastanka" => "required",
      "godina_zavrsetka" => "required",
      "opis_fonda" => "required"
  ]);

    $fondovi = new Fondovi;
    $fondovi->broj_fonda = $request->broj_fonda;
    $fondovi->naziv_fonda = $request->naziv_fonda;
    $fondovi->godina_nastanka = $request->godina_nastanka;
    $fondovi->godina_zavrsetka = $request->godina_zavrsetka;
    $fondovi->opis_fonda = $request->opis_fonda;

    $fondovi->save();
    return redirect()->route('fondovi.index');


  }


    /**
     * Display the specified resource.
     *
     * @param  \App\Fondovi  $fondovi
     * @return \Illuminate\Http\Response
     */
    public function show($opis_fonda)
    {
      $fondovi = Fondovi::where('opis_fonda', $opis_fonda)->get();
      return view('fondovi.show', compact('fondovi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fondovi  $fondovi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $fondovi = Fondovi::find($id);
      return view('fondovi.edit', compact('fondovi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fondovi  $fondovi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fondovi $fondovi)
    {
      $this->validate($request, [
      "broj_fonda" => 'required',
      "naziv_fonda" => 'required',
      "godina_nastanka" => "required",
      "godina_zavrsetka" => "required",
      "opis_fonda" => "required"
  ]);
  $fondovi->broj_fonda = $request->broj_fonda;
  $fondovi->naziv_fonda = $request->naziv_fonda;
  $fondovi->godina_nastanka = $request->godina_nastanka;
  $fondovi->godina_zavrsetka = $request->godina_zavrsetka;
  $fondovi->opis_fonda = $request->opis_fonda;

  $fondovi->save();
  return redirect()->route('fondovi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fondovi  $fondovi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fondovi $fondovi)
    {
        //
    }

    public function search(Request $request){
      $search = $request->get('search');
      $fondovi = DB::table('fondovis')->where('naziv_fonda', 'like', '%'.$search.'%')->paginate(5);
      return view('fondovi.index', compact('fondovi'));
    }
}
