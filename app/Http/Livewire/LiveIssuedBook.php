<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\IssuedBook;
use App\Models\Member;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithPagination;
class LiveIssuedBook extends Component
{
    use WithPagination;
    public $bookID, $memberID, $issueDate, $expReturnDate;
    public $addMode=false;
    public $viewMode, $editMode, $editID, $msg;

    public function clearFields(){
        $this->bookID     ="";
        $this->memberID   ="";
        $this->issueDate   ="";
        $this->expReturnDate ="";
    }
    public function add(){
        $this->addMode=false;
    }
    public function view(){
        $this->addMode=true;
        $this->viewMode=true;
    }
//    public function edit($id){
//        $this->viewMode=false;
//        $this->editMode=true;
//        $this->addMode=true;
//        $data=IssuedBook::find($id);
//    }

    public function addBook(){
        $this->validate([
            'issueDate' => 'required',
            'expReturnDate' => 'required',
        ]);

        IssuedBook::create([
            'bookID'     => $this->bookID,
            'memberID'    => $this->memberID,
            'issueDate' => $this->issueDate,
            'expReturnDate'  => $this->expReturnDate,
        ]);
        $bID=$this->bookID;
        $quan=Book::where('id',$bID)->get('quantity');
        foreach($quan as $data){
          $info= $data->quantity;
        }
        if($info!=0) {
            $info = $info - 1;
        }
            Book::find($bID)->update([
                'quantity' => $info,
            ]);
        $this->clearFields();
        $this->addMode=true;
        $this->viewMode=true;
    }

    public function render()
    {
        $this->issueDate=now("Jamaica")->format('d/m/Y');
        $this->expReturnDate=now("Jamaica")->addDays(14)->format('d/m/Y');
        $bookIssued=IssuedBook::with('book','member')->paginate(5);
//        dd( $bookIssued);
        $books=Book::all();
        $members=Member::all();
        return view('livewire.live-issued-book',compact('books','members','bookIssued'));
    }
}
