<div>
  @section('content')
  <div class="d-flex justify-content-center mt-5 m-2">
        


    <div class="col-lg-4 col-sm  border radius-10 m-2 ">
        @livewire('tickets')
    </div>
    <div class="col-lg-6 col-sm  border radius-10 m-2">
        @livewire('comments')

    </div>
</div>      
  @endsection
</div>
