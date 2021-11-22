<?php

namespace App\Http\Livewire;
use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;
class LiveBook extends Component
{
    use WithPagination;
    public $title, $author, $quantity, $isbn, $publisher, $condition, $pubDate;
    public $addMode=false;
    public $viewMode, $editMode, $editID;

    public function clearFields(){
        $this->title      ="";
        $this->author     ="";
        $this->quantity   ="";
        $this->isbn       ="";
        $this->publisher  ="";
        $this->condition  ="";
        $this->pubDate    ="";
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
        $data=Book::find($id);
        //data now stored in public variable from out of database
        $this->title= $data->title;
        $this->author= $data->author;
        $this->quantity = $data->quantity;
        $this->isbn = $data->isbn;
        $this->publisher= $data->publisher;
        $this->condition= $data->condition;
        $this->pubDate= $data->pubDate;
        $this->editID= $id;
    }

    public function addBook(){
        $this->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'isbn'=> 'required|unique:books|min:10|max:13',
            'quantity'=>'required',
            'condition'=>'required',
            'pubDate'=>'required'
        ]);

        Book::create([
            'title'     => $this->title,
            'author'     => $this->author,
            'publisher'    => $this->publisher,
            'isbn'  => $this->isbn,
            'quantity'   => $this->quantity,
            'condition'     => $this->condition,
            'pubDate'     => $this->condition,
        ]);

        $this->clearFields();
        $this->addMode=true;
        $this->viewMode=true;
    }

    public function editBook(){
        $id= $this->editID;

        $this->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'isbn'=> 'required|unique:books|min:10|max:13',
            'quantity'=>'required',
            'condition'=>'required',
            'pubDate'=>'required'
        ]);

        Book::find($id)->update([
            'title'    => $this->title,
            'author'   => $this->author,
            'publisher' => $this->publisher,
            'isbn'      => $this->isbn,
            'quantity'  => $this->quantity,
            'condition' => $this->condition,
            'pubDate' => $this->condition,
        ]);
        $this->clearFields();
        $this->editMode=false;
        $this->viewMode=true;
    }
    public function render()
    {
        $books=Book::paginate(5);
        return view('livewire.live-book',compact('books'));
    }
}
