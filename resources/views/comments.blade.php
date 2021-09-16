<div >
    <section>
        <header>
            <h1 class="text-uppercase text-truncate mt-5 font-weight-bold">comment</h1>
        </header>
    </section>
    <div class="m-auto text-center mt-5 col-lg-5 col-sm">
        <div>
            @if (session()->has('message'))
                <div class="bg-green-300 text-green-800 rounded shadow-sm ">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <div  class="mt-4">
        @if ($image)
        <img src="{{$image}}" width="250px" class="rounded m-2" alt="">

        @endif
        <input type="file" id="IMG" wire:change="$emit('fileChoosen')">

    </div>
        <small>  @error('newcomment') <span class=" d-flex justify-content-left  text-red-500 ">{{$message}}</span> @enderror</small>
    <div class="d-flex justify-content-center mt-2 mb-4">
        <input type="text"   wire:model="newcomment" class="form-control radius-10"   placeholder="What's your mind">
        <button wire:click="StoreComment" class="btn bg-transparent border-dark radius-10 ml-2">Add</button>
    </div>
  
  
        @foreach ($comments as $comment)
       
        
            <div class="jumbotron jumbotron-fluid  bg-graident-white radius-10 p-1">
                <div class="d-flex justify-content-between ml-2">
                <div class="d-flex">
                    <h3 class="mt-1 font-weight-bold">{{$comment->user->name}}</h3>
                    <small class="ml-2 mt-2">{{$comment->created_at->diffForHumans()}}</small>
                </div>
                <svg wire:click="remove({{$comment->id}})" style="cursor: pointer" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </div>
                <p class="ml-4">
                   {{$comment->body}}
                </p>
                @if ($comment->image)
                <img src="{{'storage/'.$comment->image}}"  class="img-fluid p-2 rounded shadow-sm" alt="">
                @endif
            </div>   
    
     
           

        @endforeach

        <div class="text-center">
            {{$comments->links('pagination-links')}}
        </div>

</div>

<script>
    livewire.on('fileChoosen',()=>{
   let InputField=document.getElementById('IMG');
   let file=InputField.files[0];

   let reader=new FileReader();

   reader.onloadend=()=>{
       window.livewire.emit('fileUploaded',reader.result);
   }

reader.readAsDataURL(file);

    })
</script>

