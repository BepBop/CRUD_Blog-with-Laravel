<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController
{
    public function store()
    {
        $data = request()->validate([
            'title' => 'required|min:3',
            'excerpt' => 'required|min:3',
            'body' => 'required|min:3',

        ]);

         Post::create($data);
        return redirect('/dashboard');
    }

}
