<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    //Function ajout de post
    public function createPost(Request $request){

        //Validation du contenu
        $request->validate([
            'content' => 'required'
        ]);

        //Vérif du contenu pas vide
        DB::insert('INSERT INTO posts (content, user_id, user_name, image) values ($request->content, Auth::user()->id, Auth::user()->name, null)');
    }

}
