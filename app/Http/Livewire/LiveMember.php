<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class LiveMember extends Component
{
    use WithPagination;
    public $fName, $lName, $gender, $address, $phoneNum, $email;
    public $addMode=false;
    public $viewMode, $editMode, $editID;

    public function clearFields(){
        $this->fName    ="";
        $this->lName    ="";
        $this->gender   ="";
        $this->phoneNum ="";
        $this->address  ="";
        $this->email    ="";
    }
    public function add(){
        $this->addMode=false;
    }
    public function view(){
        $this->addMode=true;
        $this->viewMode=true;
    }
    public function edit($id){
        $this->viewMode=false;
        $this->editMode=true;
        $this->addMode=true;
        $data=Member::find($id);
        //data now stored in public variable from out of database
        $this->fName= $data->fName;
        $this->lName= $data->lName;
        $this->address = $data->address;
        $this->phoneNum = $data->phoneNum;
        $this->gender= $data->gender;
        $this->email= $data->email;
        $this->editID= $id;
    }

    public function addMember(){
        $this->validate([
            'fName' => 'required',
            'lName' => 'required',
            'gender' => 'required',
            'phoneNum'=> 'required',
            'address'=>'required',
            'email'=>'required|email'
        ]);

        Member::create([
            'fName'     => $this->fName,
            'lName'     => $this->lName,
            'gender'    => $this->gender,
            'phoneNum'  => $this->phoneNum,
            'address'   => $this->address,
            'email'     => $this->email,
        ]);

        $this->clearFields();
        $this->addMode=true;
        $this->viewMode=true;
    }

public function editMember(){
    $id= $this->editID;
    Member::find($id)->update([
        'fName'     => $this->fName,
        'lName'     => $this->lName,
        'gender'    => $this->gender,
        'phoneNum'  => $this->phoneNum,
        'address'   => $this->address,
        'email'     => $this->email,
    ]);
    $this->clearFields();
    $this->editMode=false;
    $this->viewMode=true;
}
    public function render()
    {
        $members=Member::paginate(5);
        return view('livewire.live-member',compact('members'));
    }
}
