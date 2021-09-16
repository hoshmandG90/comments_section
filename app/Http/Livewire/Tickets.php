<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\supportTicket;

class Tickets extends Component
{
    public $active=1;


    protected $listeners=['TicketSelected'];

    public function TicketSelected($ticketId){
        $this->active=$ticketId;
    }
    public function render()
    {
        return view('tickets',['tickets'=>supportTicket::all()]);
    }
}
