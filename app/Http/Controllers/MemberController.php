<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MemberController extends Controller
{
    public function member(){
        return view('liveMember');
    }

    //API

    public function viewMember() {

        $response=Http::get('http://127.0.0.1:8000/api/member');
        return $response->json();
    }
    public function searchMember($id) {
        $search=Http::get('http://127.0.0.1:8000/api/member');

    }
    public function viewMemberSearch() {
        return view('searchM');
    }
    public function searchMemberByName(Request $request){
        $param = $request->memberSearch;
//        dd($param);
//        $retVal = Http::asForm()->get('http://192.168.0.8:8081/api/member/search/'.$param);
        $retVal = Http::asForm()->get('http://192.168.100.20:8081/api/member/search',
            [
                'value' => $param,
            ]);
        if(empty($retVal)){
            $notFound=$retVal->status();
            return view('searchB',compact('notFound'));
        }else {
            $retVal = json_decode($retVal, true);
//        dd($retVal);
            return view('searchM', compact('retVal',));
        }
    }
    public function addMember() {

        $response=Http::post('http://127.0.0.1:8000/api/member',[
            'fName'=> 'NeikaHun',
            'lName'=> 'Holy',
            'gender'=>'Female',
            'phoneNum'=> '876-123-4567',
            'address'=> 'GodBless',
            'email' => 'shanzy@gmail.com'
        ]);
        return $response->json();
    }

    public function updateMember($id) {

        $response=Http::put('http://127.0.0.1:8000/api/member/'.$id,[
            'fName'=> 'Neika',
            'lName'=> 'Hun',
            'gender'=>'Female',
            'phoneNum'=> '876-123-4567',
            'address'=> 'GodBless',
            'email' => 'shan@gmail.com'
        ]);
        return $response->json();
    }

    public function deleteMember($id)
    {
        $response=Http::delete('http://127.0.0.1:8000/api/member'.$id);
        return $response->json();

    }


}
