<div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">LARAVEL LIVEWIRE</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2"  wire:model="search"  type="search" placeholder="Search" aria-label="Search">
          </form>
      </nav>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12" style="margin-top: 40px;">
    			@if (session()->has('success'))
		            <div class="alert alert-success">
		                {{ session('success') }}
		            </div>
                @endif
                <a href="{{ route('post.create')}}" class="btn btn-success  bt-sm "> Tambah Data</a>
            {{-- <input class="form-control mr-sm-2" wire:model="search" type="search" placeholder="Search" aria-label="Search"> --}}
    		<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Angkatan</th>
			      <th scope="col">Option</th>
			    </tr>
			  </thead>
			  <tbody>
			   @foreach($posts as $post)
			   	 <tr>
			      <th scope="row">{{$loop->iteration}}</th>
			      <td>{{$post->nama}}</td>
			      <td>{{$post->angkatan}}</td>
			      <td>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info bt-sm"> Edit</a>
                    <button wire:click="destroy({{ $post->id }})" class="btn btn-danger bt-sm"> Hapus</button>
			      </td>
			    </tr>
			   @endforeach
			  </tbody>
            </table>
            {{$posts->links()}}
    		</div>
    	</div>
    </div>
</div>
