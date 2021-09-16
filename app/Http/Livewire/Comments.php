<?php

namespace App\Http\Livewire;
use Livewire\Component;


use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\supportTicket;
use Intervention\Image\ImageManagerStatic;
use App\Models\comments as Appcomments;


class Comments extends Component{
    use WithFileUploads;
    use WithPagination;


  public $newcomment;
  public $image;

  public $ticketId=1;
  protected $listeners=[
      'fileUploaded'=>'HandleFileUplaid',
      'TicketSelected',
];
public function TicketSelected($ticketId){
    $this->ticketId=$ticketId;
}

  public function HandleFileUplaid($imageData){
      $this->image=$imageData;
  }


    public function updated($field)
    {
        $this->validateOnly($field,['newcomment'=>'required|max:255']);
    }


    public function remove($commentId){
        $commentDelete=Appcomments::findOrfail($commentId);
        $commentDelete->delete();
        session()->flash('message', 'comment Deleted successfully 😢');

    }
    
    public function StoreComment(){
    //Create new comment here
    $this->validate(['newcomment'=>'required|max:255']);
     $image=$this->StoreImage();
        $Created_comment = Appcomments::create([
            'body' => $this->newcomment,
            'user_id' => 7,
            'image'=>$image,
            'Support_ticket_id'=>$this->ticketId
        ]);
      session()->flash('message', 'comment added successfully 😃');


    }
    public function StoreImage(){
        if(!$this->image) return null;

        $img=ImageManagerStatic::make($this->image)->encode('jpg');
        $name=Str::random().'jpg';

        Storage::disk('public')->put($name,$img);
        return $name;



    }
    public function render() {
        return view('comments',['comments'=>Appcomments::where('Support_ticket_id',$this->ticketId)->latest()->paginate(2)]);
    }
}
