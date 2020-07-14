<?php

namespace App\Http\Livewire\Post;

use App\post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    public $search;
    use WithPagination;
    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {
        $post = post::find($id);

        if($post)
        {
            $post->delete();
            session()->flash('success' , 'data berhasil di hapus!!!');
            return redirect()->route('post.index');
        }
    }

    public function render()
    {
        return view('livewire.post.index', [
        	'posts' => $this->search === null ? post::latest()->paginate(5): post::where('nama', 'like', '%'.$this->search.'%')->latest()->paginate(5)
        ]);
    }
}
