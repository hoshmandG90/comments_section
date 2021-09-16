<div>
    <h1>Support Tickets</h1>
          @foreach ($tickets as $ticket)
       
        <div  class="jumbotron jumbotron-fluid p-5 mt-3 radius-10 cursor-pointer {{$active == $ticket->id ? 'bg-green-200' : ''}}" wire:click="$emit('TicketSelected',{{$ticket->id}})">
       
            <p>
               {{$ticket->question}}
            </p>
        
        </div>   
  

        @endforeach
</div>
