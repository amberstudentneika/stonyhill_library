<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function book(){
        return view('liveBook');
    }

    //API

    public function viewBook() {

        $response=Http::get('http://127.0.0.1:8000/api/book');
        return $response->json();
    }
    public function searchBook($id) {
        $search=Http::get('http://127.0.0.1:8000/api/book');

    }
    public function viewBookSearch() {
        return view('searchB');
    }
    public function searchBookByName(Request $request){
        $param = $request->bookSearch;
//        dd($param);
//        $retVal = Http::asForm()->get('http://192.168.0.8:8081/api/member/search/'.$param);
        $value = Http::asForm()->get('http://192.168.100.20:8081/api/book/search',
            [
                'value' => $param,
            ]);
        if(empty($value)){
            $notFound=$value->status();
            return view('searchB',compact('notFound'));
        }else{
        $value=json_decode($value,true);
//        dd($value);
        return view('searchB',compact('value'));
        }
    }
    public function addBook() {

        $response=Http::post('http://127.0.0.1:8000/api/book',[
            'title' => 'Goodness',
            'author'=> 'Jehovah',
            'isbn' => '1234577',
            'quantity' => 7,
            'publisher' => 'Magnificent',
            'pubDate' => '2011-07-24',
            'condition' =>'new'
        ]);
        return $response->json();
    }

    public function updateBook($id) {

        $response=Http::put('http://127.0.0.1:8000/api/book/'.$id,[
            'title' => 'just updated',
            'author'=> 'updated',
            'isbn' => '1234577',
            'quantity' => 7,
            'publisher' => 'Magnificent',
            'pubDate' => '2011-07-24',
            'condition' =>'new'
        ]);
        return $response->json();
    }

    public function deleteBook($id)
    {
        $response=Http::delete('http://127.0.0.1:8000/api/book'.$id);
        return $response->json();

    }


}
