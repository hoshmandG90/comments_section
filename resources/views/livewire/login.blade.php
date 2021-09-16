<div class="col-lg-6">
    
  
  <div class=" bg-gradient-gray p-5 mt-2 text-center radius-10">
      <h1 class="text-3xl text-white mt-3 mb-3">Login Time</h1>
      <hr class="mt-2 mb-3">
      <form method="POST" wire:submit.prevent="LoginPage">
          @csrf
          
        
  
          <input wire:model="email"type="email" class="form-control radius-10 mt-2 mb-2" placeholder="Email">
          @error('email') <span class="d-flex justify-content-left text-danger mt-2 mb-1 ml-2">{{ $message }}</span> @enderror
  
          <input wire:model="password" type="password" class="form-control radius-10 mt-2 mb-2" placeholder="password">
          @error('password') <span class="d-flex justify-content-left text-danger mt-2 mb-1 ml-2">{{ $message }}</span> @enderror
  
  
          <button class="btn btn-darker mt-2 mb-3 w-full  shadow-sm--hover radius-10">Login</button>
      </form>
  </div>
  
     
  </div>