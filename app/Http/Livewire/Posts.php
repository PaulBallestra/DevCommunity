<?php


namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
class Posts extends Component
{
    public $posts;


    public function mount(){
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.posts');
    }

}
