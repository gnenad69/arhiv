<?php
// KORISCEN JE HOME CONTROLLER ZA PRIKAZ FOTOGRAFIJA
//OBAVEZNO POGLEDATI
//dodat je use App\Lista;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lista;
use App\Podaci;
use Auth;
use DB;

class ListaController extends Controller
{
    // METODE ZA GALERIJU

    public function listaCreate(){

      return view('liste.listaCreate');
    }

    public function listaStore(Request $request){

      $this->validate($request, [
        'title'=>'required',
        'cover'=>'required',
        'description'=>'required'
      ]);

      $lista = new Lista;
      $lista->title = $request->title;
      $lista->description = $request->description;
      $lista->user_id = Auth::user()->id;

      $cover = $request->file('cover');
      $cover_ext = $cover->getClientOriginalExtension();
      $cover_name = rand(123456, 999999).'.'.$cover_ext;
      $cover_path = public_path('liste/');
      $cover->move($cover_path, $cover_name);

      $lista->cover = $cover_name;
      $lista->save();

      return redirect()->route('homee');


    }

    public function listaShow($id){
      $lista = Lista::find($id);
      $podaci = Podaci::where('lista_id', $lista->id)->get();
      return view('liste.listaShow', compact('lista', 'podaci'));
    }

    public function listaEdit($id){
      $lista = Lista::find($id);
      return view('liste.listaEdit', compact('lista'));
    }

    public function listaUpdate(Request $request, $id){
      $lista = Lista::find($id);

      $lista->title = $request->title;
      $lista->description = $request->description;

      $lista_cover = $lista->cover;

      if($request->hasFile('cover')){
        unlink(public_path('liste/'.$lista->cover)); //ukloniti fotku iz foldera
        $cover = $request->file('cover'); // postaviti novu umesto stare
        $cover_ext = $cover->getClientOriginalExtension();
        $cover_name = rand(123456, 999999).'.'.$cover_ext; //imenu se prvo dodeljuje random broj
        $cover_path = public_path('liste/');
        $cover->move($cover_path, $cover_name);
        $lista->cover = $cover_name;
      }else{
        $lista->cover = $request->old_cover; //ako se ne menja fotka, snima se stara
      }
      $lista->save();
      return redirect()->route('listaShow', $id);
    }

    public function listaDelete($id){
      $podaci = Podaci::where('lista_id', $id)->get();
      foreach($podaci as $podatak){ //kad se brise galerija moraju i sve fotke koje joj pripadaju
        $podatak_name = $podatak->podatak;
        unlink(public_path('liste/podaci/'.$podatak_name));
      }

      DB::table('photos')->where('lista_id', $id)->delete();

      $lista = Lista::find($id); // id je od galerije
      $lista_cover = $lista->cover; //uklanjamo cover
      unlink(public_path('liste/').$lista_cover); //sklanjamo fizicki fotografiju iz foldera
      $lista->delete(); //brisemo sve iz baze
      return redirect()->route('homee');

    }

    //METODE ZA FOTOGRAFIJE

    public function podaciCreate($id){
      $lista = Lista::find($id);
      return view('liste/podaci/podaciCreate', compact('lista'));
    }

    public function podaciStore(Request $request){
      $this->validate($request, [
        'title'=>'required',
        'rok_cuvanja'=>'required',
        'primedba'=>'required',

      ]);
      $podaci = new Podaci;
      $lista_id = $request->lista_id;

      $podaci->title = $request->title;
      $podaci->rok_cuvanja = $request->rok_cuvanja;
      $podaci->primedba = $request->primedba;

      $podaci->lista_id = $lista_id;

      //$podatak = $request->file('podatak');
      //$podatak_ext = $photo->getClientOriginalExtension();
      //$podatak_name = rand(123456, 999999) . '.' . $photo_ext;
      //$podatak_path = public_path('galleries/photos/');
      //$podatak->move($photo_path, $photo_name);

      //$podaci->podatak = $podatak_name;

      $podaci->save();
      return redirect()->route('listaShow', $lista_id);

    }

    public function podaciShow($id){
      $podatak = Podaci::find($id);
      return view('podaci.podaciShow', compact('podatak'));
    }

    public function podaciEdit($id){
      $podatak = Podaci::find($id);
      return view('liste.podaci.podaciEdit', compact('podatak'));
    }

    public function podaciUpdate(Request $request, $id){
      $podaci = Podaci::find($id);

      $podaci->title = $request->title;
      $podaci->description = $request->description;
      $podaci->broj = $request->broj;
      $podaci->primedba = $request->primedba;
      $podaci->lista_id = $lista_id;

      //$photo_name = $photo->photo;

      //if($request->hasFile('photo')){
        //unlink(public_path('galleries/photos/'. $photo_name));
        //$new_photo = $request->file('photo');
        //$new_photo_ext = $new_photo->getClientOriginalExtension();
      //  $new_photo_name = rand(123456, 999999) . '.' . $new_photo_ext;
      //  $new_photo_path = public_path('galleries/photos/');
      //  $new_photo->move($new_photo_path, $new_photo_name);
      //  $photo->photo = $new_photo_name;
    //  }else{
      //  $photo->photo = $request->old_photo;
    //  }

      $photo->save();
      return redirect()->route('podaciShow', $id);

    }

    public function podaciDelete($id){
      $podatak = Podaci::find($id);
      $podatak_name = $podatak->podatak;
      $lista_id = $podatak->lista_id;
      //unlink(public_path('galleries/photos/'.$photo_name));

      $podatak->delete();
      return redirect()->route('listaShow', $lista_id);
    }

    public function search(Request $request){
          $search = $request->get('search');

          $podaci = DB::table('podaci')->where('title', 'like', '%'.$search.'%')->paginate(5);
          return view('liste.listaShow', compact('podaci'));
        }


}
