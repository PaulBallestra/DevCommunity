<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class CreatePost extends Component
{
    public $content;

    //Fonction createPost avec livewire
    public function createPost()
    {
        $this->validate(['content' => 'required']);
        $post = auth()->user()->posts()->create(['content' => $this->content]);

        $this->emit('postAdded', $post->id); //emit de l'event

        $this->content = ""; //vidage du body
    }

    public function render()
    {
        return view('livewire.create-post', ['user' => auth()->user()]);
    }
}
