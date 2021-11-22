<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LiveSearch extends Component
{
    public $search, $searchBook, $memberSearch;
    public $searchBar=false, $searchB, $searchM;

    public function search(){
       if($this->search == "searchB"){
           $this->searchBar=true;
           $this->searchB = true;
       }else{
           $this->searchBar=true;
           $this->searchM = true;
       }
    }

//    public function searchMemberByName(){
//        $param = $this->searchMember;
////        dd($param);
////        $retVal = Http::asForm()->get('http://192.168.0.8:8081/api/member/search/'.$param);
//        $retVal = Http::asForm()->get('http://192.168.0.8:8081/api/member/search',
//            [
//                'value' => $param,
//            ]);
//        return $retVal;
//    }

    public function render()
    {
        return view('livewire.live-search');
    }


}
