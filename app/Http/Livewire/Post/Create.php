<?php

namespace App\Http\Livewire\Post;

use App\post;
use Livewire\Component;


class Create extends Component
{
	public $nama;
	public $angkatan;

	public function store()
	{
		// dd($this->nama);
        $this->validate([
            'nama'     => 'required',
            'angkatan' => 'required'
        ]);

        $posts = post::create([
            'nama'  => $this->nama,
            'angkatan' => $this->angkatan
        ]);

        session()->flash('success','data berhasil di tambah!!!');
        return redirect()->route('post.index');
	}
    public function render()
    {
        return view('livewire.post.create');
    }
}
