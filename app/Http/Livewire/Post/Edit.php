<?php

namespace App\Http\Livewire\Post;

use App\post;
use Livewire\Component;

class Edit extends Component
{

    public $postId;
    public $nama;
    public $angkatan;

    // fungsi mount/construct adalah fungsi yang terus menerus di jalankan ketika class itu di di pakai
    public function mount($id)
    {
        $post = post::find($id);

        if($post)
        {
            $this->postId = $post->id;
            $this->nama   = $post->nama;
            $this->angkatan = $post->angkatan;
        }

    }

    public function update()
    {
        $post = post::find($this->postId);

        if($post)
        {
            $post->update([
                'nama'     => $this->nama,
                'angkatan' => $this->angkatan
            ]);

            session()->flash('success','data berhasil di update!!!');
            return redirect()->route('post.index');
        }
    }
    public function render()
    {
        return view('livewire.post.edit');
    }
}
