<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $galleries = Gallery::orderBy('id', 'DESC')->get();
      return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
          "image_url" => 'required',
      ]);

      foreach ($request->image_url as $image_url) {
          // dobijanje imena sa extenzijom
          $fileNameWithExt = $image_url->getClientOriginalName();

          // formiranje imena
          $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

          // dobijanje extenzije
          $fileExt = $image_url->getClientOriginalExtension();

          // dobijanje naziva sa smestaj u bazu
          $fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;

          $gallery = new Gallery();
          $gallery->user_id = Auth::id();
          $gallery->image_url = $fileNameToStore;
          $save = $gallery->save();

          if ($save) {
              $image_url->storeAs('public/galleries', $fileNameToStore);
          }
      }

      Session::flash('message', 'Фотографије успешно сачуване');
      return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
      // obrisi fotku
      Storage::delete('/public/galleries/' . $gallery->image_url);

      // obrisi podatke iz tabele
      $gallery->delete();

      Session::flash('delete-message', 'Фотографија обрисана успешно');
      return redirect()->route('galleries.index');
    }
}
