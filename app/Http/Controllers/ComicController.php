<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    
    public function addComic(){
        return view('addComic');
    }

    public function allComics(){

        $comics = Comic::all();

        return view('allComics', compact('comics'));
    }
    
    public function sendComic(ComicRequest $request){

        // ESEMPIO DI RACCOLTA DATI DAGLI INPUT
            // $title = $request->input('title');
            // $author = $request->input('author');
            // $pages = $request->input('pages');
            // $publisher = $request->input('publisher');

            // $comic = compact('title','author','pages','publisher');

        // SALVATAGGIO DEI DATI IN UNA VARIABILE $COMIC CHE POI SALVO NEL DATABASE
            // $comic = new Comic();
            // $comic->title = $request->input('title');
            // $comic->author = $request->input('author');
            // $comic->pages = $request->input('pages');
            // $comic->publisher = $request->input('publisher');

            // SALVATAGGIO NEL DATABASE
            // $comic->save();


        // MASS ASSIGNMENT
        // CON LA FUNZIONE CREATE DELLA CLASSE COMIC, CREO L'ARRAY CHIAVE-VALORE E LO SALVO NEL DATABASE
            $comic = Comic::create(
                ['title' => $request->input('title'),
                'author' => $request->input('author'),
                'pages' => $request->input('pages'),
                'publisher' => $request->input('publisher'),
                'img'=> $request->file('img')->store('public/img')
                ]
            );

        return redirect(route('allComics'))->with('message', 'Il tuo fumetto è stato caricato! :)');
    }

    public function comicDetails(Comic $comic){
        return view('comicDetails', compact('comic'));
    }
}
