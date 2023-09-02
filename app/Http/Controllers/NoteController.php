<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(){
        return view('front.notes.index');
    }

    public function createPage(){
        return view('front.notes.create');
    }

    public function addNote(Request $request){
        //request
        //dd die and dump dd('elif')
//        dd($request->all());
//        dd($request['not_baslik']);
//        Auth::user();
//        dd(Auth::user()->id);
//        dd(Auth::id());


//        validation  doğrulamaa

        $request->validate(
            [
                // 'doğrulamakİstediğimKey' => 'Kurallarım'
                // 'title' => 'Zorunlu ,Minimum 3 karakter'
             'title'=>'required | min:3 | max:20',
             'content' =>'required'
            ],
            [
                //custom mesaj kısmı
                //keyadı.kuralAdı=>'mesaj'
                'title.required'=>'Başlık yazmayı unutma',
                'title.min'=>'Lütfen daha uzun yaz'
            ]
        );

        //Laravel otomatik olarak errors gönderir
//        Eğer validate kısmında hata varsa
        //return redirect()->back()->with('errors','message');




//validasyondan geçtiyse burası çalışacak
        $note=new Note();
        $note->user_id=Auth::user()->id ;
        $note->title= $request->title;
        $note->content=$request->content;
        $note->save();

//         return redirect()->back();
//           return redirect()->route('notes_index')->withErrors();
// Başarılı durum
        return redirect()->route('notes_index')->with('success','Başarılyla Kaydedildi...');


    }
}
