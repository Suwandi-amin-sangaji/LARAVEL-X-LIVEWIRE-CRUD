<div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">LARAVEL LIVEWIRE</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2"  wire:model="search"  type="search" placeholder="Search" aria-label="Search">
          </form>
      </nav>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    		<form wire:submit.prevent="update">
                <input type="hidden" wire:model="postId">
    			<div>
    				<label>Nama</label>
    				<input type="text" class="form-control  @error('nama') masukkan nama @enderror" wire:model="nama" placeholder="masukkan nama">
    				 @error('nama')
    				  <div class="alert alert-danger">
    				  {{ $message }}
    				  </div>
    				  @enderror
    			</div>
    			<div>
    				<label>Angkatan</label>
    				<input type="text" class="form-control @error('angkatan') masukkan angkatan @enderror" wire:model="angkatan" placeholder="angkatan">
    				 @error('angkatan')
    				  <div class="alert alert-danger">
    				  {{ $message }}
    				  </div>
    				  @enderror

    			</div>
                <button type="submit" class="btn btn-success mt-3"> UPDATE</button>
                <a href="{{ route('post.index') }}" class="btn btn-info mt-3"> BATAL</a>
    		</form>
    		</div>
    	</div>
    </>
</div>
